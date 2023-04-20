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
             
              
              <form action="{{route('partners.store')}}" method="post" enctype="multipart/form-data">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-4">
                    <label for="">Partners Name</label>
                    <input type="text" name="title" class="form-control" id="" @error('title') is-invalid @enderror placeholder="Enter Category Name" required value="{{old('title')}}">
                    <span style="color: red" >{{$errors->first('title')}}</span>
                  
                
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Logo</label>
                   <input type="file" class="form-control" name="image" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">website Url</label>
                   <input type="text" class="form-control" name="url" required placeholder="partner's website url">
                  </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Partners Description</label>
                        <textarea id="summernote" name="description"  required></textarea>
                    </div>
                </div>
<br>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Projects Overview</label>
                        <textarea id="meme" name="project_overview" required></textarea>
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
@push('scripts')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#meme').summernote();
});
</script>
@endpush
