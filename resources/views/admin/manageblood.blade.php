@extends('admin.template')
@section('content') 
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                {{ __('List of Donner') }}
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Blood Unit</a>
                                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#IssueBlood">Issue Blood</a>
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
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Blood Group</th>
                                        <th>Total Stock Count</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    <td>A+</td>
                                    <td>
                                        @php $Apluscount = App\Models\Donated::where('blood_group', 'A+')->count(); @endphp
                                        {{$Apluscount}} Unit
                                    </td>
                                    <td>
                                       
                                        <a href="{{route('admin.getIssueBlood', 'A+')}}">Issue Blood</a>
                                        <a href="">Request donnor</a>
                                    </td>
                                   </tr>
                                   <tr>
                                    <td>B+</td>
                                    <td>
                                        @php $count1 = App\Models\Donated::where('blood_group', 'B+')->count(); @endphp
                                        {{$count1}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>O+</td>
                                    <td>
                                        @php $count2 = App\Models\Donated::where('blood_group', 'O+')->count(); @endphp
                                        {{$count2}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>O-</td>
                                    <td>
                                        @php $count3 = App\Models\Donated::where('blood_group', 'O-')->count(); @endphp
                                        {{$count3}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>AB+</td>
                                    <td>
                                        @php $count4 = App\Models\Donated::where('blood_group', 'AB+')->count(); @endphp
                                        {{$count4}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>AB-</td>
                                    <td>
                                        @php $count5 = App\Models\Donated::where('blood_group', 'AB-')->count(); @endphp
                                        {{$count5}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>A-</td>
                                    <td>
                                        @php $count6 = App\Models\Donated::where('blood_group', 'A-')->count(); @endphp
                                        {{$count6}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                   <tr>
                                    <td>B-</td>
                                    <td>
                                        @php $count6 = App\Models\Donated::where('blood_group', 'B-')->count(); @endphp
                                        {{$count6}} Unit
                                    </td>
                                    <td></td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="modal fade" id="IssueBlood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Issue Blood</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.postIsssueBlood')}}" method="POST">
            @csrf()
        <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Issuer Name from Online Request </label>   
                            <select name="giveto" id="" class="form-control">
                                <option value="">Choose</option>
                            @foreach($requestednames as $requestname)
                                @php $name1 = User::find('requestname->user_id'); @endphp
                                <option value="{{$requestname->id}}-{{$requestname->user_id}}">{{$requestname->name}} {{$requestname->lname}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label>Issuer Name </label>   
                      <input type="text" class="form-control" name="issuer_name">
                    </div>
                   
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Blood Group *</label>
                        <select id="blood_group" class="form-control" name="blood_group"  required>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Unit *</label>
                       <input type="number" class="form-control" value="1">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Issue Date</label>
                        <input type="date" name="donate_date" class="form-control" value="{{date('Y-m-d')}}" required>
                      </div>
                      
                </div>
                    
                   
                   
                  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Issue</button>
        </div>
        </form>
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Blood Unit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.postAddDonorBlood')}}" method="POST">
            @csrf()
        <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Donator name </label>   
                       <select name="donnerid" id="" class="form-control">
                            <option value=""> Choose Donnor</option>
                            @foreach($donner as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->lname}}</option>
                            @endforeach
                       </select>
                    </div>
                </div>
                
               
               
                  
                <div class="row">
                   
                    <div class="form-group col-md-4">
                        <label>Blood Group *</label>
                        <select id="blood_group" class="form-control" name="blood_group"  required>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Donate Date</label>
                        <input type="date" name="donate_date" class="form-control" value="{{date('Y-m-d')}}" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Donate location</label>
                        <input type="text" name="donate_location" class="form-control" required>
                      </div>
                </div>
                    
                   
                   
                  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@stop
@section('js')

@stop