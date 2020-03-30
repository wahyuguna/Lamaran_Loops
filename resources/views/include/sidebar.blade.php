  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('admin/dist/img/logo.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Loops.id</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="{{route('Content-Post.index')}}">
            <i class="fa fa-pencil"></i> <span>Content Post (Task 1)</span>
          </a>
        </li>
      </ul>
       <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="{{route('Comment.index')}}">
            <i class="fa fa-pencil"></i> <span>User List (Task 2)</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="{{route('guest.comment')}}">
            <i class="fa fa-pencil"></i> <span>Comment Guest (Task 3)</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="{{route('post.all')}}">
            <i class="fa fa-pencil"></i> <span>POST Data</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>