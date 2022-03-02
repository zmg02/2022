@include('admin.mogujie.layouts.head',['title'=>'示例页面 - 网站配置'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'示例页面 - 网站配置'])
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <ul class="nav nav-tabs page-tabs">
                <li> <a href="{{ url('admin/mogujie/index/config') }}">基本</a> </li>
                <li> <a href="lyear-config-system.html">系统</a> </li>
                <li class="active"> <a href="#!">上传</a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active">

                  <form action="#!" method="post" name="edit-form" class="edit-form">
                    <div class="form-group">
                      <label for="upload_file_ext">图片上传大小限制</label>
                      <input class="js-tags-input form-control" type="text" id="upload_file_ext" name="upload_file_ext" value="doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,rar,zip,gz,bz2,7z" >
                      <small class="help-block">多个后缀用逗号隔开，不填写则不限制类型</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_image_size">图片上传大小限制</label>
                      <input class="form-control" type="text" id="upload_image_size" name="upload_image_size" value="0" placeholder="请输入图片上传大小限制" >
                      <small class="help-block">0为不限制大小，单位：kb</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_image_ext">允许上传的图片后缀</label>
                      <input class="js-tags-input form-control" type="text" id="upload_image_ext" name="upload_image_ext" value="gif,jpg,jpeg,bmp,png" >
                      <small class="help-block">多个后缀用逗号隔开，不填写则不限制类型</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_file_size">文件上传大小限制</label>
                      <input class="form-control" type="text" id="upload_file_size" name="upload_file_size" value="0" placeholder="请输入文件上传大小限制" >
                      <small class="help-block">0为不限制大小，单位：kb</small>
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

@include('admin.mogujie.layouts.foot')

<!--标签插件-->
<script src="/js/mogujie/admin/jquery-tags-input/jquery.tagsinput.min.js"></script>

