@extends('layouts.app')
@section('css')
   <style type="text/css">
        .dn{
        display:none;
    }
   </style>
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- if boold information  not exisit then only show -->
        @php
            $bloodinformation = App\Models\Blood::where('user_id', Auth()->user()->id)->limit(1)->first();
            $latestdonate = App\Models\Donated::where('user_id', Auth()->user()->id)->limit(1)->first();
        @endphp
        @if($bloodinformation)
            <div class="col-md-12">
                 <div class="card">
                <div class="card-header">{{ __('Add your Blood Information') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Your Blood Profile</h5>
                            <strong>Blood Name : {{$bloodinformation->blood_group}} </strong> <br />
                            <strong> Any Diseases or Regular Medicine Used :
                                @if($bloodinformation->any_diseases == Null)
                                N/A
                            @else
                                {{$bloodinformation->any_diseases}}
                            @endif
                            </strong> <br />
                        <strong>
                            Latest Blood Donate Date :
                            @if($latestdonate)
                                {{$latestdonate->latest_donate_date}}
                            @else
                                N/A
                            @endif
                        </strong>
                        </div>
                        <div class="col-md-6">
                            <h5>Your Personal Information</h5>
                            <strong>Full Name : {{Auth()->user()->name}} {{Auth()->user()->lname}}</strong> <br />
                            <strong>Gender : {{Auth()->user()->gender}} Date of Birth: {{$bloodinformation->dob}}</strong><br />
                            <strong>Contact Number : {{Auth()->user()->email}}</strong> <br />
                            <strong>Address : {{ Auth()->user()->tole }}, {{Auth()->user()->city}}-{{Auth()->user()->word_no}}, {{ Auth()->user()->minicipality }}, {{ Auth()->user()->district }}, {{ Auth()->user()->province }} </strong>
                        </div>
                   </div>

                
                </div>
            </div>
            </div>
        @else
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Your Blood Information') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                         <form method="POST" action="{{ route('user.postAddBlood') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Blood Group *') }}</label>

                            <div class="col-md-6">
                                <select id="blood_group" class="form-control" name="bloodgroup"  required>
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
                        </div>
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">Date of Birth *</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="dob"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="disesase" class="col-md-4 col-form-label text-md-end">If any Disesase or Regular Meducin used, Please define (Optional)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="any_diseases"/>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('js')

@stop
