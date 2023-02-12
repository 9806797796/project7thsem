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
                                <a href="" class="btn btn-primary">Add New Donner</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Province</th>
                                        <th>District</th>
                                        <th>Minicipality</th>
                                        <th>City</th>
                                        <th>Tole</th>
                                        <th>Blood Group</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($donners->count())
                                        @foreach($donners as $item)
                                            <tr>
                                                <td>{{$item->user->name}} {{$item->user->lname}}</td>
                                                <td>{{$item->user->province}}</td>
                                                <td>{{$item->user->district }}</td>
                                                <td>{{$item->user->minicipality }}</td>
                                                <td>{{$item->user->city }}-{{$item->user->word_no}}</td>
                                                <td>{{$item->user->tole}}</td>
                                                <td>
                                                    {{$item->blood_group}}
                                                    <small style="display: block;">Latest Blood donate Date : N/A </small>
                                                </td>
                                                <td>Ok</td>
                                                <td><a href="">Edit</a> | <a href="">Delete</a></td>
                                            </tr> 
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"> No any contribution yet</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@stop
@section('js')

@stop