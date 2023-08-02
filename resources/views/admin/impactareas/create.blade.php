@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('research.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('impactareas.store')}}" method="post" enctype="multipart/form-data">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Impact Area Title</label>
                    <input type="text" name="title" class="form-control" id="" @error('title') is-invalid @enderror placeholder="Impact Area Title" required value="{{old('title')}}">
                    <span style="color: red" >{{$errors->first('title')}}</span>
                
                  </div>
                  {{-- <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Impact Area Images</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                          </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="images">
                      </div>
                      <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                  </div> --}}

                </div>
               
                 <br>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Impact Story Introduction</label>
                        <textarea id="meme" name="introduction" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Impact Story Description</label>
                        <textarea id="dada" name="description" required></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
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
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#dada').summernote();
});
</script>
{{-- <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> --}}
<script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script>
 $('#lfm').filemanager('image');

 </script>

 
@endpush
