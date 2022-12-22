@extends('layouts.admin.main')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              <?=$page_title?>
              @include('layouts.notifications')
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
             
            </ol>
          </div>
        </div>
        {{-- <div class="line">
          <hr style="border: 4px solid green">
          </div> --}}
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-12">
            <a style="cursor:pointer;color:white" href="{{route('categories.create')}}" class="btn btn-sm btn-info"><span class="fa fa-plus"><span>Create Category</a>
{{-- 
                                        <a href="<?=route('purchases.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span>List of Purchases</a>
                                          <a href="<?=route('upload.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span>View Uploads</a> --}}
 </div>

          <div class="col-12">
       
            <div class="card">

          </div>
            <!-- /.card -->

            <div class="card card-info card-outline">
           
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                   <table id="SystemPermisions" class="table table-bordered table-striped"  style="width: 100%;">
                  <thead class="table bg-info">
                  <tr>
                    
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                  
                   
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                </table>
                  
                </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push("scripts")

<style>
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #96d6d6;
}
</style>

<script>
        
          
       $('#SystemPermisions').DataTable({
        processing: true,
        serverSide: true,
         pageLength:25,
         "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "order": [[1, "desc" ]],
     
           ajax:'<?=url("/portal/fethcategories")?>',
            columns: [
            {data: 'action', name: 'action',searchable:false,orderable:false}, 
           {data: 'name', name: 'name'},
           {data: 'slug', name: 'slug'},
           {data: 'status', name: 'status'},
              
            ],
          


            dom: 'Bfrtip',

        buttons: [
         'pageLength',
        ],
        });
    </script>

@endpush
{{-- /fetchpurchases --}}