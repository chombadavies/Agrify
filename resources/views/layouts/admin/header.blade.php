<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="btn btn-outline-info"> <i class="fa fa-home"></i></a>
      </li>
      <br>
      {{-- {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info"> <i class="fa fa-box"></i> Products</a>
      </li>
      <br> --}}
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('orders.index')}}" class="btn btn-outline-info"> <i class="fa fa-laptop"></i> Casheer</a>
      </li>
      <br>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info "> <i class="fa fa-file"></i>Reports</a>
      </li>
      <br>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info"> <i class="fa fa-money-bill"></i> transactions</a>
      </li>
      <br>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info rounded-pill"> <i class="fa fa-users"></i>Customers</a>
      </li>
      <br>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info"> <i class="fa fa-users"></i>Suppliers</a>
      </li>
      <br>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-outline-info"> <i class="fa fa-truck"></i>Incomings</a>
      </li>
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <li class="nav-item btn btn-info btn-sm">
        <a class="dropdown-item btn btn-outline-info" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>
  
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
      </li>
    </ul>
  </nav>