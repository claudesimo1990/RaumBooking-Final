<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admincss/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> Super Admin</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <li class=""><a href="{{ route('gebaude.index') }}"><i class="fa fa-circle-o"></i> Gebäude</a></li>
            <li class=""><a href="{{ route('raume.index') }}"><i class="fa fa-circle-o"></i> Räume</a></li>
            <li class=""><a href="{{ route('benutzer.index') }}"><i class="fa fa-circle-o"></i>Benutzer</a></li>
             <li class=""><a href="{{ route('buchungen.index') }}"><i class="fa fa-circle-o"></i> Reservierungen</a></li>
            <li class=""><a href="{{ route('benutzer.index') }}"><i class="fa fa-circle-o"></i> WarteListe</a></li>
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Admins</a></li>
            <li class=""><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li class=""><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permissions</a></li>
        </li>
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>