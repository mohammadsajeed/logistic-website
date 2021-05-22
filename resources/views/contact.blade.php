@extends('index')

@section('title','Contact Info')
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
            <form class="form-horizontal"   method="post" action="add_contact" enctype="multipart/form-data">

               {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Contact Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Phone :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="phone" placeholder=" Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="email" placeholder=" Email Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Address :
                            </label>
                            
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required name="address" placeholder="Location Address ">
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
                <h5 class="card-title">Contact  information List</h5>
                <div class="table-responsive">
                  <div class="row">
                        
                     <div class="row"><div class="col-sm-12">
                       <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <tr >
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Delete</th>
                                    
                                    </tr>
                                </tr>
                            </thead>
                             <tbody> 
                                    @foreach ($contact as $contact_row)
                                    <tr  class="">
                                        <td class="">{{$contact_row->phone}}</td>
                                        <td>{{$contact_row->email}}</td>
                                        <td>{{$contact_row->address}}</td>
                                        <td><a href="contact_delete/{{$contact_row->id}}" class="btn btn-danger">Delete</a></td>
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