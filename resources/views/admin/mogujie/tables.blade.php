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
            <span class="navbar-page-title"> UI元素 - 表格 </span>
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
              <div class="card-header"><h4>表格</h4></div>
              <div class="card-body">

                <h5>基本实例</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>庄子</td>
                      <td>庄子</td>
                      <td>古文典籍</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>道德经</td>
                      <td>老子</td>
                      <td>古文典籍</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>能面杀人事件</td>
                      <td>高木彬光</td>
                      <td>悬疑小说</td>
                    </tr>
                  </tbody>
                </table>

                <h5>条纹状表格 <code>.table-striped</code></h5>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>阴翳礼赞</td>
                      <td>谷崎润一郎</td>
                      <td>散文随笔</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>千门公子</td>
                      <td>方白羽</td>
                      <td>武侠小说</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>陈二狗的妖孽人生</td>
                      <td>烽火戏诸侯</td>
                      <td>都市小说</td>
                    </tr>
                  </tbody>
                </table>

                <h5>带边框的表格 <code>.table-bordered</code></h5>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>理智与情感</td>
                      <td>简·奥斯汀</td>
                      <td>国外名著</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>浪子神鹰</td>
                      <td>陈青云</td>
                      <td>武侠小说</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>风中之路</td>
                      <td>川端康成</td>
                      <td>当代小说</td>
                    </tr>
                  </tbody>
                </table>

                <h5>鼠标悬停 <code>.table-hover</code></h5>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>康复的家庭</td>
                      <td>大江健三郎</td>
                      <td>散文随笔</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>名侦探的规条</td>
                      <td>东野圭吾</td>
                      <td>悬疑小说</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>天才相师</td>
                      <td>打眼</td>
                      <td>都市小说</td>
                    </tr>
                  </tbody>
                </table>

                <h5>紧缩表格 <code>.table-condensed</code></h5>
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>简单爱</td>
                      <td>董晓磊</td>
                      <td>青春校园</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>主教杀人事件</td>
                      <td>范·达恩</td>
                      <td>悬疑小说</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>天神下凡</td>
                      <td>烽火戏诸侯</td>
                      <td>玄幻仙侠</td>
                    </tr>
                  </tbody>
                </table>

                <h5>状态类</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>书籍名称</th>
                      <th>作者</th>
                      <th>分类</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="active">
                      <th scope="row">1</th>
                      <td>北京悠悠馆</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>诸葛孔明</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr class="success">
                      <th scope="row">3</th>
                      <td>甲午战争</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>神兽之爪</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr class="info">
                      <th scope="row">5</th>
                      <td>帝国的软肋：大汉王朝四百年</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>春秋战国：戈马钟鼓杀与盟</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr class="warning">
                      <th scope="row">7</th>
                      <td>龙凤之国</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>大唐帝国之隋乱唐盛三百年</td>
                      <td>陈舜臣</td>
                      <td>历史小说</td>
                    </tr>
                    <tr class="danger">
                      <th scope="row">9</th>
                      <td>一个陌生女人的来信</td>
                      <td>斯蒂芬·茨威格</td>
                      <td>国外名著</td>
                    </tr>
                  </tbody>
                </table>

                <h5>响应式表格</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>书籍名</th>
                        <th>作者</th>
                        <th>国籍</th>
                        <th>分类</th>
                        <th>库存</th>
                        <th>价格</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>钦差大臣</td>
                        <td>果戈理</td>
                        <td>俄国</td>
                        <td>国外名族</td>
                        <td>125</td>
                        <td>36.00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>西厢记</td>
                        <td>王实甫</td>
                        <td>中国</td>
                        <td>古文典籍</td>
                        <td>26</td>
                        <td>18.00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>儒林外史</td>
                        <td>吴敬梓</td>
                        <td>中国</td>
                        <td>古文典籍</td>
                        <td>39</td>
                        <td>22.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>书籍名</th>
                        <th>作者</th>
                        <th>国籍</th>
                        <th>分类</th>
                        <th>库存</th>
                        <th>价格</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>钦差大臣</td>
                        <td>果戈理</td>
                        <td>俄国</td>
                        <td>国外名族</td>
                        <td>125</td>
                        <td>36.00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>西厢记</td>
                        <td>王实甫</td>
                        <td>中国</td>
                        <td>古文典籍</td>
                        <td>26</td>
                        <td>18.00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>儒林外史</td>
                        <td>吴敬梓</td>
                        <td>中国</td>
                        <td>古文典籍</td>
                        <td>39</td>
                        <td>22.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
