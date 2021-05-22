@extends('index')
@section('title','Add Company Advisers')
@section('body')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            {{-- @if(session()->has('erros'))
                {}              
            @endif --}}
            @if(session()->has('success'))
            <div class=" alert alert-success">
                {{session('success')}}
            </div>    
            @endif
            @if(session()->has('den'))
            <div class=" alert alert-danger">
                {{session('den')}}
            </div>   
            @endif
            <form class="form-horizontal"   method="post" action="add_adviser" enctype="multipart/form-data">

               {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Advisor  Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="adv_name" placeholder=" Adviser Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Position :
                            </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="ad_position" placeholder=" Adviser  position ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname"  required class="col-sm-3 text-end   control-label col-form-label">Picture :</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="file" >
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                     
                </div>
                <div class="border-top">
                    <div class="card-body">
                       
                    </div>
                </div>
            </form>
        </div>

      
    </div>
   
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Slider information List</h5>
                <div class="table-responsive">
                  <div class="row">
                        
                     <div class="row"><div class="col-sm-12">
                       <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <tr >
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Picture</th>
                                        <th>Delete</th>
                                    
                                    </tr>
                                </tr>
                            </thead>
                             <tbody> 
                                    @foreach ($adv_red as $adviser)
                                    <tr  class="">
                                        <td class="">{{$adviser->name}}</td>
                                        <td>{{$adviser->posetion}}</td>
                                        <td><a href="pic/{{$adviser->pic}}" target="blank"><img src="pic/{{$adviser->pic}}" height="60px" width="60pc" alt=""></a></td>
                                        <td><a href="delete_ad/{{$adviser->id}}" class="btn btn-danger">Delete</a></td>
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
</div>

    
@endsection