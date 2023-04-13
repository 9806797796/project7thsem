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
                            <div class="col-md-6" style="text-align: right;">
                                <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Blood Unit</a>
                               
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
                                        <th></th>
                                        
                                        <th>Donnor</th>
                                        <th>Collection at</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bloods as $blood)

                                        <tr>
                                            <td>Code</td>
                                           
                                            <td>
                                                @if($blood->user_id != Null)
                                                     @php $user = App\Models\User::where('id',$blood->user_id)->limit(1)->first(); @endphp
                                                    {{ $user->name}} {{$user->lname}}
                                                 @else
                                                    --
                                                @endif
                                            </td>
                                            <td>{{$blood->donate_date}}</td>
                                            <td>
                                                @if($blood->issue_status == 'N')
                                                <a class="btn btn-primary bloodissue1" id="{{$blood->id}}">Issue Blood</a>
                                                @else
                                                     <a class="btn btn-danger">Issued</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
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
                    <div class="form-group col-md-6">
                        <label>Blood Group *</label>
                       <input type="text" class="form-control" name="idddd" value="{{$type}}" disable>
                       <input type="hidden" name="donated_id" id="donated_id_modal">
                    </div>
                   
                    <div class="form-group col-md-6">
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
@stop
@section('js')
<script>
    $(document).ready(function() {
        $('a.bloodissue1').click(function() {
             var donatedid  = this.id;
             $("#donated_id_modal").val(donatedid);
            $('#IssueBlood').modal('show');
        });
    });
</script>
        
@stop