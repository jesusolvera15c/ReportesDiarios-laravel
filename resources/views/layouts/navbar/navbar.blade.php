<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="fa fa-cog fa-spin"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                  <div class="text-center">
                     <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('img/user-admin.png') }}"
                        alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                  <p class="text-muted text-center">Administrador</p>
                  <br>
                  <button type="submit" class="btn btn-primary btn-block" href="{{ route('logout') }}"><b>Cerra Sesion</b></button>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                  </form>
               </div>
               <!-- /.card-body -->
            </div>
         </div>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <i class="fas fa-expand-arrows-alt"></i>
         </a>
      </li>
      
   </ul>
</nav>
<!-- /.navbar -->