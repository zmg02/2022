@include('admin.mogujie.layouts.head',['title'=>'角色'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'新增角色'])
<!--End 头部信息-->

<style>
  .control-label{ text-align: right;}
  .mdi-asterisk{ color: #bd4147;}
</style>

<!--页面主要内容-->
<main class="lyear-layout-content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="col-xs-1"><h3>Edit</h3></div>
                <div class="col-xs-1" style="float: right;"><a href="{{ route('role.index') }}" class="btn btn-info"><label><i class="mdi mdi-keyboard-return"></i></label> List</a></div>
              </div>

              <div class="card-body">
                <form action="{{ route('role.update',[$role['id']]) }}" method="post">
                  <div class="form-body">
                  <div class="form-group row">
                      <div class="col-md-2 control-label"><i class="mdi mdi-asterisk"></i> <span>Id</span></div>
                      <div class="col-md-8">
                        <input class="form-control" value="{{$role['id']}}" type="text" name="id" placeholder="Id" readonly="readonly">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2 control-label"><i class="mdi mdi-asterisk"></i> <span>Slug</span></div>
                      <div class="col-md-8">
                        <input class="form-control" value="{{$role['slug']}}" type="text" name="slug" placeholder="administrator"  readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-2 control-label"><i class="mdi mdi-asterisk"></i> <span>Name</span></div>
                      <div class="col-md-8">
                        <input class="form-control" value="{{$role['name']}}" type="text" name="name" placeholder="Administrator" readonly="readonly">

                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-2 control-label"><span>Permission</span></div>
                      <div class="col-md-8">
                        <div class="input-group">
                          <input type="hidden" name="permissions[]">
                          <div class="tree">
                            <div class="d-flex">
                              <label class="lyear-checkbox checkbox-inline checkbox-primary">
                                <input type="checkbox"><span>Select All</span>
                              </label>

                              <label class="lyear-checkbox checkbox-inline checkbox-primary">
                                <input type="checkbox"><span>Expand</span>
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

                </form>
              </div>
            </div>
          </div>
        </div>

<!-- //弹框位置 -->

      </div>
    </main>

<!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')

<!--消息提示-->
<script src="/js/mogujie/admin/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/lightyear.js"></script>


