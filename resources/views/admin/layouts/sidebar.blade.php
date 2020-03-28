<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @can('system')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>System Management</span>
                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/permissions"><i class="fa fa-circle-o"></i>permission Management</a></li>
                        <li><a href="/admin/users"><i class="fa fa-circle-o"></i>User Management</a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i>Role Management</a></li>
                    </ul>
                </li>
            @endcan
            @can('post')
                <li class="active">
                    <a href="/admin/posts">
                        <i class="fa fa-files-o"></i>
                        <span>Post Management</span>
                    </a>
                </li>
            @endcan
            @can('topic')
                <li>
                    <a href="/admin/topics">
                        <i class="fa fa-files-o"></i>
                        <span>Topic Management</span>
                    </a>

                </li>
            @endcan
            @can('notice')
                <li>
                    <a href="/admin/notices">
                        <i class="fa fa-files-o"></i>
                        <span>Notice Management</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
