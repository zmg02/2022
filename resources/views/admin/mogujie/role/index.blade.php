@include('admin.mogujie.layouts.head',['title'=>'角色列表'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'角色'])
<!--End 头部信息-->

<style>
  #alert_info {
    width: 500px;
    height: 200px;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 200px auto;
  }
</style>

<!--页面主要内容-->
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <form action="" method="get">
            <div class="card-header">
              <div class="col-xs-3">
                <div class="input-group">
                  <input type="text" name="keywords" class="form-control" value="{{request('keywords')}}" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">搜 索</button>
                  </span>
                </div>
              </div>
              <div class="col-xs-1" style="float: right;">
                <a class="btn btn-label btn-primary" href="{{ route('role.create') }}"><label><i class="mdi mdi-plus"></i></label> 新增角色</a>
              </div>
            </div>
          </form>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Slug</th>
                  <th>名称</th>
                  <th>创建时间</th>
                  <th>修改时间</th>
                  <th style="text-align: center;">操作</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($roles as $role)
                <tr>
                  <td>{{ $role->id }}</td>
                  <td>{{ $role->slug }}</td>
                  <td>{{ $role->name }}</td>
                  <td>{{ $role->created_at }}</td>
                  <td>{{ $role->updated_at }}</td>
                  <td align="center">
                    <!-- <div style="width: 70px; display:inline-block;"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editRole" data-id="{{ $role->id }}">编 辑</button></div> -->
                    <div style="width: 100px; display:inline-block;">
                      <a class="btn btn-label btn-primary" href="{{ route('role.edit',[$role->id]) }}"><label><i class="mdi mdi-table-edit"></i></label> 编 辑</a>
                    </div>
                    <div style="width: 100px; display:inline-block;">
                      <a class="btn btn-label btn-danger" data-id="{{$role->id}}"><label><i class="mdi mdi-close"></i></label> 删除</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div align="right">{{ $roles->links() }}</div>
          </div>
        </div>
      </div>
    </div>

    <div id="alert_info" class="alert alert-danger" role="alert" style="display: none">
      <h4>确定要删除该角色吗？</h4>
      <p style="margin-top: 100px;text-align: right">
        <button type="button" class="btn btn-danger-delete" data-id="">确定删除</button>
        <button type="button" class="btn btn-cancel">取消</button>
      </p>
    </div>

  </div>
</main>

<!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')

<!--消息提示-->
<script src="/js/mogujie/admin/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/lightyear.js"></script>

<script type="text/javascript">
  $(function() {
    $('.btn-danger').click(function() {
      var id = $(this).data('id');
      $('.btn-danger-delete').attr('data-id',id);
      $('#alert_info').css('display', 'block');
    });
    $('.btn-cancel').click(function() {
      $('#alert_info').css('display', 'none');
    });
    $('.btn-danger-delete').click(function() {
      var id = $(this).data('id');
      $.ajax({
        headers: {
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        },
        method: 'delete',
        url: "{{ route('role.destroy', 'id') }}".replace(/id/,id),
        success: function(result) {
          $('#alert_info').css('display', 'none');
          if (result == 'success') {
            lightyear.notify('删除成功!', 'success', 100, 'mdi mdi-emoticon-happy', 'top', 'center' , "{{ route('role.index') }}");
          } else {
            lightyear.notify('删除失败，请稍后再试~', 'danger', 100);
          }
        }
      })
    });
  });
  //获取角色信息(已取消)
  $('#editRole').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)
    var formUrl = "{{ route('role.update','id') }}";
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ route('role.edit', 'id') }}".replace(/id/, id),
      async: true,
      success: function(result) {
        modal.find('input[name="name"]').val(result.name);
        modal.find('input[name="slug"]').val(result.slug);
        modal.find('input[name="id"]').val(result.id);
        modal.find('#putForm').attr('action', formUrl.replace(/id/, id))
      }
    });
  })
</script>