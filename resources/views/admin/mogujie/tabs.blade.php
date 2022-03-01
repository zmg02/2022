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
            <span class="navbar-page-title"> UI元素 - 标签页 </span>
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>基本样式</h4></div>
              <div class="card-body">

                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab">金庸</a></li>
                  <li><a href="#profile" role="tab" id="profile-tab" data-toggle="tab">古龙</a></li>
                  <li class="dropdown">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">其他 <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="myTabDrop1-contents">
                      <li><a href="#dropdown1" id="dropdown1-tab" data-toggle="tab">梁羽生</a></li>
                      <li><a href="#dropdown2" id="dropdown2-tab" data-toggle="tab">陈青云</a></li>
                    </ul>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="home">
                    <p>原名查良镛，1924年3月10日生于浙江省海宁市，1948年移居香港。当代知名武侠小说作家、新闻学家、企业家、政治评论家、社会活动家，“香港四大才子”之一。1944年考入重庆中央政治大学外交系。1946年秋，金庸进入上海《大公报》任国际电讯翻译。1948年，毕业于上海东吴大学法学院。1952年调入《新晚报》编辑副刊，并写出《绝代佳人》、《兰花花》等电影剧本。1959年，金庸等人于香港创办《明报》。</p>
                  </div>
                  <div class="tab-pane fade" id="profile">
                    <p>原名熊耀华，籍贯江西，汉族。1938年6月7日生于香港。著名武侠小说家，新派武侠小说泰斗，与金庸、梁羽生并称为中国武侠小说三大宗师。代表作有《多情剑客无情剑》、《绝代双骄》、《英雄无泪》等。古龙把武侠小说引入了经典文学的殿堂，将戏剧、推理、诗歌等元素带入传统武侠，又将自己独特的人生哲学融入其中，使中外经典镕铸一炉，开创了近代武侠小说新纪元，将武侠文学推上了一个新的高峰。</p>
                  </div>
                  <div class="tab-pane fade" id="dropdown1">
                    <p>原名陈文统，中国著名武侠小说家，与金庸、古龙并称为中国武侠小说三大宗师，被誉为新派武侠小说的开山祖师。代表作品有《白发魔女传》、《七剑下天山》、《萍踪侠影录》、《云海玉弓缘》等。在评价自己的武侠创作地位时，梁羽生曾说：“开风气也，梁羽生；发扬光大者，金庸。”另有笔名陈鲁、冯瑜宁、梁慧如、李夫人、冯显华、幻萍、佟硕之、凤雏生。</p>
                  </div>
                  <div class="tab-pane fade" id="dropdown2">
                    <p>武侠小说家，台湾鬼派开山掌门，“鬼派天下第一人”。1962年受诸葛青云《夺魂旗》“白骨血旗”的启示，写了《音容劫》之“鬼琴魔音”、《铁笛震武林》之“魔笛摧心”、《剑冢》之“掘墓人”、《鬼堡》之“血骷髅”，从此一发而不可收，大受中下阶层读者欢迎，与当年“正宗武侠泰斗”卧龙生为同一畅销级别。陈青云爱写:主角冷傲独行，邪魔歪道、恐怖血腥、阴森鬼气，想象力十分可观。</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>两端对齐的标签页</h4></div>
              <div class="card-body">

                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#home-basic">金庸</a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#profile-basic">古龙</a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#messages-basic">梁羽生</a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#settings-basic">陈青云</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="home-basic">
                    <p>原名查良镛，1924年3月10日生于浙江省海宁市，1948年移居香港。当代知名武侠小说作家、新闻学家、企业家、政治评论家、社会活动家，“香港四大才子”之一。1944年考入重庆中央政治大学外交系。1946年秋，金庸进入上海《大公报》任国际电讯翻译。1948年，毕业于上海东吴大学法学院。1952年调入《新晚报》编辑副刊，并写出《绝代佳人》、《兰花花》等电影剧本。1959年，金庸等人于香港创办《明报》。</p>
                  </div>
                  <div class="tab-pane fade" id="profile-basic">
                    <p>原名熊耀华，籍贯江西，汉族。1938年6月7日生于香港。著名武侠小说家，新派武侠小说泰斗，与金庸、梁羽生并称为中国武侠小说三大宗师。代表作有《多情剑客无情剑》、《绝代双骄》、《英雄无泪》等。古龙把武侠小说引入了经典文学的殿堂，将戏剧、推理、诗歌等元素带入传统武侠，又将自己独特的人生哲学融入其中，使中外经典镕铸一炉，开创了近代武侠小说新纪元，将武侠文学推上了一个新的高峰。</p>
                  </div>
                  <div class="tab-pane fade" id="messages-basic">
                    <p>原名陈文统，中国著名武侠小说家，与金庸、古龙并称为中国武侠小说三大宗师，被誉为新派武侠小说的开山祖师。代表作品有《白发魔女传》、《七剑下天山》、《萍踪侠影录》、《云海玉弓缘》等。在评价自己的武侠创作地位时，梁羽生曾说：“开风气也，梁羽生；发扬光大者，金庸。”另有笔名陈鲁、冯瑜宁、梁慧如、李夫人、冯显华、幻萍、佟硕之、凤雏生。</p>
                  </div>
                  <div class="tab-pane fade" id="settings-basic">
                    <p>武侠小说家，台湾鬼派开山掌门，“鬼派天下第一人”。1962年受诸葛青云《夺魂旗》“白骨血旗”的启示，写了《音容劫》之“鬼琴魔音”、《铁笛震武林》之“魔笛摧心”、《剑冢》之“掘墓人”、《鬼堡》之“血骷髅”，从此一发而不可收，大受中下阶层读者欢迎，与当年“正宗武侠泰斗”卧龙生为同一畅销级别。陈青云爱写:主角冷傲独行，邪魔歪道、恐怖血腥、阴森鬼气，想象力十分可观。</p>
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
