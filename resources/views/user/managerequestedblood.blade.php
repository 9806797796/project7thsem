@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Requested Blood') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Requested Blood</th>
                                        <th>Request Date & Time</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($requestedbloods->count())
                                        @foreach($requestedbloods as $item)
                                            <tr>
                                                <td>{{$item->pname}}</td>
                                                <td>
                                                    {{$item->requestedblood}}
                                                    <small> ({{$item->requestedbloodunit}} unit)</small>
                                                </td>
                                                <td>{{$item->requesteddatetime }}</td>
                                                <td>
                                                    @if($item->accpected == Null)
                                                        Waiting Response
                                                    @else
                                                        {{$item->bloodbankmessage}}
                                                    @endif
                                                </td>
                                                <td><a href="">Cancel Request</a></td>
                                            </tr> 
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"> No any request yet</td>
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