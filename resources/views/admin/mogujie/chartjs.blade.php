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
            <span class="navbar-page-title"> JS 插件 - 图表 </span>
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

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>线形图 - 1</h4></div>
              <div class="card-body">
                <canvas id="chart-line-1" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>线形图 - 2</h4></div>
              <div class="card-body">
                <canvas id="chart-line-2" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>线形图 - 3</h4></div>
              <div class="card-body">
                <canvas id="chart-line-3" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>线形图 - 4</h4></div>
              <div class="card-body">
                <canvas id="chart-line-4" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>面积图 - 1</h4></div>
              <div class="card-body">
                <canvas id="chart-area-1" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>面积图 - 2</h4></div>
              <div class="card-body">
                <canvas id="chart-area-2" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>垂直条形图 - 1</h4></div>
              <div class="card-body">
                <canvas id="chart-vbar-1" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>垂直条形图 - 2</h4></div>
              <div class="card-body">
                <canvas id="chart-vbar-2" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>水平条形图 - 1</h4></div>
              <div class="card-body">
                <canvas id="chart-hbar-1" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>水平条形图 - 2</h4></div>
              <div class="card-body">
                <canvas id="chart-hbar-2" width="400" height="250"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>饼图</h4></div>
              <div class="card-body">
                <canvas id="chart-pie" width="280" height="280"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>环形图</h4></div>
              <div class="card-body">
                <canvas id="chart-doughnut" width="280" height="280"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>雷达图</h4></div>
              <div class="card-body">
                <canvas id="chart-radar" width="360" height="360"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>极区图</h4></div>
              <div class="card-body">
                <canvas id="chart-polar" width="360" height="360"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><h4>气泡图</h4></div>
              <div class="card-body">
                <canvas id="chart-bubble" width="280" height="280"></canvas>
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
<script type="text/javascript" src="/js/mogujie/admin/Chart.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/main.min.js"></script>
<script type="text/javascript">
new Chart($("#chart-line-1"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月"],
        datasets: [
            {
                label: "收入",
                fill: false,
                borderWidth: 3,
                pointRadius: 0,
                data: [30, 25, 35, 23]
            }
        ]
    },
    options: {
        legend: {
            display: false
        },
    }
});

new Chart($("#chart-line-2"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月"],
        datasets: [{
            label: "收入",
            fill: false,
            borderWidth: 3,
            pointRadius: 5,
            borderColor: "#9966ff",
            pointBackgroundColor: "#9966ff",
            pointBorderColor: "#9966ff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "#9966ff",
            data: [30, 25, 35, 23]
        }]
    },
    options: {
        legend: {
            display: false
        },
    }
});

new Chart($("#chart-line-3"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月"],
        datasets: [{
            label: "收入",
            fill: false,
            backgroundColor: "#36a2eb",
            borderColor: "#36a2eb",
            borderWidth: 3,
            pointRadius: 0,
            data: [30, 25, 35, 23]
        },
        {
            label: "支出",
            fill: false,
            borderColor: "#ff6384",
            backgroundColor: "#ff6384",
            borderWidth: 3,
            pointRadius: 0,
            data: [23, 29, 30, 33]
        }]
    },
    options: {}
});

new Chart($("#chart-line-4"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月"],
        datasets: [{
            label: "收入",
            fill: false,
            borderWidth: 3,
            pointRadius: 4,
            borderColor: "#36a2eb",
            backgroundColor: "#36a2eb",
            pointBackgroundColor: "#36a2eb",
            pointBorderColor: "#36a2eb",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "#36a2eb",
            data: [30, 25, 35, 23]
        },
        {
            label: "支出",
            fill: false,
            borderWidth: 3,
            pointRadius: 4,
            borderColor: "#ff6384",
            backgroundColor: "#ff6384",
            pointBackgroundColor: "#ff6384",
            pointBorderColor: "#ff6384",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "#ff6384",
            data: [23, 29, 30, 33]
        }]
    },
    options: {}
});

new Chart($("#chart-area-1"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderWidth: 0,
            borderColor: "rgba(0,0,0,0)",
            data: [0, 59, 80, 58, 20, 55, 40]
        }]
    },
    options: {
        legend: {
            display: false
        },
    }
});

new Chart($("#chart-area-2"), {
    type: 'line',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderColor: "rgba(0,0,0,0)",
            pointBackgroundColor: "rgba(51,202,185,0.5)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(51,202,185,0.5)",
            data: [0, 59, 80, 58, 20, 55, 40]
        },
        {
            label: "支出",
            backgroundColor: "rgba(243,245,246,0.8)",
            borderColor: "rgba(0,0,0,0)",
            pointBackgroundColor: "rgba(243,245,246,0.8)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(243,245,246,0.8)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }]
    },
    options: {}
});

