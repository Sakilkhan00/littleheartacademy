<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('public/images/profile.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> List Users</a></li>
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('banner.index') }}"><i class="fa fa-circle-o"></i> List Banners</a></li>
            <li><a href="{{ route('banner.create') }}"><i class="fa fa-circle-o"></i> Add Banner</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Gallery Image</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/gallery') }}"><i class="fa fa-circle-o"></i> List Images</a></li>
            <li><a href="{{ url('admin/add-gallery') }}"><i class="fa fa-circle-o"></i> Add Image</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Navbar Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('navbar') }}"><i class="fa fa-circle-o"></i> Menu list</a></li>
            <li><a href="{{ route('navbar_add') }}"><i class="fa fa-circle-o"></i> Add Menu</a></li>
          </ul>
        </li>
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('list_createPage') }}"><i class="fa fa-circle-o"></i> Pages list</a></li>
            <li><a href="{{ url('admin/create-page-url') }}"><i class="fa fa-circle-o"></i> Add Page With URL</a></li>
            <li><a href="{{ route('add_createPage') }}"><i class="fa fa-circle-o"></i> Add Page</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('course.index') }}"><i class="fa fa-circle-o"></i> Course list</a></li>
            <li><a href="{{ url('admin/create-page-url') }}"><i class="fa fa-circle-o"></i> Add Page With URL</a></li>
          </ul>
        </li>

        <li class="header">Setting</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/setting-logo')}}"><i class="fa fa-circle-o"></i> Logo / Watermark</a></li>
            <li><a href="{{url('admin/theme-setting')}}"><i class="fa fa-circle-o"></i> Theme Setting</a></li>
          </ul>

    </section>
    <!-- /.sidebar -->
  </aside>