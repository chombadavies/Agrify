
    <section class="content">
        <div class="container-fluid">
          <div class="row">
  
          
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"> <small></small></h3>
                </div>
                
              <form action="{{route('counties.store')}}" method="post">@csrf
  
      
                  <div class="card-body">
                      <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">County Name</label>
                      <input type="text" name="countyname" class="form-control" id="" @error('countyname') is-invalid @enderror placeholder="Enter County Name" required value="{{old('countyname')}}">
                      <span style="color: red" >{{$errors->first('countyname')}}</span>
                    
                  
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">County Code</label>
                      <input type="number" name="countycode" class="form-control" id="" @error('countycode') is-invalid @enderror placeholder="Enter County Name" required value="{{old('countycode')}}">
                      <span style="color: red" >{{$errors->first('countycode')}}</span>
                    </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
     
  
  