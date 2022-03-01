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
            <span class="navbar-page-title"> JS 插件 - 对话框 </span>
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
              <div class="card-header"><h4>对话框</h4></div>
              <div class="card-body">

                <div class="row">
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-1">弹出框示例</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-2">确认框示例</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-3">对话框示例</button>
                  </div>
                  <br/><br/><br/>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-4">错误/红色 对话框</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-5">成功/绿色 对话框</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-6">警告/黄色 对话框</button>
                  </div>

                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <!--End 页面主要内容-->

@include('admin.mogujie.layouts.foot')

<script type="text/javascript">
$('.example-p-1').on('click', function () {
    $.alert({
        title: '嗨',
        content: '这是对用户的简单提示框。 <br> 一些 <strong>HTML</strong> <em>内容</em>',
		buttons: {
			confirm: {
				text: '确认',
				btnClass: 'btn-primary',
				action: function(){
                    $.alert('你点击了确认!');
				}
			},
			cancel: {
				text: '取消',
				action: function () {
                    $.alert('你点击了取消!');
				}
			}
		}
    });
});
$('.example-p-2').on('click', function () {
    $.confirm({
        title: '对话框',
        content: '一些内容...',
        buttons: {
            confirm: {
                text: '确认',
                action: function(){
                    $.alert('确认的!');
                }
            },
            cancel: {
                text: '关闭',
                action: function(){
                    $.alert('取消的!');
                }
            },
            somethingElse: {
                text: '其他',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){
                    $.alert('其他的选择？');
                }
            }
        }
    });
});
$('.example-p-3').on('click', function () {
    $.confirm({
        title: '提示',
        content: '' +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<label>请输入您的姓名</label>' +
        '<input type="text" placeholder="姓名" class="name form-control" required />' +
        '</div>' +
        '</form>',
        buttons: {
            formSubmit: {
                text: '提交',
                btnClass: 'btn-blue',
                action: function () {
                    var name = this.$content.find('.name').val();
                    if(!name){
                        $.alert('请您输入您的姓名');
                        return false;
                    }
                    $.alert('您的姓名是： ' + name);
                }
            },
            cancel: {
                text: '取消'
            },
        },
        onContentReady: function () {
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                e.preventDefault();
                jc.$$formSubmit.trigger('click');
            });
        }
    });
});
$('.example-p-4').on('click', function () {
    $.confirm({
        title: '错误提示',
        content: '笑江湖浪迹十年游，空负少年头。对铜驼巷陌，吟情渺渺，心事悠悠！酒冷诗残梦断，南国正清秋。',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: '重试',
                btnClass: 'btn-red',
                action: function(){
                }
            },
            close: {
                text: '关闭'
            }
        }
    });
});
$('.example-p-5').on('click', function () {
    $.confirm({
        title: '成功',
        content: '难消受灯昏罗帐，怅昙花一现恨难休！飘零惯，金戈铁马，拼葬荒丘！',
        type: 'green',
        buttons: {
            omg: {
                text: '谢谢',
                btnClass: 'btn-green',
            },
            close: {
                text: '关闭',
            }
        }
    });
});
$('.example-p-6').on('click', function () {
    $.confirm({
        title: '警告',
        content: '把剑凄然望，无处招归舟。明日天涯路远，问谁留楚佩，弄影中洲？数英雄儿女，俯仰古今愁。',
        type: 'orange',
        typeAnimated: false,
        buttons: {
            omg: {
                text: '重试',
                btnClass: 'btn-orange',
            },
            close: {
                text: '关闭',
            }
        }
    });
});
</script>

