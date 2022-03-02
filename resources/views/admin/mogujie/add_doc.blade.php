@include('admin.mogujie.layouts.head',['title'=>'示例页面 - 新增文档'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'示例页面 - 新增文档'])
<!--End 头部信息-->


    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                <form action="#!" method="post" class="row">
                  <div class="form-group col-md-12">
                    <label for="type">栏目</label>
                    <div class="form-controls">
                      <select name="type" class="form-control" id="type">
                        <option value="1">小说</option>
                        <option value="2">古籍</option>
                        <option value="3">专辑</option>
                        <option value="4">自传</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="title">标题</label>
                    <input type="text" class="form-control" id="title" name="title" value="" placeholder="请输入标题" />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="seo_keywords">关键词</label>
                    <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="" placeholder="关键词" />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="seo_description">描述</label>
                    <textarea class="form-control" id="seo_description" name="seo_description" rows="5" value="" placeholder="描述"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label>多图上传</label>
                    <div class="form-controls">

                      <ul class="list-inline clearfix lyear-uploads-pic">
                        <li class="col-xs-4 col-sm-3 col-md-2">
                          <figure>
                            <img src="/img/mogujie/admin/gallery/15.jpg" alt="图片一">
                            <figcaption>
                              <a class="btn btn-round btn-square btn-primary" href="#!"><i class="mdi mdi-eye"></i></a>
                              <a class="btn btn-round btn-square btn-danger" href="#!"><i class="mdi mdi-delete"></i></a>
                            </figcaption>
                          </figure>
                        </li>
                        <li class="col-xs-4 col-sm-3 col-md-2">
                          <figure>
                            <img src="/img/mogujie/admin/gallery/16.jpg" alt="图片二">
                            <figcaption>
                              <a class="btn btn-round btn-square btn-primary" href="#!"><i class="mdi mdi-eye"></i></a>
                              <a class="btn btn-round btn-square btn-danger" href="#!"><i class="mdi mdi-delete"></i></a>
                            </figcaption>
                          </figure>
                        </li>
                        <li class="col-xs-4 col-sm-3 col-md-2">
                          <figure>
                            <img src="/img/mogujie/admin/gallery/17.jpg" alt="图片三">
                            <figcaption>
                              <a class="btn btn-round btn-square btn-primary" href="#!"><i class="mdi mdi-eye"></i></a>
                              <a class="btn btn-round btn-square btn-danger" href="#!"><i class="mdi mdi-delete"></i></a>
                            </figcaption>
                          </figure>
                        </li>
                        <li class="col-xs-4 col-sm-3 col-md-2">
                          <a class="pic-add" id="add-pic-btn" href="#!" title="点击上传"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="content">内容</label>
                    <p>HTML编辑器这里就不做演示了</p>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tags">标签</label>
                    <input class="js-tags-input form-control" type="text" id="tags" name="tags" value="" />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="sort">排序</label>
                    <input type="text" class="form-control" id="sort" name="sort" value="0" />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="status">状态</label>
                    <div class="clearfix">
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="0"><span>禁用</span>
                      </label>
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="1" checked><span>启用</span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary ajax-post" target-form="add-form">确 定</button>
                    <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                  </div>
                </form>

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
