<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{!! Request::is('dashboard*') ? 'active' : '' !!}">
          <a href="{{ url('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Mensagens</span>
          </a>
        </li>
        <li class="{!! Request::is('users*') ? 'active' : '' !!}">
          <a href="{{ url('users') }}">
            <i class="fa fa-users"></i> <span>Usuários</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>