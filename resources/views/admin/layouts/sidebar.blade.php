   <!-- Sidebar Menu -->
   <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashbord</p>
            </a>
          </li>
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Posts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('posts.index')}}" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>All Pots</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('posts.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Post
              </p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item ">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Categories
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>All Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Category
              </p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->