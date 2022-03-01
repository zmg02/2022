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
                        <span class="navbar-page-title"> UI元素 - 按钮 </span>
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
                            <div class="card-header"><h4>按钮</h4></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-vcenter">
                                        <thead>
                                        <tr>
                                            <th class="w-15">按钮</th>
                                            <th>class=""</th>
                                            <th class="w-15">按钮</th>
                                            <th>class=""</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><button class="btn btn-default btn-w-md" type="button">默认按钮</button></td>
                                            <td><code>btn btn-default</code></td>
                                            <td><button class="btn btn-primary btn-w-md" type="button">主要颜色按钮</button></td>
                                            <td><code>btn btn-primary</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-w-md" type="button">绿色按钮</button></td>
                                            <td><code>btn btn-success</code></td>
                                            <td><button class="btn btn-info btn-w-md" type="button">一般信息按钮</button></td>
                                            <td><code>btn btn-info</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-warning btn-w-md" type="button">橙色按钮</button></td>
                                            <td><code>btn btn-warning</code></td>
                                            <td><button class="btn btn-danger btn-w-md" type="button">红色按钮</button></td>
                                            <td><code>btn btn-danger</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-w-md" type="button">次要颜色按钮</button></td>
                                            <td><code>btn btn-secondary</code></td>
                                            <td><button class="btn btn-dark btn-w-md" type="button">黑色按钮</button></td>
                                            <td><code>btn btn-dark</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-purple btn-w-md" type="button">紫色按钮</button></td>
                                            <td><code>btn btn-purple</code></td>
                                            <td><button class="btn btn-pink btn-w-md" type="button">粉红色按钮</button></td>
                                            <td><code>btn btn-pink</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-cyan btn-w-md" type="button">青色按钮</button></td>
                                            <td><code>btn btn-cyan</code></td>
                                            <td><button class="btn btn-yellow btn-w-md" type="button">黄色按钮</button></td>
                                            <td><code>btn btn-yellow</code></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-brown btn-w-md" type="button">棕色按钮</button></td>
                                            <td><code>btn btn-brown</code></td>
                                            <td><button class="btn btn-link" type="button">链接形式</button></td>
                                            <td><code>btn btn-link</code></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h4>其他按钮样式</h4></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>圆角按钮</h5>
                                        <p><code>class</code> 中增加 <code>.btn-round</code>。</p>
                                        <div class="example-box">
                                            <button class="btn btn-w-md btn-round btn-primary">主色按钮</button>
                                            <button class="btn btn-w-md btn-round btn-secondary">次色按钮</button>
                                            <button class="btn btn-w-md btn-round btn-success">绿色按钮</button>
                                            <button class="btn btn-w-md btn-round btn-info">信息按钮</button>
                                            <button class="btn btn-w-md btn-round btn-warning">橙色按钮</button>
                                            <button class="btn btn-w-md btn-round btn-danger">红色按钮</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>带图标的按钮</h5>
                                        <p><code>class</code> 中增加 <code>.btn-label</code>，<code>button</code> 元素中增加 <code>label</code> 元素。</p>
                                        <div class="example-box">
                                            <button class="btn btn-label btn-primary"><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label> 确认提交</button>
                                            <button class="btn btn-label btn-info"><label><i class="mdi mdi-play-circle-outline"></i></label> 播放</button>
                                            <button class="btn btn-label btn-warning"><label><i class="mdi mdi-delete-empty"></i></label> 清空数据</button>
                                            <button class="btn btn-label btn-danger"><label><i class="mdi mdi-close"></i></label> 删除</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr>
                                        <h5>指定按钮宽度</h5>
                                        <p>可使用 <code>.btn-w-xs</code>, <code>.btn-w-sm</code>, <code>.btn-w-md</code>, <code>.btn-w-lg</code> 和 <code>.btn-w-xl</code> 类指定按钮宽度。</p>
                                        <div class="example-box">
                                            <button class="btn btn-w-xs btn-primary">极小宽</button>
                                            <button class="btn btn-w-sm btn-primary">小的</button>
                                            <button class="btn btn-w-md btn-primary">中等宽度</button>
                                            <button class="btn btn-w-lg btn-primary">宽按钮</button>
                                            <button class="btn btn-w-xl btn-primary">超宽</button>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>按钮大小</h5>
                                        <p>使用 <code>.btn-lg</code>, <code>.btn-sm</code> 和 <code>.btn-xs</code> 类指定按钮的大小。</p>
                                        <div class="example-box">
                                            <button class="btn btn-lg btn-primary">大的按钮</button>
                                            <button class="btn btn-primary">默认按钮</button>
                                            <button class="btn btn-sm btn-primary">小按钮</button>
                                            <button class="btn btn-xs btn-primary">极小的按钮</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>块级元素按钮</h5>
                                        <p>加上 <code>.btn-block</code> 类可以使得按钮变成一个块级元素按钮。</p>
                                        <button class="btn btn-block btn-primary">块级元素按钮</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h4>切换选择按钮</h4></div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <h5>单个按钮</h5>
                                        <button class="btn btn-primary" data-toggle="button">单按钮切换</button>
                                    </div>

                                    <div class="col-lg-4">
                                        <h5>多选</h5>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="checkbox" checked autocomplete="off">
                                                <i class="mdi mdi-format-text"></i>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="checkbox" autocomplete="off">
                                                <i class="mdi mdi-format-underline"></i>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="checkbox" autocomplete="off">
                                                <i class="mdi mdi-format-italic"></i>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <h5>单选</h5>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                <i class="mdi mdi-format-align-left"></i> </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" id="option2" autocomplete="off">
                                                <i class="mdi mdi-format-align-center"></i> </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" id="option3" autocomplete="off">
                                                <i class="mdi mdi-format-align-right"></i> </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" id="option3" autocomplete="off">
                                                <i class="mdi mdi-format-align-justify"></i> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h4>按钮组</h4></div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <h5>默认</h5>
                                        <div class="btn-group">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                        <hr>
                                        <h5>圆角</h5>
                                        <div class="btn-group btn-group-round">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                        <hr>
                                        <h5>两端对齐的</h5>
                                        <div class="btn-group btn-group-justified">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <h5>垂直的</h5>
                                        <div class="btn-group-vertical">
                                            <button class="btn btn-default">上</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">下</button>
                                        </div>
                                        <hr>
                                        <h5>嵌套的</h5>
                                        <div class="btn-group">
                                            <button class="btn btn-default"><i class="mdi mdi-replay"></i></button>
                                            <button class="btn btn-default"><i class="mdi mdi-magnify"></i></button>
                                            <div class="btn-group">
                                                <button id="btnGroupDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    导出 <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#!"><i class="mdi mdi-zip-box"></i> Zip</a></li>
                                                    <li><a href="#!"><i class="mdi mdi-file-pdf"></i> PDF</a></li>
                                                    <li><a href="#!"><i class="mdi mdi-file-excel"></i> Excel</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>大小尺寸</h5>
                                        <div class="btn-group btn-group-xs">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                        <br><br>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                        <br><br>
                                        <div class="btn-group">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                        <br><br>
                                        <div class="btn-group btn-group-lg">
                                            <button class="btn btn-default">左</button>
                                            <button class="btn btn-default">中</button>
                                            <button class="btn btn-default">右</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <hr>
                                        <h5>工具栏</h5>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i class="mdi mdi-format-align-left"></i></button>
                                                <button class="btn btn-default"><i class="mdi mdi-format-align-center"></i></button>
                                                <button class="btn btn-default"><i class="mdi mdi-format-align-right"></i></button>
                                                <button class="btn btn-default"><i class="mdi mdi-format-align-justify"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i class="mdi mdi-format-bold"></i></button>
                                                <button class="btn btn-default"><i class="mdi mdi-format-italic"></i></button>
                                                <button class="btn btn-default"><i class="mdi mdi-format-underline"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i class="mdi mdi-floppy"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h4>下拉菜单按钮</h4></div>
                            <div class="card-body">

                                <div class="row">
                                    <!--单按钮下拉菜单-->
                                    <div class="col-lg-6">
                                        <h5>单按钮下拉菜单</h5>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                周杰伦 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">夜的第七章</a></li>
                                                <li><a href="#!">半兽人</a></li>
                                                <li><a href="#!">上海一九四三</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">告白气球</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                陈奕迅 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">浮夸</a></li>
                                                <li><a href="#!">爱情转移</a></li>
                                                <li><a href="#!">六月飞雪</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">十年</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                河图 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">窗前明月光</a></li>
                                                <li><a href="#!">不见有情</a></li>
                                                <li><a href="#!">春日迟</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">自为风月马前卒</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                陈楚生 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">思恋一个荒废的名字</a></li>
                                                <li><a href="#!">有没有人告诉你</a></li>
                                                <li><a href="#!">经过</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">风起时想你</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                光良 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">第一次</a></li>
                                                <li><a href="#!">童话</a></li>
                                                <li><a href="#!">天堂</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">右手边</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--拆分按钮下拉菜单-->
                                    <div class="col-lg-6">
                                        <h5>拆分按钮下拉菜单</h5>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">周杰伦</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">夜的第七章</a></li>
                                                <li><a href="#!">半兽人</a></li>
                                                <li><a href="#!">上海一九四三</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">告白气球</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">陈奕迅</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">浮夸</a></li>
                                                <li><a href="#!">爱情转移</a></li>
                                                <li><a href="#!">六月飞雪</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">十年</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">河图</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">窗前明月光</a></li>
                                                <li><a href="#!">不见有情</a></li>
                                                <li><a href="#!">春日迟</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">自为风月马前卒</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">陈奕迅</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">思恋一个荒废的名字</a></li>
                                                <li><a href="#!">有没有人告诉你</a></li>
                                                <li><a href="#!">经过</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">风起时想你</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">光良</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">第一次</a></li>
                                                <li><a href="#!">童话</a></li>
                                                <li><a href="#!">天堂</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">右手边</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--向上弹出菜单按钮-->
                                    <div class="col-lg-6">
                                        <hr>
                                        <h5>向上弹出菜单按钮</h5>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-primary">周杰伦</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">夜的第七章</a></li>
                                                <li><a href="#!">半兽人</a></li>
                                                <li><a href="#!">上海一九四三</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">告白气球</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-success">陈奕迅</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">浮夸</a></li>
                                                <li><a href="#!">爱情转移</a></li>
                                                <li><a href="#!">六月飞雪</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">十年</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-info">河图</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">窗前明月光</a></li>
                                                <li><a href="#!">不见有情</a></li>
                                                <li><a href="#!">春日迟</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">自为风月马前卒</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary">陈奕迅</button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">思恋一个荒废的名字</a></li>
                                                <li><a href="#!">有没有人告诉你</a></li>
                                                <li><a href="#!">经过</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">风起时想你</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-warning">光良</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">切换下拉列表</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">第一次</a></li>
                                                <li><a href="#!">童话</a></li>
                                                <li><a href="#!">天堂</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">右手边</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--大小尺寸-->
                                    <div class="col-lg-6">
                                        <hr>
                                        <h5>大小尺寸</h5>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                周杰伦 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">夜的第七章</a></li>
                                                <li><a href="#!">半兽人</a></li>
                                                <li><a href="#!">上海一九四三</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">告白气球</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                陈奕迅 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">浮夸</a></li>
                                                <li><a href="#!">爱情转移</a></li>
                                                <li><a href="#!">六月飞雪</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">十年</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                河图 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">窗前明月光</a></li>
                                                <li><a href="#!">不见有情</a></li>
                                                <li><a href="#!">春日迟</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">自为风月马前卒</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                陈楚生 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">思恋一个荒废的名字</a></li>
                                                <li><a href="#!">有没有人告诉你</a></li>
                                                <li><a href="#!">经过</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#!">风起时想你</a></li>
                                            </ul>
                                        </div>
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
