		          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{{url('storage/app/'.Auth::user()->photo)}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>Online</p>
                  <a href="#"><h5><i class="fa fa-circle text-success"></i> {{ Auth::user()->name }}</h5></a>
                </div>
              </div>
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
              <!-- /.search form -->
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                  <li class="header">MAIN NAVIGATION</li>

                  <li class="treeview">
                    <a href="{{url('admin')}}">
                      <i class="fa fa-desktop"></i> <span>Beranda</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/food')}}">
                      <i class="fa fa-cutlery"></i> <span>Makanan</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/drink')}}">
                      <i class="fa fa-beer"></i> <span>Minuman</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/dessert')}}">
                      <i class="fa fa-coffee"></i> <span>Dessert</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  {{-- <li class="treeview">
                    <a href="{{url('admin/news')}}">
                      <i class="fa fa-quote-right"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li> --}}
                  {{-- <li class="treeview">
                    <a href="{{url('pencarian')}}">
                      <i class="fa fa-check-square-o"></i> <span>Event</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li> --}}
                  {{-- <li class="treeview">
                    <a href="{{url('pencarian')}}">
                      <i class="fa fa-image"></i> <span>Gallery</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li> --}}
                  <li class="treeview">
                    <a href="">
                      <i class="fa fa-file-text-o"></i> <span>Layout</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li class=""><a href="{{url('admin/promotion')}}"><i class="fa fa-circle-o">
                        </i> Promotion Today</a>
                      </li>
                      <li class=""><a href="{{url('admin/upcomingEvent')}}"><i class="fa fa-circle-o">
                        </i> Upcoming Event</a>
                      </li>
                      <li class=""><a href="{{url('admin/news')}}"><i class="fa fa-circle-o">
                        </i> News</a>
                      </li>
                      <li class=""><a href="{{url('admin/gallery')}}"><i class="fa fa-circle-o">
                        </i> Gallery</a>
                      </li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/user')}}">
                      <i class="fa fa-user"></i> <span>User</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/report')}}">
                      <i class="fa fa-bar-chart-o "></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('admin/order')}}">
                      <i class="fa fa-thumb-tack "></i> <span>Main Order</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>

              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>
