@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('valuechains.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('valuechains.update',$valuechain->id)}}" method="post" enctype="multipart/form-data">@csrf
               @method('put')
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">ValueChain Title</label>
                    <input type="text" name="title" class="form-control" id="" @error('title') is-invalid @enderror placeholder="Enter Category Name" required value="{{$valuechain->title}}">
                    <span style="color: red" >{{$errors->first('title')}}</span>
                  
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Image</label>
                   <input type="file" class="form-control" name="image" required value="{{$valuechain->image}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Value Chain Category</label>
                  <select name="category" class="form-control">
                    <option selected disabled>Select Category</option>
                    <option value="crops"  {{$valuechain->category =='crops'?'selected': ''}}>Crops</option>
                    <option value="livestock"{{$valuechain->category =='livestock'?'selected': ''}}>Livestock</option>
                    <option value="aquaculture"{{$valuechain->category =='aquaculture'?'selected': ''}}>Aquaculture</option>
                    <option value="apiculture"{{$valuechain->category =='apiculture'?'selected': ''}}>Apiculture</option>
                  </select>
                  </div>
                </div>
               

                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">ValueChain Introduction</label>
                        <textarea id="summernote" name="introduction"  required>{{$valuechain->introduction}}</textarea>
                    </div>
                </div>
<br>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">ValueChain Description</label>
                        <textarea id="meme" name="description" required>{{$valuechain->description}}</textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
              </form>
            </div>
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
@push('scripts')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#meme').summernote();
});
</script>
@endpush