new Chart($("#chart-vbar-1"), {
    type: 'bar',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(51,202,185,0.7)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [10, 59, 80, 58, 20, 55, 40]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart($("#chart-vbar-2"), {
    type: 'bar',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(51,202,185,0.7)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [10, 59, 80, 58, 20, 55, 40]
        },
        {
            label: "支出",
            backgroundColor: "rgba(243,245,246,0.8)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(238,239,240,1)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart($("#chart-hbar-1"), {
    type: 'horizontalBar',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(51,202,185,0.7)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [10, 59, 80, 58, 20, 55, 40]
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart($("#chart-hbar-2"), {
    type: 'horizontalBar',
    data: {
        labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月"],
        datasets: [{
            label: "收入",
            backgroundColor: "rgba(51,202,185,0.5)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(51,202,185,0.7)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [10, 59, 80, 58, 20, 55, 40]
        },
        {
            label: "支出",
            backgroundColor: "rgba(243,245,246,0.8)",
            borderColor: "rgba(0,0,0,0)",
            hoverBackgroundColor: "rgba(238,239,240,1)",
            hoverBorderColor: "rgba(0,0,0,0)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart($("#chart-radar"), {
    type: 'radar',
    data: {
        labels: ["饮食", "饮酒", "睡眠", "设计", "编码", "骑行", "运动"],
        datasets: [{
            label: "张三",
            backgroundColor: "rgba(51,202,185,0.7)",
            borderColor: "rgba(0,0,0,0)",
            pointBackgroundColor: "rgba(51,202,185,0.7)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(51,202,185,0.7)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "李四",
            backgroundColor: "rgba(72,176,247,0.7)",
            borderColor: "rgba(0,0,0,0)",
            pointBackgroundColor: "rgba(72,176,247,0.7)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(72,176,247,0.7)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }]
    },
    options: {
        responsive: false,
        legend: {
            display: false
        }
    }
});

new Chart($("#chart-polar"), {
    type: 'polarArea',
    data: {
        datasets: [{
            data: [11, 16, 7, 3, 14],
            backgroundColor: ['rgba(255,99,132,0.95)', 'rgba(75, 192, 192, 0.95)', 'rgba(255, 159, 64, 0.95)', 'rgba(231, 233, 237, 0.95)', 'rgba(54, 162, 235, 0.95)'],
            label: 'My dataset' // for legend
        }],
        labels: ["红色", "绿色", "橙色", "灰色", "蓝色"]
    },
    options: {
        responsive: false,
        legend: {
            display: false
        }
    }
});

new Chart($("#chart-pie"), {
    type: 'pie',
    data: {
        labels: ["红色", "蓝色", "橙色"],
        datasets: [{
            data: [300, 50, 100],
            backgroundColor: ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)']
        }]
    },
    options: {
        responsive: false
    }
});

new Chart($("#chart-doughnut"), {
    type: 'doughnut',
    data: {
        labels: ["红色", "蓝色", "橙色"],
        datasets: [{
            data: [300, 50, 100],
            backgroundColor: ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)']
        }]
    },
    options: {
        responsive: false
    }
});

new Chart($("#chart-bubble"), {
    type: 'bubble',
    data: {
        datasets: [{
            label: '粉红色',
            data: [{
                x: 8,
                y: 24,
                r: 18
            },
            {
                x: 20,
                y: 30,
                r: 15
            },
            {
                x: 40,
                y: 10,
                r: 10
            }],
            backgroundColor: "#ff6384",
            hoverBackgroundColor: "#ff6384",
        },
        {
            label: '蓝色',
            data: [{
                x: 10,
                y: 35,
                r: 5
            },
            {
                x: 5,
                y: 5,
                r: 20
            },
            {
                x: 30,
                y: 15,
                r: 10
            }],
            backgroundColor: "#36a2eb",
            hoverBackgroundColor: "#36a2eb",
        },
        {
            label: '黄色',
            data: [{
                x: 17,
                y: 21,
                r: 8
            },
            {
                x: 25,
                y: 15,
                r: 12
            },
            {
                x: 12,
                y: 31,
                r: 16
            }],
            backgroundColor: "#ffce56",
            hoverBackgroundColor: "#ffce56",
        },
        ]
    },
    options: {
        legend: {
            display: false
        },

        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
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
