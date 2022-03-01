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
            <span class="navbar-page-title"> 表单 - 开关 </span>
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

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <div class="card-header"><h4>默认开关样式</h4></div>
              <div class="card-body">
                <p>添加 <code>.switch-*</code> 以更改开关的外观：<code>.switch-success</code> <code>.switch-pink</code>...</p>
                <div class="example-box">
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">默认</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Primary（主色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-primary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Success（成功）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-success">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Secondary（灰色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-secondary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Info（一般信息）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-info">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Warning（警告）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-warning">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Danger（危险）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-danger">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Dark（黑色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-dark">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Purple（紫色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-purple">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Pink（粉红色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-pink">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Cyan（青色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-cyan">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Yellow（黄色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-yellow">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Brown（棕色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-brown">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- end example-box -->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <div class="card-header"><h4>纯色风格开关</h4></div>
              <div class="card-body">
                <div class="example-box">
                  <p>给开关添加 <code>.switch-solid</code>。</p>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">默认</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Primary（主色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-primary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Success（成功）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-success">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Secondary（灰色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-secondary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Info（一般信息）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-info">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Warning（警告）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-warning">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Danger（危险）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-danger">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Dark（黑色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-dark">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Purple（紫色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-purple">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Pink（粉红色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-pink">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Cyan（青色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-cyan">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Yellow（黄色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-yellow">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Brown（棕色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-solid switch-brown">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- end example-box -->
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <div class="card-header"><h4>浅色背景开关样式</h4></div>
              <div class="card-body">
                <p>添加 <code>.switch-light</code> 以改变背景颜色。</p>
                <div class="example-box">
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">默认</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Primary（主色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-primary switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Success（成功）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-success switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Secondary（灰色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-secondary switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Info（一般信息）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-info switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Warning（警告）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-warning switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Danger（危险）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-danger switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Dark（黑色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-dark switch-light">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Purple（紫色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light switch-purple">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Pink（粉红色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light switch-pink">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Cyan（青色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light switch-cyan">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Yellow（黄色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light switch-yellow">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Brown（棕色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-light switch-brown">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- end example-box -->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="card">
              <div class="card-header"><h4>边框风格开关</h4></div>
              <div class="card-body">
                <div class="example-box">
                  <p>给开关添加 <code>.switch-outline</code>。</p>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">默认</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Primary（主色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-primary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Success（成功）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-success">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Secondary（灰色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-secondary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Info（一般信息）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-info">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Warning（警告）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-warning">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Danger（危险）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-danger">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <div class="col-xs-6">Dark（黑色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-dark">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Purple（紫色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-purple">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Pink（粉红色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-pink">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Cyan（青色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-cyan">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Yellow（黄色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-yellow">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-xs-6">Brown（棕色）</div>
                    <div class="col-xs-6">
                      <label class="lyear-switch switch-outline switch-brown">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- end example-box -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
