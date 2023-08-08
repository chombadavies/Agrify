@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('media.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('media.update',$media->id)}}" method="post" enctype="multipart/form-data">@csrf
    @method('put')
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Media Type</label>
                  <select id="type" name="type" class="form-control">
                    <option selected disabled>Select Media Type</option>
                    <option value="image"{{$media->type=="image"?'selected': ''}}>Image</option>
                    <option value="video" {{$media->type=='video'?'selected':''}}>Video</option>
                  </select>
                
                  </div>
                  @if ($media->type=='video')
                  <div class="form-group col-md-6 video">
                    <label for="exampleInputEmail1">Video Link</label>
                  <input type="text" class="form-control" name="video_link" placeholder="video link" value="{{$media->video_link}}">
                  </div>
                  <div class="form-group col-md-6 video" >
                    <label for="exampleInputEmail1">Video title</label>
                  <input type="text" class="form-control" name="video_title" placeholder="video title" value="{{$media->video_title}}">
                  </div>
                  @else

                  <div class="form-group col-md-6 image" >
                    <label for="exampleInputEmail1">Image</label>
                   <input type="file" class="form-control" name="image">
                   <img src="{{asset('backend/uploads/'.$media->image)}}" alt="" height="50" width="50">
                  </div>
                  <div class="form-group col-md-6 image">
                    <label for="exampleInputEmail1">Image Caption</label>
                   <input type="text" class="form-control" name="image_caption" value="{{$media->image_caption}}" placeholder="image caption">
                  </div>
                  @endif
                </div>


                {{-- <div class="row">
                    <div class="form-group col-md-6" id="image">
                        <label for="exampleInputEmail1">Image</label>
                       <input type="file" class="form-control" name="image"  required>
                      </div>
                    
                </div> --}}
                </div>

               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
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

@endpush
