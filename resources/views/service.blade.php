@extends('index')
@section('title','Service Managments')
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
            <form class="form-horizontal"   method="post" action="add_service" enctype="multipart/form-data">

               {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Service Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Title :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="title" placeholder="Please insert title here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Description :
                            </label>
                        <div class="col-sm-9">
                            <textarea name="description" id="editor" rows="10" cols="80">
                        
                            </textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Add Service</button>
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
                                        <th>Delete</th>
                                    
                                    </tr>
                                </tr>
                            </thead>
                             <tbody> 
                                    @foreach ($service as $service_row)
                                    <tr  class="">
                                        <td class="">{{$service_row->title}}</td>
                                        <td>{!! $service_row->description !!}</td>
                                        <td><a href="service_delete/{{$service_row->id}}" class="btn btn-danger">Delete</a></td>
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