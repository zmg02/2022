@include('admin.mogujie.layouts.head',['title'=>'JS 插件 - 日期选择器'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

    <!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'JS 插件 - 日期选择器'])
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
