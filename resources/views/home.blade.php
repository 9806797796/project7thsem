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
        @endphp
        @if($bloodinformation)
            <div class="col-md-12">
                 <div class="card">
                <div class="card-header">{{ __('Add your Blood Information') }}</div>

                <div class="card-body">
                    <h5>Your Blood Profile</h5>
                    <strong>Blood Name : {{$bloodinformation->bloodgroup}} </strong> <br />
                    <strong> Any Diseases :
                        @if($bloodinformation->any_diseases == Null)
                        N/A
                    @else
                        {{$bloodinformation->any_diseases}}
                    @endif
                    </strong>

                
                </div>
            </div>
            </div>
        @else
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add your Blood Information') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                         <form method="POST" action="{{ route('postAddBlood') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Blood Group') }}</label>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input cdn" id="cdn" type="checkbox" name="any_diseases" id="any_diseases">

                                    <label class="form-check-label" for="any_diseases">
                                        {{ __('Any Diseases') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 dn" id="dn">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Diseases Name') }}</label>

                            <div class="col-md-6">
                                <input id="diseases" type="text" class="form-control " name="diseases" required>
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
<script type="text/javascript">
    $(function () {
        $("#cdn").click(function () {
            if ($(this).is(":checked")) {
                $("#dn").show();
            } else {
                $("#dn").hide();
            }
        });
    });
</script>
@stop
