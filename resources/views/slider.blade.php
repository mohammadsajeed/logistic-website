@extends('index')
@section("title"," Slider managments")
@section("body")
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
            <form class="form-horizontal"   method="post" action="add_slider" enctype="multipart/form-data">

               {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Slider Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Title :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="title" placeholder="Slider Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Description :
                            </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="description" placeholder="Description  Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname"  required class="col-sm-3 text-end   control-label col-form-label">Picture :</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="file" >
                            <br>
                            <button type="submit" class="btn btn-primary">Ceate Slider</button>
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Picture</th>
                                        <th>Delete</th>
                                    
                                    </tr>
                                </tr>
                            </thead>
                             <tbody> 
                                    @foreach ($red_slider as $slider)
                                    <tr  class="">
                                        <td class="">{{$slider->title}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td><a href="pic/{{$slider->pic}}" target="blank"><img src="pic/{{$slider->pic}}" height="60px" width="60pc" alt=""></a></td>
                                        <td><a href="slider_delete/{{$slider->id}}" class="btn btn-danger">Delete</a></td>
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