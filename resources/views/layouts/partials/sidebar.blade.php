<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('dashboard.index') }}">
                    <i class="fa fa-dashboard"></i> <span>主控台</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>資料管理</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('projects.index') }}"><i class="fa fa-circle-o"></i>商品列表</a></li>
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>會員列表</a></li>
                    <li><a href="{{ route('orders.index') }}"><i class="fa fa-circle-o"></i>訂單列表</a></li>
                    <li><a href="{{ route('emails.index') }}"><i class="fa fa-circle-o"></i>發送電子報</a></li>
                </ul>
            </li>
            <li>
                <form action="{{ route('emails.sendEnd') }}" method="post">
                    @csrf
                    <button style="margin-left: 20px" type="submit" class="btn btn-primary">發送到期專案通知信</button>
                </form>
            </li>
            {{--TODO: multilevel example, remove before demo--}}


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
