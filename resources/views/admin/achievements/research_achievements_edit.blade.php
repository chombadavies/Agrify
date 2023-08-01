@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('research_achievements.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
             
              
              <form action="{{route('research_achievements.update',$achievement->id)}}" method="post" enctype="multipart/form-data">@csrf
                @method('put')
    
                <div class="card-body">
                    <div class="row">
                 
                 
                  <div class="form-group col-md-6">
                    <label for=""> Research Activity Category</label>
                  <select name="research_id" class="form-control">
                    <option selected disabled>Select Category</option>
                   @foreach ($research_activities as $activity)
                   <option value="{{$activity->id}}"{{$achievement->research_id==$activity->id ? 'selected': ''}} >{{$activity->title}}</option> 
                   @endforeach

                  </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label >Research Status</label>
                  <select name="status" class="form-control">
                    <option slected disabled>Select Status</option>
                    <option value="Ongoing" {{$achievement->status=='Ongoing'?'selected': ''}}>On-Going</option>
                    <option value="Completed" {{$achievement->status=='Completed'?'selected': ''}}>Completed</option>
                  </select>
                  </div>
                </div>
               
               <br>
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Achievement Description</label>
                        <textarea id="meme" name="description" required>{{$achievement->description}}</textarea>
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
