@include('admin.mogujie.layouts.head',['title'=>'菜单'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'菜单'])
<!--End 头部信息-->

<!--页面主要内容-->
<style>
  .control-label {
    text-align: right;
  }
  ul li,ol li {
    list-style-type: none;
  }

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

  .dd { position: relative; display: block; margin: 10px; padding: 0; list-style: none; font-size: 13px; line-height: 20px; }

  .dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
  .dd-list .dd-list { padding-left: 30px; }
  .dd-collapsed .dd-list { display: none; }

  .dd-item,
  .dd-empty,
  .dd-placeholder { display: block; position: relative; margin: 0; padding: 0;}

  .dd-handle {
    display: block;

    margin: 1px 0;
    padding: 8px 10px;
    color: #333;
    text-decoration: none;
    border: 1px solid #ddd;
    background: #fff;
  }
  .dd-handle:hover { color: var(--primary); background: #fff; }

  .dd-item > button { display: block; position: relative; right: 40px; top: 5px; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; border: 0; background: transparent; font-size: 20px; line-height: 1; text-align: center; font-weight: bold; }
  
  span.dd-nodrag i{
    font-size: 18px;
  }
  .progress {
    display: none;position: fixed;top: 0;right: 0;bottom: 0;left: 0;z-index: 1052;
  }

</style>
<main class="lyear-layout-content">
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      <span class="sr-only">15% Complete</span>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
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

            <div class="col-xs-1" style="margin-right:3px">
              <button class="btn btn-outline-primary btn-refresh" style="border: 1px solid #33cabb"><i class="mdi mdi-refresh"></i> Refresh</button>
            </div>
            <div class="col-xs-1" style="float: right;margin-right:50px">
              <a class="btn btn-label btn-primary" href="{{route('menu.create')}}"><label><i class="mdi mdi-plus"></i></label> 新增菜单</a>
            </div>
          </div>
          <div class="card-body">
            <div class="dd">
              <ol class="dd-list">
                <?php echo $menusArr;?>
              </ol>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div id="alert_info" class="alert alert-danger" role="alert" style="display: none">
      <h4>确定要删除该菜单吗？</h4>
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
    //打开或关闭菜单
    $('button.show-dd-list').click(function (){
      var ol = $(this).siblings('ol').css('display');
      if (ol == 'block') {
        $(this).siblings('ol').css({'display':'none'})
      } else {
        $(this).siblings('ol').css({'display':'block'})
      }
    });
    //关闭菜单
    $('button.btn-collapse').click(function () {
      $('li.dd-item ol.dd-list').css({'display':'none'})
    })
    //打开菜单
    $('button.btn-expand').click(function () {
      $('li.dd-item ol.dd-list').css({'display':'block'})
    })
    //刷新页面
    $('button.btn-refresh').click(function(){
      location.reload();
    })

    //删除菜单（假删）
    $('a.menu-delete').click(function(){
      var id = $(this).data('id');
      $('.btn-danger-delete').attr('data-id',id);
      $('#alert_info').css('display', 'block');
    });
    $('.btn-cancel').click(function() {
      $('#alert_info').css('display', 'none');
    });

    $('.btn-danger-delete').click(function() {
      var id = $(this).data('id');

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'delete',
        url: "{{ route('menu.destroy', 'id') }}".replace(/id/,id),
        success:function(result){
          $('#alert_info').css('display', 'none');
          if (result == 'success') {
            lightyear.notify('删除成功，页面即将自动跳转~', 'success', 100, 'mdi mdi-emoticon-happy', 'top', 'center' , "{{ route('menu.index') }}");
          } else {
            lightyear.notify('删除失败，请稍后再试~', 'danger', 100);
          }
        },
        error:function(result){
          lightyear.notify('服务器错误，请稍后再试~', 'danger', 100);
        }
      });
      $.ajax();
    });

  })
function showProgress() {
  var percentage = 0;
  var interval = setInterval(function () {
    if (percentage < 10000) {
      percentage+=60;
      var widthTemp = (percentage / 100).toFixed(1) + '%';

      $('.progress').css({'display':'block'});
      $('.progress').css('width', widthTemp);
      $('.sr-only').text(widthTemp);
    } else {
      clearInterval(interval);

    }
  }, 1);
}

  function hideProgress() {
    $('.progress').css({'display':'none'});
  }


</script>

