@extends('layouts.admin.main')

@section('content')
<div class="content-wrapper">
  <div class=""></div>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
    
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-partner"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Co-Applicants</span>
              <span class="info-box-number">
                {{App\Models\Coapplicant::count()}}
               
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-leaf"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Value chains</span>
              <span class="info-box-number">{{App\Models\ValueChain::count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fi fi-ss-pipette"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Research Activities</span>
              <span class="info-box-number">{{App\Models\Research::count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-l"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Imapact Stories</span>
              <span class="info-box-number">{{App\Models\ImpactArea::count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

  

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Received  Messages</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card card-info card-outline">
           
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('feedback.edit')}} " method="post"> @csrf 
                <div class="table-responsive">
                   <table id="SystemPermisions" class="table table-bordered table-striped"  style="width: 100%;">
                  <thead class="table bg-info">
                  <tr>
                    <th>Action</th>
                    <th>Client Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Message Date</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                </table>
                  
                </div>
             

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">

              <div class="row">
                <div class="col-md-3">
                  <button class="btn btn-info btn-block" type="submit">Respond </button>
                    </div>

                <div class="col-md-3">  
                </div>
              </div>
            </div>
          </form>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

     
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
<style>
  .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
background-color: #96d6d6;
}
</style>
@push('scripts')

<script>
   
  $('#SystemPermisions').DataTable({
   processing: true,
   serverSide: true,
    pageLength:25,
    "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
   "order": [[1, "desc" ]],

      ajax:'<?=url("/admin/fetchmessages")?>',
       columns: [
       {data: 'action', name: 'action',searchable:false,orderable:false}, 
      {data: 'name', name: 'name'},
      {data: 'email', name: 'enmail'},
      {data: 'phone', name: 'phone'},
      {data: 'message', name: 'message'},
      {data: 'status', name: 'status'},
      {data: 'created_at', name: 'created_at'},
                   ],
     


       dom: 'Bfrtip',

   buttons: [
    'pageLength',
   ],
   });
</script>
    
@endpush