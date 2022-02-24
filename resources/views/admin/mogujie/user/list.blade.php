    @include('admin.mogujie.layouts.head')
    <!--时间选择插件-->
    <link rel="stylesheet" href="/js/mogujie/admin/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <!--日期选择插件-->
    <link rel="stylesheet" href="/js/mogujie/admin/bootstrap-datepicker/bootstrap-datepicker3.min.css">

    <style>
      #alert_info {
        position: fixed;
        left: 60%;
        top: 40%;
        width: 300px;
      }
      #set_info {
        position: fixed;
        left: 50%;
        top: 40%;
        width: 500px;
      }
    </style>
    <!--左侧导航-->
    @include('admin.mogujie.layouts.sidebar')
    <!--End 左侧导航-->

    <!--头部信息-->
    @include('admin.mogujie.layouts.header')
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <form action="" method="get">
                <div class="card-header">
                  <div class="col-xs-1">
                    <select class="form-control" style="height: 38px" id="example-select" name="is_vip" size="1">
                      <option value="">是否会员</option>
                      <option value="1" @if (Request('is_vip') == 1) selected @endif>是</option>
                    </select>
                  </div>
                  <div class="col-xs-1">
                    <select class="form-control" style="height: 38px" id="example-select" name="is_active" size="1">
                      <option value="">是否活跃</option>
                      <option value="1" @if (Request('is_active') == 1) selected @endif>是</option>
                    </select>
                  </div>
                  <div class="col-xs-1">
                    <select class="form-control" style="height: 38px" id="example-select" name="is_admin" size="1">
                      <option value="">是否管理员</option>
                      <option value="1" @if (Request('is_admin') == 1) selected @endif>是</option>
                    </select>
                  </div>
                  <div class="col-xs-1">
                    <select class="form-control" style="height: 38px" id="example-select" name="status" size="1">
                      <option value="all">所有状态</option>
{{--                      <option value="0" @if (Request('status') == 0) selected @endif>删除</option>--}}
                      <option value="1" @if (Request('status') == 1) selected @endif>正常</option>
                      <option value="2" @if (Request('status') == 2) selected @endif>禁用</option>
                      <option value="3" @if (Request('status') == 3) selected @endif>申请恢复中</option>
                    </select>
                  </div>
                  <div class="col-xs-2">
                    <div class="input-daterange input-group js-datepicker" data-auto-close="false" data-date-format="yyyy-mm-dd">
                      <input class="form-control" type="text" id="example-daterange1" name="start_date_time" value="{{Request('start_date_time')}}" placeholder="从">
                      <span class="input-group-addon"><i class="mdi mdi-chevron-right"></i></span>
                      <input class="form-control" type="text" id="example-daterange2" name="end_date_time" value="{{Request('end_date_time')}}" placeholder="至">
                    </div>
                  </div>
                  <div class="col-xs-3">
                      <div class="input-group">
                          <input type="text" name="account" class="form-control" value="{{request('account')}}" placeholder="姓名|邮箱|手机">
                          <span class="input-group-btn">
                          <button class="btn btn-default" type="submit">搜索</button>
                        </span>
                      </div>
                  </div>
                </div>
              </form>
              <div class="card-body">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>头像</th>
                      <th>姓名</th>
                      <th>邮箱</th>
                      <th>手机</th>
                      <th>是否管理员</th>
                      <th>是否会员</th>
                      <th>是否活跃</th>
                      <th>状态</th>
                      <th>订单总数</th>
                      <th>成交总数</th>
                      <th>成交总额</th>
                      <th>最后一次登录</th>
                      <th>操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <th scope="row"><img width="50px" src="{{ $user->icon }}"/></th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>
                        @if(empty($user->is_admin))否@else是@endif
                      </td>
                      <td>
                        @if(empty($user->is_vip))
                        否
                        @else
                        是
                        @endif
                      </td>
                      <td>
                        @if(empty($user->is_active))
                        否
                        @else
                        是
                        @endif
                      </td>
                      <td>{{ (config('user.status')[$user->status]) ?? $user->status }}</td>
                      <td>{{ $user->order_count }}</td>
                      <td>{{ $user->payment_count }}</td>
                      <td>${{ $user->payment_price }}</td>
                      <td>{{ date('Y-m-d H:i', $user->last_login_time) }}</td>
                      <td>
                        <button class="btn btn-label btn-danger" btn-value="{{ $user->id }}"><label><i class="mdi mdi-close"></i></label> 删除</button>
                        <button class="btn btn-info btn-set" type="button" btn-value="id:{{$user->id}},is_vip:{{$user->is_vip}},is_admin:{{$user->is_admin}},status:{{ $user->status }}">设置</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div align="right">{{ $users->links() }}</div>
              </div>
            </div>
          </div>
        </div>

        <div id="alert_info" class="alert alert-info alert-dismissible" role="alert" style="display: none">
          <h4>确定要删除该用户吗？</h4>
          <p style="margin-top: 100px;text-align: right">
            <button type="button" class="btn btn-danger-delete" btn-value="">确定删除</button>
            <button type="button" class="btn btn-cancel">取消</button>
          </p>
        </div>

        <div id="set_info" class="alert alert-info alert-dismissible" role="alert" style="display: none">
          <h4 style="text-align: center">设 置</h4>
          <div class="form-group row m-b-10" style="margin-top: 50px">
            <div class="col-xs-3">会员：</div>
            <div class="col-xs-9">
              <label class="lyear-switch switch-solid switch-success">
                <input id="vip-input" type="checkbox" >
                <span></span>
              </label>
            </div>
          </div>
          <div class="form-group row m-b-10">
            <div class="col-xs-3">管理员：</div>
            <div class="col-xs-9">
              <label class="lyear-switch switch-solid switch-success">
                <input id="admin-input" type="checkbox" >
                <span></span>
              </label>
            </div>
          </div>
          <div class="form-group row m-b-10">
            <div class="col-xs-3">用户状态：</div>
            <div class="col-xs-9">
              <select class="form-control" style="height: 38px;display: inline-block;width: 70%;" id="status-select" name="status" size="1">
                <option value="1">正常</option>
                <option value="2">禁用</option>
                <option value="3">申请恢复中</option>
              </select>
            </div>
          </div>
          <p style="margin-top: 100px;text-align: right">
            <button type="button" class="btn btn-set-confirm" btn-value="">确定修改</button>
            <button type="button" class="btn btn-cancel">取消</button>
          </p>
        </div>
      </div>

    </main>
    <!--End 页面主要内容-->
    @include('admin.mogujie.layouts.foot')

    <!--时间选择插件-->
    <script src="/js/mogujie/admin/bootstrap-datetimepicker/moment.min.js"></script>
    <script src="/js/mogujie/admin/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/mogujie/admin/bootstrap-datetimepicker/locale/zh-cn.js"></script>
    <!--日期选择插件-->
    <script src="/js/mogujie/admin/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/js/mogujie/admin/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script>
      //用户删除确认弹框显示
      $('.btn-danger').click(function () {
        $('#alert_info').css('display','block');
        $('#set_info').css('display','none');
        var id = $(this).attr('btn-value');
        $('.btn-danger-delete').attr('btn-value',id);
      });
      //用户删除操作
      $('.btn-danger-delete').click(function () {
          var id = $(this).attr('btn-value');
          $.ajax({
            type: 'get',
            url: '{{ route("user.delete") }}',
            data: {
              id:id
            },
            success: function (data) {
              location.href="{{ route("user.list") }}"
            },
            error: function (data) {
              alert(data);
            }
          });
      });
      //弹框隐藏
      $('.btn-cancel').click(function () {
        $('#alert_info').css('display','none');
        $('#set_info').css('display','none');
      });
      //修改弹框显示
      $('.btn-set').click(function () {
        $('#set_info').css('display', 'block');
        $('#alert_info').css('display','none');
        var data = $(this).attr('btn-value');
        // $('.btn-set-confirm').attr('btn-value',data);
        var arr1 = data.split(',');
        var newArr = [];
        for (val in arr1) {
          arr2 = arr1[val].split(':');
          newArr[arr2[0]] = arr2[1];

          if (newArr['status']) {
            $('#status-select>option[value="'+newArr['status']+'"]').attr('selected','selected');
          }

          if (newArr['is_vip'] == 1) {
            $('#vip-input').attr('checked','checked');
          }
          if (newArr['is_admin'] == 1) {
            $('#admin-input').attr('checked','checked');
          }
          $('.btn-set-confirm').attr('btn-value',newArr['id']);
        }

      });
      //用户状态修改
      $('.btn-set-confirm').click(function () {
        var is_vip = is_admin = 0;
        if ($('#vip-input').is(':checked')) {
          is_vip = 1;
        }
        if ($('#admin-input').is(':checked')) {
          is_admin = 1;
        }
        var status = parseInt($('#status-select').val());
        var id = $('.btn-set-confirm').attr('btn-value');

        $.ajax({
          type: 'post',
          url: '{{ route("user.set") }}',
          data: {
            id:id,
            is_vip:is_vip,
            is_admin:is_admin,
            status:status
          },
          success: function (data) {
            // console.log(data)
            location.href="{{ route("user.list") }}"
          },
          error: function (data) {
            alert(data);
          }
        });
      });

    </script>
