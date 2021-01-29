<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      @if (auth()->user()->UR_CODE == 1)
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
      @endif
      @if (auth()->user()->UR_CODE == '3')
        <li class="{!! Request::is('settings*') ? 'active' : '' !!}">
          <a href="{{ url('settings') }}">
            <i class="fa fa-gears"></i> <span>Settings</span>
          </a>
        </li>            
      @endif
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>