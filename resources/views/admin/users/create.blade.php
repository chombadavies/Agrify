@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('users.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
            <a href="" class="btn btn-sm btn-danger"><span class="fa fa-download"><span>Upload Data</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('users.store')}}" method="post">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Enter  Name" required value="{{old('name')}}">
                    <span style="color: red" >{{$errors->first('name')}}</span>
                  
                
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="" @error('email') is-invalid @enderror placeholder="Enter email Address" required value="{{old('email')}}">
                    <span style="color: red" >{{$errors->first('email')}}</span>
                  
                
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="email">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="" @error('phone') is-invalid @enderror placeholder="Enter Phone Number" required value="{{old('phone')}}">
                    <span style="color: red" >{{$errors->first('phone')}}</span>
                  
                
                  </div>
                 
                      <div class="form-group col-md-4">
                    <label for="password">Default Password: <small>123456</small> </label>
                    <input type="password" name="password" class="form-control" id="" @error('password') is-invalid @enderror placeholder="Enter Password " required value="123456" readonly>
                    <span style="color: red" >{{$errors->first('password')}}</span>
                  
                
                  </div>
                </div>
                   <div class="row mb-2">
                  <label for="Role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
    
                  <div class="mb-2">
                      @foreach ($roles as $role)
                          <div class="form-radio">
                             <input type="radio" name="role_id" value="{{$role->id}}">  
                             <label for="{{$role->name}}">{{$role->name}}</label>
                          </div>
                      @endforeach
                      </div>
              </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection





