@extends('layouts.admin.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=route('all_achievements.index')?>" class="btn btn-sm btn-info"><span class="fa fa-bars">View List </span></a>
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
    @include('layouts.notifications')

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
             
              
              <form action="{{route('project_achievements.update',$achievement->id)}}" method="post" enctype="multipart/form-data">@csrf
    @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"> 
                            <select name="partner_id" id="partner_id" class="form-control">
                                <option selected disabled>Select Partner</option>
                                @foreach ($partners as $partner)
                                <option value="{{$partner->id}}" {{$achievement->partner_id==$partner->id?'selected':''}}>{{$partner->title}}</option> 
                                @endforeach
                               
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="project_id" id="project_id" class="form-control">
                                <option selected disabled>Select Project</option>
                             
                            </select>
                        </div>
                    </div>
                    <br>
                
                <div class="row">
                    <div class="col-md-12" class="form-control">
                        <label for="">Achievement introduction</label>
                        <textarea id="meme" name="introduction" required >{{$achievement->introduction}}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12" class="form-control">
                      <label for="">Achievement Description</label>
                      <textarea id="data" name="achievements" required>{{$achievement->achievements}}</textarea>
                  </div>
              </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Upadate</button>
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
$('#data').summernote();
});
</script>

<script>

    $('#partner_id').on('change',function(e){
    e.preventDefault();
    var id =$(this).val();
    // alert(id);
        var url="<?=url('/admin/cascade_projects')?>/"+id;
         
        $.get(url,function(data){    
            //   alert(data);         
            $('#project_id').html(data);
        })
 

    })

</script>
@endpush
