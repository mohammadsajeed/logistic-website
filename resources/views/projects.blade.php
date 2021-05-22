@extends('index')
@section('title','Projects Managment')
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
            @if(session()->has('dan'))
            <div class=" alert alert-danger">
                {{session('dan')}}
            </div>   
            @endif
            @if(session()->has('w'))
            <div class="alert alert-warning">
                {{session('w')}}
            </div>
                
            @else
                
            @endif
            <form class="form-horizontal"   method="post" action="add_project" enctype="multipart/form-data">

               {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Project Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Project Name :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="title" placeholder="Please insert title here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label"> Project Description :
                            </label>
                        <div class="col-sm-9">
                            <textarea name="description" id="editor" rows="10" cols="80">
                               
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname"  required class="col-sm-3 text-end   control-label col-form-label">Picture :</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="file" >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label"> Project Date :
                            </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name =" project_date"id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                            <br>
                            <button type="submit" class="btn btn-primary">Add Project</button>
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
                <h5 class="card-title">Service information List</h5>
                <div class="table-responsive">
                  <div class="row">
                        
                     <div class="row"><div class="col-sm-12">
                       <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <tr >
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Picture></th>
                                        <th>Delete</th>
                                    
                                    </tr>
                                </tr>
                            </thead>
                             <tbody> 
                                    @foreach ($project as $project_row)
                                    <tr  class="">
                                        <td class="">{{$project_row->title}}</td>
                                        <td>{!! $project_row->description !!}</td>
                                        <td><a href="pic/{{$project_row->pic}}" target="blank"><img src="pic/{{$project_row->pic}}" width="60px" height="60px" alt=""></a></td>
                                        <td><a href="project_delete/{{$project_row->id}}" class="btn btn-danger">Delete</a></td>
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
    
