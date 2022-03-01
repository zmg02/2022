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
            <span class="navbar-page-title">  UI元素 - 排版 </span>
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
              <div class="card-header"><h4>标题标签</h4></div>
              <div class="card-body">
                <h1>h1. 第一回 北汉主屏逐忠臣　呼延赞激烈报仇</h1>
                <h2>h2. 第二回 李建忠力救义士　呼延赞梦神教武</h2>
                <h3>h3. 第三回 金头娘征场斗艺　高怀德大战潞州</h3>
                <h4>h4. 第四回 讲和议杨业回兵　迎銮驾豪杰施能</h4>
                <h5>h5. 第五回 宋太祖遗嘱后事　潘仁美计逐英雄</h5>
                <h6>h6. 第六回 潘仁美奉诏宣召　呼延赞单骑救驾</h6>
                <div class="divider text-uppercase">Small 文本</div>
                <p>在标题内还可以包含 <code>&lt;small&gt;</code> 标签或赋予 <code>.small</code> 类的元素，可以用来标记副标题。</p>
                <div class="bg-lightest p-10">
                  <h3>h3. 第三回 金头娘征场斗艺　高怀德大战潞州 <small>高怀德</small></h3>
                  <h4>h4. 第四回 讲和议杨业回兵　迎銮驾豪杰施能 <small>杨业</small></h4>
                  <h5>h5. 第五回 宋太祖遗嘱后事　潘仁美计逐英雄 <small>潘仁美</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>文本样式</h4></div>
              <div class="card-body">
                <h5>段落</h5>
                <div class="row">
                  <div class="col-md-4"> <code>&lt;p class="lead"&gt;</code>
                    <p class="lead">笑江湖浪迹十年游，空负少年头。对铜驼巷陌，吟情渺渺，心事悠悠！酒冷诗残梦断，南国正清秋。把剑凄然望，无处招归舟。</p>
                  </div>
                  <div class="col-md-4">
                    <code>&lt;p&gt;</code>
                    <p>明旧天涯路远，问谁留楚佩，弄影中洲？数英雄儿女，俯仰古今愁。难消受灯昏罗帐，昙花一现恨难休！飘零惯，金戈铁马，拼葬荒丘！</p>
                  </div>
                  <div class="col-md-4">
                    <code>&lt;p class="small"&gt;</code>
                    <p class="small">南国清秋，一轮皓月，将近中天。度时分，已是万籁俱寂，只杭州总兵的府第里，还是笑语喧喧，喜气洋洋。</p>
                  </div>
                </div>
                <hr>
                <h5>内嵌文本元素</h5>
                <dl class="row">
                  <dt class="col-3 col-md-2"><code>&lt;mark&gt;</code></dt>
                  <dd class="col-9 col-md-10">您可以使用 mark 标签 to <mark>highlight</mark>text.</dd>
                  <dt class="col-3 col-md-2"><code>&lt;del&gt;</code></dt>
                  <dd class="col-9 col-md-10"><del>这行文本将被视为已删除文本。</del></dd>
                  <dt class="col-3 col-md-2"><code>&lt;s&gt;</code></dt>
                  <dd class="col-9 col-md-10"><s>这一行文字的意思是不再准确。</s></dd>
                  <dt class="col-3 col-md-2"><code>&lt;ins&gt;</code></dt>
                  <dd class="col-9 col-md-10"><ins>这一行文本将被视为对文档的补充。</ins></dd>
                  <dt class="col-3 col-md-2"><code>&lt;u&gt;</code></dt>
                  <dd class="col-9 col-md-10"><u>这行文本将呈现为带下划线。</u></dd>
                  <dt class="col-3 col-md-2"><code>&lt;small&gt;</code></dt>
                  <dd class="col-9 col-md-10"><small>这一行文字应被视为小一号字体。</small></dd>
                  <dt class="col-3 col-md-2"><code>&lt;strong&gt;</code></dt>
                  <dd class="col-9 col-md-10"><strong>此行呈现为粗体文本。</strong></dd>
                  <dt class="col-3 col-md-2"><code>&lt;em&gt;</code></dt>
                  <dd class="col-9 col-md-10"><em>此行呈现为斜体文本。</em></dd>
                </dl>
                <hr>
                <h5>文本对齐</h5>
                <p class="text-left">荒山隐士迎佳客 美酒甜言惑少年</p>
                <p class="text-center">崎岖世路湛嗟叹 怅悯情怀可奈何</p>
                <p class="text-right">疑梦疑真谨异丐 半忧半喜救佳人</p>
                <p class="text-justify">神功难测惊高弟 祸患潜埋闯喜筵</p>
                <p class="text-nowrap">重来踪迹从何觅 出处恩仇忍细论</p>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <h5>大小写</h5>
                    <p class="text-lowercase">Lowercased text.</p>
                    <p class="text-uppercase">Uppercased text.</p>
                    <p class="text-capitalize">Capitalized text.</p>
                  </div>
                  <div class="col-md-6">
                    <h5>缩略语</h5>
                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>列表样式</h4></div>
              <div class="card-body">
                <div class="row">

                  <div class="col-sm-4 col-xs-12">
                    <p><code>&lt;ul&gt;</code></p>
                    <ul>
                      <li>豪士惊心谈恶斗 荒山动魄遇穷儒</li>
                      <li>锦帐低垂人已杳 琼浆难得客归来</li>
                      <li>明珠尽散滋疑虑 红粉何尝是祸胎</li>
                      <li>谁施妙手空空技 哪识芳心惘惘情</li>
                    </ul>
                  </div>

                  <div class="col-sm-4 col-xs-12">
                    <p><code>&lt;ol&gt;</code></p>
                    <ol>
                      <li>豪士惊心谈恶斗 荒山动魄遇穷儒</li>
                      <li>锦帐低垂人已杳 琼浆难得客归来</li>
                      <li>明珠尽散滋疑虑 红粉何尝是祸胎</li>
                      <li>谁施妙手空空技 哪识芳心惘惘情</li>
                    </ol>
                  </div>

                  <div class="col-sm-4 col-xs-12">
                    <p><code>&lt;ul class="list-unstyled"&gt;</code></p>
                    <ul class="list-unstyled">
                      <li>豪士惊心谈恶斗 荒山动魄遇穷儒</li>
                      <li>锦帐低垂人已杳 琼浆难得客归来</li>
                      <li>明珠尽散滋疑虑 红粉何尝是祸胎</li>
                      <li>谁施妙手空空技 哪识芳心惘惘情</li>
                    </ul>
                  </div>

                  <div class="col-lg-12">
                    <hr>
                    <p><code>&lt;ul class="list-inline"&gt;</code></p>
                    <ul class="list-inline">
                      <li class="list-inline-item">异宝轻抛真侠士</li>
                      <li class="list-inline-item">荒林谈笑救佳人</li>
                      <li class="list-inline-item">中伏何堪作楚囚</li>
                    </ul>
                  </div>

                </div>
                <!-- .row -->
              </div>
            </div>
          </div>
        </div>
        <!-- .row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>描述</h4></div>
              <div class="card-body">

                <dl class="row">
                  <dt class="col-sm-3">《侠骨丹心》</dt>
                  <dd class="col-sm-9">道尽“独行长剑一杯酒，孤客高楼万里情；侠骨柔情现正义，青天碧海映丹心。</dd>

                  <dt class="col-sm-3">《云海玉弓缘》</dt>
                  <dd class="col-sm-9">
                    <p>主要讲述了清朝中期，江湖浪子金世遗的传奇经历和与厉胜男、谷之华之间的爱恨情仇故事。</p>
                    <p>是梁氏武侠天山系列最出名的两部小说之一，主要是厉胜男向魔头孟神通复仇并借此成为另一个“女魔头”的故事。</p>
                  </dd>

                  <dt class="col-sm-3">《冰河洗剑录》</dt>
                  <dd class="col-sm-9">该小说讲述了江南与邹绛霞的孩子江海天的感情和江湖故事。</dd>

                  <dt class="col-sm-3 text-truncate">《白发魔女传》</dt>
                  <dd class="col-sm-9">叙述的是明万历四十三年凉秋，云贵总督卓仲廉卸任归故乡陕北，途经川陕边境时被劫富济贫的绿林女大盗“玉罗刹”练霓裳劫去大部分财产。</dd>

                  <dt class="col-sm-3">《萍踪侠影录》</dt>
                  <dd class="col-sm-9">
                    <dl class="row">
                      <dt class="col-sm-4">以明代土木堡之变为背景</dt>
                      <dd class="col-sm-8">交织成一个豪侠浪漫美好绝伦的传奇。</dd>
                    </dl>
                  </dd>
                </dl>

              </div>
            </div>
          </div>
        </div>
        <!-- .row -->

        <div class="row">
          <div class="col-md-6">
            <div class="card">

              <div class="card-header"><h4>引用</h4></div>
              <div class="card-body">
                <blockquote class="blockquote">
                  <p>这是一个美妙的夜晚，全身只有一种感觉，每个毛孔都浸润着喜悦。作为大自然的一部分，我在其中任意来去。</p>
                  <footer>亨利·大卫·梭罗 <cite title="《瓦尔登湖》">《瓦尔登湖》</cite></footer>
                </blockquote>
              </div>

            </div>
          </div>
          <div class="col-md-6">
            <div class="card">

              <div class="card-header"><h4>地址</h4></div>
              <div class="card-body">
                <address>
                  <strong>Twitter公司</strong><br>
                  市场街1355#，900号<br>
                  旧金山，CA 94103<br>
                  <abbr title="电话">Tel:</abbr> (123) 456-7890
                </address>
              </div>

            </div>
          </div>
        </div>
        <!-- .row -->

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
