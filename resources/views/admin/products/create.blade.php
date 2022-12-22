@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('categories.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('products.store')}}" method="post">@csrf

    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Category Name</label>
                  <select name="category_id" id="" class="form-control" required>
                    <option value="" selected disabled> Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                    <span style="color: red" >{{$errors->first('name')}}</span>
                  
                
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product Serial Number</label>
                    <input type="number" name="serial_number" class="form-control" id="" @error('serial_number') is-invalid @enderror placeholder="Enter Serial Number" required value="{{old('serial_number')}}">
                    <span style="color: red" >{{$errors->first('serial_number')}}</span>
                  
                
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Confirm Serial Number</label>
                      <input type="number" name="serial_number_confirmation" class="form-control" id="" placeholder="Enter Serial Number" required value="{{old('serial_number')}}">
                     
                    
                  
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Category price</label>
                      <input type="number" name="price" class="form-control" id="" @error('price') is-invalid @enderror placeholder="Enter Category Name" required value="{{old('price')}}">
                      <span style="color: red" >{{$errors->first('price')}}</span>
                    
                  
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Brand</label>

                      <select name="Brand" id="" class="form-control">
                          <option value="" selected disabled>Select Status</option>
                          <option value="brand1">brand Name1</option>
                          <option value="brand2">brand Name2</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Product Description</label>
             <textarea name="description" id="" class="form-control" cols="10" rows="3" placeholder="product Description">{{old('description')}}</textarea>
                      <span style="color: red" >{{$errors->first('description')}}</span>
                    
                  
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