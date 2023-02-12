@extends('admin.template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- if boold information  not exisit then only show -->
       
            <div class="col-md-12">
                 <div class="card">
                <div class="card-header">{{ __('Welcome to admin Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Your Blood Profile</h5>
                           
                        
                        </div>
                       
                   </div>

                
                </div>
            </div>
            </div>
        
    </div>
</div>
@stop