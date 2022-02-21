<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>滑块 - 光年(Light Year Admin)后台管理系统模板</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="keywords" content="LightYear,光年,后台模板,后台管理系统,光年HTML模板">
<meta name="description" content="LightYear是一个基于Bootstrap v3.3.7的后台管理系统的HTML模板。">
<meta name="author" content="yinqi">
<link href="/css/mogujie/admin/bootstrap.min.css" rel="stylesheet">
<link href="/css/mogujie/admin/materialdesignicons.min.css" rel="stylesheet">
<!--滑块插件-->
<link rel="stylesheet" href="/js/mogujie/admin/ion-rangeslider/ion.rangeSlider.min.css">
<link href="/css/mogujie/admin/style.min.css" rel="stylesheet">
</head>

<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">

      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="{{ url('admin/mogujie') }}"><img src="/img/mogujie/admin/logo-sidebar.png" title="LightYear" alt="LightYear" /></a>
      </div>
      <div class="lyear-layout-sidebar-scroll">

        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item"> <a href="{{ url('admin/mogujie') }}"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> UI 元素</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/buttons') }}">按钮</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/cards') }}">卡片</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/grid') }}">格栅</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/icons') }}">图标</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/tables') }}">表格</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/modals') }}">模态框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/popover') }}">提示 / 弹出框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/alerts') }}">警告框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/pagination') }}">分页</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/progress') }}">进度条</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/tabs') }}">标签页</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/typography') }}">排版</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/step') }}">步骤</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/other') }}">其他</a> </li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 表单</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/elements') }}">基本元素</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/radio') }}">单选框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/checkbox') }}">复选框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/switch') }}">开关</a> </li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-file-outline"></i> 示例页面</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/doc') }}">文档列表</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/gallery') }}">图库列表</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/config') }}">网站配置</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/rabc') }}">设置权限</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/add_doc') }}">新增文档</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/guide') }}">表单向导</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/login') }}">登录页面</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/login2') }}">登录页面2</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/login3') }}">登录页面3</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/login4') }}">登录页面4</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/error') }}">错误页面</a> </li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-subnav active open">
              <a href="javascript:void(0)"><i class="mdi mdi-language-javascript"></i> JS 插件</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/datepicker') }}">日期选取器</a> </li>
                <li class="active"> <a href="{{ url('admin/mogujie/index/sliders') }}">滑块</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/colorpicker') }}">选色器</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/chartjs') }}">Chart.js</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/jconfirm') }}">对话框</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/input') }}">标签插件</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/notify') }}">通知消息</a> </li>
              </ul>
            </li>
          </ul>
        </nav>

        <div class="sidebar-footer">
          <p class="copyright">Copyright &copy; 2019. <a target="_blank" href="http://lyear.itshubao.com">IT书包</a> All rights reserved.</p>
        </div>
      </div>

    </aside>
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
            <span class="navbar-page-title"> JS 插件 - 滑块 </span>
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
              <div class="card-header"><h4>滑块</h4></div>
              <div class="card-body">

                <div class="form-group row">
                  <label class="col-lg-3">基础示例</label>
                  <div class="col-lg-9">
                    <input id="range_01">
                    <small class="form-text text-muted">无参数开始</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">最小值和最大值</label>
                  <div class="col-lg-9">
                    <input id="range_02">
                    <small class="form-text text-muted">设置最小值、最大值和起点</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">双精度，网格选项和自定义前缀</label>
                  <div class="col-lg-9">
                    <input id="range_03">
                    <small class="form-text text-muted">将type设置为double并指定范围，同时显示网格并添加前缀“$”</small>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">设置范围和步长</label>
                  <div class="col-lg-9">
                    <div class="m-b-10">
                      <input id="range_04">
                      <small class="form-text text-muted">设置负值范围</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_05">
                      <small class="form-text text-muted">使用250步长</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_06">
                      <small class="form-text text-muted">用分数值设置范围，使用分数步长</small>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">使用自定义值数组</label>
                  <div class="col-lg-9">
                    <div class="m-b-10">
                      <input id="range_07">
                      <small class="form-text text-muted">设置自己的数字</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_08">
                      <small class="form-text text-muted">使用任何字符串作为值</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_09">
                      <small class="form-text text-muted">一个字符串示例</small>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">两个选项</label>
                  <div class="col-lg-9">
                    <input id="range_10">
                    <small class="form-text text-muted">注意如何连接和连接值？ 使用decorate_both选项</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">皮肤big</label>
                  <div class="col-lg-9">
                    <input id="range_11">
                    <small class="form-text text-muted">目前默认皮肤是flat</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">皮肤modern</label>
                  <div class="col-lg-9">
                    <input id="range_12">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">皮肤sharp</label>
                  <div class="col-lg-9">
                    <input id="range_13">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">皮肤round</label>
                  <div class="col-lg-9">
                    <input id="range_14">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">皮肤square</label>
                  <div class="col-lg-9">
                    <input id="range_15">
                  </div>
                </div>

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
<!--滑块插件-->
<script src="/js/mogujie/admin/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/main.min.js"></script>
<script type="text/javascript">
$(function() {
    $("#range_01").ionRangeSlider();
    $("#range_02").ionRangeSlider({
        min: 100,
        max: 1000,
        from: 550
    });
    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });
    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });
    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500,
        step: 250
    });
    $("#range_06").ionRangeSlider({
        type: "double",
        grid: true,
        min: -12.8,
        max: 12.8,
        from: -3.2,
        to: 3.2,
        step: 0.1
    });
    $("#range_07").ionRangeSlider({
        type: "double",
        grid: true,
        from: 1,
        to: 5,
        values: [0, 10, 100, 1000, 10000, 100000, 1000000]
    });
    $("#range_08").ionRangeSlider({
        grid: true,
        from: 5,
        values: [
            "零", "一",
            "二", "三",
            "四", "五",
            "六", "七",
            "八", "九",
            "十"
        ]
    });
    $("#range_09").ionRangeSlider({
        grid: true,
        from: 3,
        values: [
            "一月", "二月", "三月",
            "四月", "五月", "六月",
            "七月", "八月", "九月",
            "十月", "十一月", "十二月"
        ]
    });
    $("#range_10").ionRangeSlider({
        type: "double",
        min: 100,
        max: 200,
        from: 145,
        to: 155,
        prefix: "重量: ",
        postfix: " 百万镑",
        decorate_both: true
    });
    $("#range_11").ionRangeSlider({
        skin: "big"
    });
    $("#range_12").ionRangeSlider({
        skin: "modern"
    });
    $("#range_13").ionRangeSlider({
        skin: "sharp"
    });
    $("#range_14").ionRangeSlider({
        skin: "round"
    });
    $("#range_15").ionRangeSlider({
        skin: "square"
    });
});
</script>
</body>
</html>
