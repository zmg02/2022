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
            <span class="navbar-page-title">  UI元素 - 卡片 </span>
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

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-primary">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-success">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-info">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-warning">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-danger">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-purple">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-cyan">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-brown">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->

        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4>标题</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button" data-toggle="tooltip" title="撤消"><i class="mdi mdi-undo"></i></button>
                  </li>
                  <li>
                    <button type="button" data-toggle="tooltip" title="重做"><i class="mdi mdi-redo"></i></button>
                  </li>
                  <li>
                    <button type="button" data-toggle="tooltip" title="修改"><i class="mdi mdi-pencil"></i></button>
                  </li>
                  <li class="dropdown">
                    <button type="button" data-toggle="dropdown">更多 <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> 通知</a> </li>
                      <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> 消息</a> </li>
                      <li class="divider"></li>
                      <li> <a tabindex="-1" href="javascript:void(0)">更新个人信息</a> </li>
                    </ul>
                  </li>
                </ul>
                <!-- .card-actions -->
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
              <footer class="card-footer">
                <div class="example-left m-t-10 pull-left">
                  <label class="lyear-checkbox">
                    <input type="checkbox">
                    <span>五天内自动登录</span>
                  </label>
                </div>
                <div class="example-right pull-right">
                  <button class="btn btn-primary" type="reset" id="example-five">登录</button>
                  <button class="btn btn-danger" type="submit">注册</button>
                </div>
              </footer>
            </div>
          </div>
          <!-- .col-sm-6 -->

          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4>标题</h4>
                <ul class="card-actions">
                  <li> <span>文本 1</span> </li>
                  <li> <span>文本 2</span> </li>
                  <li> <span>文本 3</span> </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
              <footer class="card-footer">
                <div class="example-left m-t-10 pull-left">
                  <label class="lyear-checkbox">
                    <input type="checkbox">
                    <span>五天内自动登录</span>
                  </label>
                </div>
                <div class="example-right pull-right">
                  <button class="btn btn-primary" type="reset" id="example-five">登录</button>
                  <button class="btn btn-danger" type="submit">注册</button>
                </div>
              </footer>
            </div>
          </div>
          <!-- .col-sm-6 -->
        </div>
        <!-- .row -->
        <!-- End Cards with Actions -->

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
