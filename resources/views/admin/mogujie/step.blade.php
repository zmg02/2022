@include('admin.mogujie.layouts.head')

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

    <!--头部信息-->
    <header class="lyear-layout-header">

      <nav class="navbar navbar-default">
        <div class="topbar">

          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title">  UI元素 - 步骤 </span>
          </div>

          <ul class="topbar-right">
            <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown">
                <img class="img-avatar img-avatar-48 m-r-10" src="/img/mogujie/admin/users/avatar.jpg" alt="笔下光年" />
                <span>笔下光年 <span class="caret"></span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li> <a href="{{ url('admin/mogujie/index/profile') }}"><i class="mdi mdi-account"></i> 个人信息</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/pwd') }}"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                <li class="divider"></li>
                <li> <a href="{{ url('admin/mogujie/index/login') }}"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
              </ul>
            </li>
            <!--切换主题配色-->
		    <li class="dropdown dropdown-skin">
			  <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
			  <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title"><p>主题</p></li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
			    <li class="drop-title"><p>LOGO</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>头部</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>侧边栏</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
				</li>
			  </ul>
			</li>
            <!--切换主题配色-->
          </ul>

        </div>
      </nav>

    </header>
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">
        <div class="alert alert-info" role="alert">
          实际应用中，给a标签加上 <code>data-toggle="tab"</code> ，可查看<a href="{{ url('admin/mogujie/index/guide') }}">表单向导</a>。
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>步骤</h4></div>
              <div class="card-body">

                <ul class="nav-step step-dots">
                  <li class="nav-step-item active">
                    <span>步骤一</span>
                    <a class="active" href="#"></a>
                  </li>

                  <li class="nav-step-item">
                    <span>步骤三</span>
                    <a href="#"></a>
                  </li>

                  <li class="nav-step-item">
                    <span>步骤四</span>
                    <a href="#"></a>
                  </li>

                  <li class="nav-step-item">
                    <span>步骤五</span>
                    <a href="#"></a>
                  </li>
                </ul>

                <ul class="nav-step step-dots">
                  <li class="nav-step-item complete">
                    <span>步骤一</span>
                    <a class="active" href="#"></a>
                  </li>

                  <li class="nav-step-item active">
                    <span>步骤三</span>
                    <a href="#"></a>
                  </li>

                  <li class="nav-step-item">
                    <span>步骤四</span>
                    <a href="#"></a>
                  </li>

                  <li class="nav-step-item">
                    <span>步骤五</span>
                    <a href="#"></a>
                  </li>
                </ul>

                <ul class="nav-step step-anchor">
                  <li class="nav-step-item active">
                    <a href="#step-1">
                      <h6>步骤一</h6>
                      <p class="m-0">步骤一说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item">
                    <a href="#step-2">
                      <h6>步骤二</h6>
                      <p class="m-0">步骤二说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item">
                    <a href="#step-3">
                      <h6>步骤三</h6>
                      <p class="m-0">步骤三说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item">
                    <a href="#step-4">
                      <h6>步骤四</h6>
                      <p class="m-0">步骤四说明</p>
                    </a>
                  </li>
                </ul>

                <ul class="nav-step step-anchor">
                  <li class="nav-step-item complete">
                    <a href="#step-1">
                      <h6>步骤一</h6>
                      <p class="m-0">步骤一说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item active">
                    <a href="#step-2">
                      <h6>步骤二</h6>
                      <p class="m-0">步骤二说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item">
                    <a href="#step-3">
                      <h6>步骤三</h6>
                      <p class="m-0">步骤三说明</p>
                    </a>
                  </li>
                  <li class="nav-step-item">
                    <a href="#step-4">
                      <h6>步骤四</h6>
                      <p class="m-0">步骤四说明</p>
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <!-- .row -->

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
