<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('portal')}}" class="brand-link" style="background-color: whitesmoke" >
      <img src="{{asset('frontend/img/agrifi-csapp-logo.png')}}" alt="Agrify Logo" class="brand-image" class="brand-image img-circle elevation"
           style="">
      {{-- <span class="brand-text font-weight-light"></span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">{{Auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('portal')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li>
          {{-- <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <span class="right badge badge-info">{{App\Models\User::count()}}</span>
              </p>
            </a>
          </li> --}}
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                AgriFI Partners
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('partners.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>create a Partner

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('partners.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Partners

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('projects.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>create Project

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('projects.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Projects

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Value Chains
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('valuechains.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>create Value Chain

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('valuechains.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Value Chains

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Dissemination Materials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('materials.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Dissemination Material

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('materials.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Dissemination Materials

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Research Activities
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('research.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Research Activity

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('research.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Research Activities

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
             
            
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Achievements
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Upscalling achievements

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{route('research_achievements.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p> Research Achievement

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('all_achievements.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>overall Achievements

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Impact Areas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('impactareas.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Impact Story

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Impact Stories

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Co-Applicants
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('coapplicants.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Add Co-Applicant

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('coapplicants.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Co-Applicants

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
              Images/Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('media.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Create Media

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('media.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Media List 

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Blogs/News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news.create')}}" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Create Blog

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('news.index')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Blogs List  

                    <span class="right badge badge-info"></span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Create User

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Internal Users List  

                    <span class="right badge badge-info">{{App\Models\User::count()}}</span>
                  </p>
                </a>
              </li>
            
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>