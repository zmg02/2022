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
            <span class="navbar-page-title"> JS 插件 - 日期选择器 </span>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>时间选择</h4></div>
              <div class="card-body">

                <input class="form-control js-datetimepicker" type="text" id="example-datetimepicker" name="add_time" placeholder="请选择具体时间" value="" data-side-by-side="true" data-locale="zh-cn" data-format="YYYY-MM-DD HH:mm:ss" />

              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>日期选择</h4></div>
              <div class="card-body">

                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker" name="example-datepicker" placeholder="yyyy-mm-dd" value="" data-date-format="yyyy-mm-dd" />

                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="yyyy/mm/dd" placeholder="yyyy/mm/dd">

                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker2" name="example-datepicker2" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">

                <div class="input-daterange input-group js-datepicker" data-auto-close="false" data-date-format="yyyy-mm-dd">
                  <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="从">
                  <span class="input-group-addon"><i class="mdi mdi-chevron-right"></i></span>
                  <input class="form-control" type="text" id="example-daterange2" name="example-daterange2" placeholder="至">
                </div>

                <p class="m-t-15">单独选择年份</p>
                <p class="text-danger">因为和通用初始化有些不一样，这里单独对此做初始化。</p>
                <input class="form-control m-b-10" type="text" id="example-datepicker-year" name="example-datepicker-year" data-date-format="yyyy" placeholder="yyyy">

                <p class="m-t-15">单独选择月份</p>
                <input class="form-control m-b-10" type="text" id="example-datepicker-month" name="example-datepicker-month" data-date-format="mm" placeholder="mm">

                <p class="m-t-15">单独选择天就不演示了，<code>data-date-format="dd"</code>即可。</p>

              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="/js/mogujie/admin/jquery.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/perfect-scrollbar.min.js"></script>
<!--时间选择插件-->
<script src="/js/mogujie/admin/bootstrap-datetimepicker/moment.min.js"></script>
<script src="/js/mogujie/admin/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="/js/mogujie/admin/bootstrap-datetimepicker/locale/zh-cn.js"></script>
<!--日期选择插件-->
<script src="/js/mogujie/admin/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/js/mogujie/admin/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/main.min.js"></script>
<script type="text/javascript">
    // 单独选择年份
	jQuery('#example-datepicker-year').each(function() {
	    var $input = jQuery(this);
		$input.datepicker({
            startView: 'decade',
            endView: 'decade',
            maxViewMode: 'decade',
            minViewMode: 'decade',
			weekStart: 1,
			autoclose: true,
			todayHighlight: true,
			language: 'zh-CN',
		});
	});
    // 单独选择月份
	jQuery('#example-datepicker-month').each(function() {
	    var $input = jQuery(this);
		$input.datepicker({
            startView: 'month',
            endView: 'month',
            maxViewMode: 'year',
            minViewMode: 'year',
			weekStart: 1,
			autoclose: true,
			todayHighlight: true,
			language: 'zh-CN',
		});
	});
</script>
<script>
  $(function(){
    $('li.active').children('a').addClass('a-active');
    $('li.active').parents('li').addClass('open active');

  });
</script>
</body>
</html>
