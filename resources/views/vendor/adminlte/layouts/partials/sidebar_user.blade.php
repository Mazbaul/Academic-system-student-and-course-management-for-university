<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" xmlns="http://www.w3.org/1999/html">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

      <!-- search form (Optional) -->
        <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
               <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('home') ? "active" : "" }}"><a href="{{ url('/home') }}"> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="{{ Request::path() =='course' || Request::path() =='course/show'? "active" : "" }}"><a href="{{ url('/course') }}"> <span>Course Registration</span></a></li>
            <li class="{{ Request::is('backlog') ? "active" : "" }}"><a href="{{ url('/backlog') }}"> <span>Backlog Course Registration</span></a></li>
            <li class="{{ Request::is('certificate') ? "active" : "" }}"><a href="{{ url('/certificate') }}"> <span>Certificates</span></a></li>




            <!--  <li><a href="{{ url('/admin/notice') }}"><span>Notices</span></a></li>
            <li><a href="{{ url('/admin/users') }}"><span>Students</span></a></li>-->
        <!-- <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li> -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
