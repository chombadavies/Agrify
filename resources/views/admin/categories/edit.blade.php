
            <div class="card">
                <div class="card-header">Category</div>
  
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store',) }}">
                        @csrf
                <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
  
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" id="" @error('name') is-invalid @enderror placeholder="Category Name" required value="{{$category->name}}">
                                <span style="color: red" >{{$errors->first('name')}}</span>
                             
                            </div>
                        </div>
  
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Slug</label>
  
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" id="" @error('slug') is-invalid @enderror placeholder="Category Slug" required value="{{$category->name}}" readonly>
                                <span style="color: red" >{{$errors->first('slug')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Status</label>
  
                            <div class="col-md-6">
                                <select name="" id="" class="form-control">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">In Active</option>
                                </select>
                                
                            </div>
                        </div>
                       
                          <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      
  