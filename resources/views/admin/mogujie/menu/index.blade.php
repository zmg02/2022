@include('admin.mogujie.layouts.head')

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header')
<!--End 头部信息-->

<!--页面主要内容-->
<style>
  .control-label {
    text-align: right;
  }
</style>
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <button>aaaa</button>
            <button>aaaa</button>
            <button>aaaa</button>
          </div>
          <div class="card-body">
            <ol class="dd-list">
              @foreach ($menus as $key=>$menu)
                <li class="dd-item">
                  <div class="dd-handle"></div>
                  <ol></ol>
                </li>
              @endforeach
            </ol>
          </div>
        </div>
      </div>


      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="box-title">New</h3>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-body">
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Parent</span></div>
                  <div class="col-md-9">
                    <input type="hidden" name="parent_id">
                    <select class="form-control" style="height: 38px" name="parent_id" size="1">
                      <option value="0">root</option>
                      @foreach ($menus as $key=>$menu)
                        @if ($menu['parent_id'] == 0)
                          <option value="{{ $menu['id'] }}">{{ nbsp(1) }}{{ $menu['title'] }}</option>
                        @else

                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Title</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="文本..">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Icon</span></div>
                  <div class="col-md-9">
                    <input type="hidden" name="parent_id">


                    <div class="input-group">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">陈楚生 <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#!">思恋一个荒废的名字</a></li>
                          <li><a href="#!">有没有人告诉你</a></li>
                          <li><a href="#!">经过</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#!">风起时想你</a></li>
                        </ul>
                      </div>
                      <input type="text" class="form-control" aria-label="...">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>URI</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="文本..">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Roles</span></div>
                  <div class="col-md-9">
                    <input type="hidden" name="parent_id">
                    <select class="form-control"  style="height: 38px" name="parent_id" size="1">
                      <option value="0">请选择</option>
                      <option value="1">选项 #1</option>
                      <option value="2">选项 #2</option>
                      <option value="3">选项 #3</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Permission</span></div>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="hidden" name="permissions">
                      <div class="tree">
                        <div class="d-flex">
                          <label class="lyear-checkbox checkbox-inline checkbox-primary">
                            <input type="checkbox"><span>足球</span>
                          </label>

                          <label class="lyear-checkbox checkbox-inline checkbox-primary">
                            <input type="checkbox"><span>足球</span>
                          </label>
                        </div>
                        <div class="dd-tree">
                          <ul>
                            <li>aaaa</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

              <div class="form-footer row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-9">
                  <button class="btn btn-default btn-w-md" type="button">重 置</button>
                  <button class="btn btn-primary btn-w-md" type="button">提 交</button>
                </div>
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
