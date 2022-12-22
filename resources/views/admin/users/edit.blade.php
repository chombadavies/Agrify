
            <div class="card">
              <div class="card-header">{{ __('Edit User') }}</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('users.update',$user->id) }}">
                      @csrf
                      @method('patch')

                      <div class="row mb-3">
                          <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                          <div class="col-md-6">
                              <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}" required autocomplete="phone">

                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch Name') }}</label>

                          <div class="col-md-6">
                              <select name="branch_id" id="" class="form-control">
                                  <option value="Select Branch" selected disabled>Select Branch</option>
                                  @foreach ($branches as $branch)
                                  <option value="{{$branch->id}}" {{$user->branch_id==$branch->id? 'selected':''}}>{{$branch->name}}</option>
                                  @endforeach
                              </select>

                              @error('branch')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      {{-- <div class="row mb-3">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div> --}}
                           <div class="row mb-3">
                          <label for="Role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                          <div class="mb-3">
                              @foreach ($roles as $role)
                                  <div class="form-radio">
                                     <input type="radio" name="role_id" value="{{$role->id}}" @if(in_array($role->id,$user->roles->pluck('id')->toArray())) checked @endif>  
                                     <label for="{{$role->name}}">{{$role->name}}</label>
                                  </div>
                              @endforeach
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
    
