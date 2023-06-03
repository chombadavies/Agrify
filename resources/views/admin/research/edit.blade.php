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
             
              
              <form action="{{route('research.update',$research_activity->id)}}" method="post" enctype="multipart/form-data">@csrf
    @method('put')
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Research Title</label>
                    <input type="text" name="title" class="form-control" id="" @error('title') is-invalid @enderror placeholder="Enter Research Title" required value="{{$research_activity->title}}">
                    <span style="color: red" >{{$errors->first('title')}}</span>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Research Alias</label>
                    <input type="text" name="alias" class="form-control" id="" @error('alias') is-invalid @enderror placeholder="Enter Research Alias" required value="{{$research_activity->alias}}">
                    <span style="color: red" >{{$errors->first('alias')}}</span>
                  </div>

                  <div class="form-group col-md-4">
                    <label for=""> Research Activity Category</label>
                  <select name="category_id" class="form-control">
                    <option selected disabled>Select Category</option>
                   @foreach ($categories as $category)
                   <option value="{{$category->id}}">{{$category->title}}</option> 
                   @endforeach

                  </select>
              </div>
                 
                </div>


                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Image</label>
                       <input type="file" class="form-control" name="image" required>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Research Centre</label>
                       <input type="text" class="form-control" name="center" required value="{{$research_activity->center}}">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Principal Researcher</label>
                       <input type="text" class="form-control" name="principal_researcher" required value="{{$research_activity->principal_researcher}}">
                      </div>

                  </div>
               
<br>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Research Description</label>
                        <textarea id="meme" name="description" required>{{$research_activity->description}}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Research Objectives</label>
                        <textarea id="mama" name="objectives" required>{{$research_activity->objectives}}</textarea>
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

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#mama').summernote();
});
</script>
@endpush
