<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>网站配置 - 光年(Light Year Admin)后台管理系统模板</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="keywords" content="LightYear,光年,后台模板,后台管理系统,光年HTML模板">
<meta name="description" content="LightYear是一个基于Bootstrap v3.3.7的后台管理系统的HTML模板。">
<meta name="author" content="yinqi">
<link href="/css/mogujie/admin/bootstrap.min.css" rel="stylesheet">
<link href="/css/mogujie/admin/materialdesignicons.min.css" rel="stylesheet">
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
            <li class="nav-item nav-item-has-subnav active open">
              <a href="javascript:void(0)"><i class="mdi mdi-file-outline"></i> 示例页面</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/doc') }}">文档列表</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/gallery') }}">图库列表</a> </li>
                <li class="active"> <a href="{{ url('admin/mogujie/index/config') }}">网站配置</a> </li>
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
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-language-javascript"></i> JS 插件</a>
              <ul class="nav nav-subnav">
                <li> <a href="{{ url('admin/mogujie/index/datepicker') }}">日期选取器</a> </li>
                <li> <a href="{{ url('admin/mogujie/index/sliders') }}">滑块</a> </li>
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
            <span class="navbar-page-title"> 示例页面 - 网站配置 </span>
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
              <ul class="nav nav-tabs page-tabs">
                <li class="active"> <a href="#!">基本</a> </li>
                <li> <a href="lyear-config-system.html">系统</a> </li>
                <li> <a href="lyear-config-upload.html">上传</a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active">

                  <form action="#!" method="post" name="edit-form" class="edit-form">
                    <div class="form-group">
                      <label for="web_site_title">网站标题</label>
                      <input class="form-control" type="text" id="web_site_title" name="web_site_title" value="光年后台管理系统HTML模板" placeholder="请输入站点标题" >
                      <small class="help-block">调用方式：<code>config('web_site_title')</code></small>
                    </div>
                    <div class="form-group">
                      <label for="web_site_logo">LOGO图片</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="web_site_logo" id="web_site_logo" value="/home//img/mogujie/admin/logo.png" />
                        <div class="input-group-btn"><button class="btn btn-default" type="button">上传图片</button></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="web_site_keywords">站点关键词</label>
                      <input class="form-control" type="text" id="web_site_keywords" name="web_site_keywords" value="后台系统模板,LightYear Admin Template,html模板,后台模板,管理系统模板" placeholder="请输入站点关键词" >
                      <small class="help-block">网站搜索引擎关键字</small>
                    </div>
                    <div class="form-group">
                      <label for="web_site_description">站点描述</label>
                      <textarea class="form-control" id="web_site_description" rows="5" name="web_site_description" placeholder="请输入站点描述" >光年(Light Year Admin)后台管理系统模板是一个基于基于Bootstrap v3.3.7的纯HTML模板。</textarea>
                      <small class="help-block">网站描述，有利于搜索引擎抓取相关信息</small>
                    </div>
                    <div class="form-group">
                      <label for="web_site_copyright">版权信息</label>
                      <input class="form-control" type="text" id="web_site_copyright" name="web_site_copyright" value="" placeholder="请输入版权信息" >
                      <small class="help-block">调用方式：<code>config('web_site_copyright')</code></small>
                    </div>
                    <div class="form-group">
                      <label for="web_site_icp">备案信息</label>
                      <input class="form-control" type="text" id="web_site_icp" name="web_site_icp" value="" placeholder="请输入备案信息" >
                      <small class="help-block">调用方式：<code>config('web_site_icp')</code></small>
                    </div>
                    <div class="form-group">
                      <label class="btn-block" for="web_site_status">站点开关</label>
                      <label class="lyear-switch switch-solid switch-primary">
                        <input type="checkbox" checked="">
                        <span></span>
                      </label>
                      <small class="help-block">站点关闭后将不能访问，后台可正常登录</small>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary m-r-5">确 定</button>
                      <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                    </div>
                  </form>

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
<script type="text/javascript" src="/js/mogujie/admin/main.min.js"></script>
</body>
</html>
