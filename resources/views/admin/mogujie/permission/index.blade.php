@include('admin.mogujie.layouts.head',['title'=>'权限'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'权限'])
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

  .dd {
    position: relative;
    display: block;
    margin: 10px;
    padding: 0;
    list-style: none;
    font-size: 13px;
    line-height: 20px;
  }

  .dd-list {
    display: block;
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .dd-list .dd-list {
    padding-left: 30px;
  }

  .dd-collapsed .dd-list {
    display: none;
  }

  .dd-item,
  .dd-empty,
  .dd-placeholder {
    display: block;
    position: relative;
    margin: 0;
    padding: 0;
  }

  .dd-handle {
    display: block;

    margin: 1px 0;
    padding: 8px 10px;
    color: #333;
    text-decoration: none;
    border: 1px solid #ddd;
    background: #fff;
  }

  .dd-handle:hover {
    color: var(--primary);
    background: #fff;
  }

  .dd-item>button {
    display: block;
    position: relative;
    right: 40px;
    top: 5px;
    cursor: pointer;
    float: left;
    width: 25px;
    height: 20px;
    margin: 5px 0;
    padding: 0;
    text-indent: 100%;
    white-space: nowrap;
    border: 0;
    background: transparent;
    font-size: 20px;
    line-height: 1;
    text-align: center;
    font-weight: bold;
  }

  span.dd-nodrag i {
    font-size: 18px;
  }
</style>

<!--页面主要内容-->
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="col-xs-3" style="margin-right:3px">
              <button class="btn btn-primary btn-expand">
                <i class="mdi mdi-plus-circle-outline"></i> Expand
              </button>
              <button class="btn btn-primary btn-collapse">
                <i class="mdi mdi-minus-circle-outline"></i> Collapse
              </button>
            </div>

            <div class="col-xs-1">
              <button class="btn btn-outline-primary btn-refresh" style="border: 1px solid #33cabb"><i class="mdi mdi-refresh"></i> Refresh</button>
            </div>
            <div class="col-xs-1" style="float: right;margin-right:50px">
              <a class="btn btn-label btn-primary" href="{{route('permission.create')}}"><label><i class="mdi mdi-plus"></i></label> 新增权限</a>
            </div>
          </div>
          <div class="card-body">
            <div class="dd">
              <ol class="dd-list">
                <?php echo $permissions; ?>
              </ol>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="alert_info" class="alert alert-danger" role="alert" style="display: none">
    <h4>确定要删除该权限吗？</h4>
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

    //打开或关闭权限
    $('button.show-dd-list').click(function() {
      var ol = $(this).siblings('ol').css('display');
      if (ol == 'block') {
        $(this).siblings('ol').css({
          'display': 'none'
        })
      } else {
        $(this).siblings('ol').css({
          'display': 'block'
        })
      }
    });
    //关闭权限
    $('button.btn-collapse').click(function() {
      $('li.dd-item ol.dd-list').css({
        'display': 'none'
      })
    })
    //打开权限
    $('button.btn-expand').click(function() {
      $('li.dd-item ol.dd-list').css({
        'display': 'block'
      })
    })
    //刷新页面
    $('button.btn-refresh').click(function() {
      location.reload();
    })

    $(document).on('click','.permission-delete',function(){
      var id = $(this).data('id');
      $('.btn-danger-delete').attr('data-id',id);
      $('#alert_info').css('display','block');
    })
    $('.btn-cancel').click(function() {
      $('#alert_info').css('display', 'none');
    });
    $('.btn-danger-delete').click(function() {
      var id = $(this).data('id');
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'delete',
        url: "{{ route('permission.destroy', 'id') }}".replace(/id/, id),
        success: function(result) {
          $('#alert_info').css('display', 'none');
          if (result == 'success') {
            lightyear.notify('删除成功!', 'success', 100, 'mdi mdi-emoticon-happy', 'top', 'center', "{{ route('permission.index') }}");
          } else {
            lightyear.notify('删除失败，请稍后再试~', 'danger', 100);
          }
        }
      })
    });
  });
</script>