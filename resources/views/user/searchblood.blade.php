@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Search Blood') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{route('user.postSearchDonner')}}" method="GET">
                                @csrf()
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <br />
                                            <label>Province *</label> 
                                            <select class="form-control" name="province" required>
                                                <option value="Province 1">Province 1</option>
                                                <option value="Madesh Province">Madesh Province</option>
                                                <option value="Bagmati Province">Bagmati Province</option>
                                                <option value="Gandaki Province">Gandaki Province</option>
                                                <option value="Lumbeni Province">Lumbeni Province</option>
                                                <option value="Karnali Province">Karnali Province</option>
                                                <option value="Sudurpashchim Province">Sudurpashchim Province</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <br />
                                            <label>Request Blood Group *</label>
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
                                        <div class="col-md-4 form-group">
                                            <br /> <br />
                                            <button type="submit" class=" col-md-12 btn btn-primary btn-block" onClick="signup()"> Search  </button>
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