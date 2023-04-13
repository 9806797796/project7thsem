@extends('admin.template')
@section('content') 
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                List of {{$type}} blood
                            </div>
                           
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('message'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-primary" role="alert">
                                        {{ session('message') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <form action="{{route('admin.postListfofDonnorToRequest', $type)}}" method="POST">
                                @csrf()
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Blood Group</th>
                                        
                                        <th>Donnor</th>
                                        <th>Mobile Number</th>

                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bloods as $blood)
                                   
                                         @php $user = App\Models\User::where('id',$blood->user_id)->limit(1)->first(); @endphp
                                        <tr>
                                            <td><input type="checkbox" name="checked[]" value="{{$user->email}}"></td>
                                            <td>{{$blood->blood_group}}</td>
                                           
                                            <td>
                                                @if($blood->user_id != Null)
                                                    
                                                    {{ $user->name}} {{$user->lname}}
                                                 @else
                                                    --
                                                @endif
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                               {{$user->province}}, {{$user->district}}, {{$user->minicipality}}-{{$user->word_no}}
                                            </td>
                                        </tr>
                                        <input type="hidden" name="mobilenumber[]" value="{{$user->email}}">

                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Request Blood Donation via SMS">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@stop
@section('js')

        
@stop