@include('admin.mogujie.layouts.head',['title'=>'JS 插件 - 颜色选择器'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

    <!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'JS 插件 - 颜色选择器'])
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>颜色选择</h4></div>
              <div class="card-body">

                <input class="form-control js-colorpicker m-b-10" type="text" id="example-colorpicker" name="text_color" placeholder="点击选择颜色" value="" />

                <div class="js-colorpicker input-group colorpicker-element">
                  <input class="form-control" type="text" id="example-colorpicker2" name="example-colorpicker2" value="#33cabb">
                  <span class="input-group-addon"><i style="background-color: rgb(51, 202, 187);"></i></span>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <!--End 页面主要内容-->

@include('admin.mogujie.layouts.foot')
<!--颜色选择插件-->
<script src="/js/mogujie/admin/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
