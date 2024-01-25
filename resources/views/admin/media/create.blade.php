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
             
              
              <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data">@csrf
    
                <div class="card-body">
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Media Type</label>
                  <select id="type" name="type" class="form-control">
                    <option selected disabled>Select Media Type</option>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                  </select>
                
                  </div>
                  <div class="form-group col-md-6 video">
                    <label for="exampleInputEmail1">Video Link</label>
                  <input type="text" class="form-control" name="video_link" placeholder="video link">
                  </div>
                  <div class="form-group col-md-6 video" >
                    <label for="exampleInputEmail1">Video title</label>
                  <input type="text" class="form-control" name="video_title" placeholder="video title">
                  </div>

                  <div class="form-group col-md-6 image" >
                    <label for="exampleInputEmail1">Image</label>
                   <input type="file" class="form-control" name="image" >
                  </div>
                  <div class="form-group col-md-6 image">
                    <label for="exampleInputEmail1">Image Caption</label>
                   <input type="text" class="form-control" name="image_caption" >
                  </div>
                  

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
<script>
    $(document).ready(function(){
    $(".image").hide();
    $(".video").hide();



    $('#type').on('change',function(e){
    e.preventDefault();
    var type=$(this).val();
if(type=="image"){
    $(".image").show(); 
    $(".video").hide();
}else{
    $(".video").show();
    $(".image").hide();
}
    
        })


    $("#categoryId").on("change",function(e){
       e.preventDefault();
        var id=$(this).val();
          if(id.length>0)
          {
              var url="<?=url('/item/catyegory/getProducts')?>/"+id;
               $.get(url,function(data){
                //  alert(data);
                   $("#productId").html(data);
               })
          }



   });
    });
    </script>
@endpush
