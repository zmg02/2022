@include('admin.mogujie.layouts.head',['title'=>'JS 插件 - 标签插件'])

<!--标签插件-->
<link rel="stylesheet" href="/js/mogujie/admin/jquery-tags-input/jquery.tagsinput.min.css">
<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

    <!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'JS 插件 - 标签插件'])
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>标签插件</h4></div>
              <div class="card-body">

                <input class="form-control js-tags-input" type="text" id="example-tags" name="tags" data-height="38px" placeholder="请输入标签" value="光年,黄金瞳">

              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <!--End 页面主要内容-->

@include('admin.mogujie.layouts.foot')
<!--标签插件-->
<script src="/js/mogujie/admin/jquery-tags-input/jquery.tagsinput.min.js"></script>
