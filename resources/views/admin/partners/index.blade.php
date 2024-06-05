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
             
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
             
            </ol>
          </div>
        </div>
        <div class="col-md-8"> @include('layouts.notifications')</div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">

            <a href="<?=route('partners.create')?>" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> Add New Partner</a>
                                       
 </div>

          <div class="col-12">
               
           

            <div class="card">

          </div>
            <!-- /.card -->

            <div class="card2 card-success card-outline">
           
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                   <table id="SystemPermisions" class="table table-bordered table-striped table-info"  style="width: 100%;">
                  <thead class="table ">
                  <tr>
                    
                                        <th>Action</th>
                                        <th>Client Title</th>
                                        <th>Logo</th>
                                         <th>Service Description</th>
                                        
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
<script>    
       $('#SystemPermisions').DataTable({
        processing: true,
        serverSide: true,
         pageLength:25,
         "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "order": [[1, "desc" ]],
       
           ajax:'<?=url("/admin/fetchpartners")?>',
            columns: [      $models = DB::select('SELECT * FROM `partners`');
        
        return Datatables::of($models)
           ->rawColumns(['action','photo'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset($name);
            //    $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Partner image" >';
           })

            ->addColumn('action', function ($model) {
                $edit_url = route('partners.edit',$model->id);
                $view_url = route('partners.show',$model->id);
             
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Partner</a></li>

        </ul>
        </div> ';

            })
            ->make(true);
            {data: 'action', name: 'action',searchable:false,orderable:false},
           {data: 'title', name: 'title'},
           {data: 'photo', name: 'photo'},
           {data: 'description', name: 'description'},
          
         
            ],

            dom: 'Bfrtip',

        buttons: [
         'pageLength',
        ],
        });
    </script>

@endpush
