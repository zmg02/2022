@include('admin.mogujie.layouts.head',['title'=>'菜单列表'])

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

  .nav {
    width: 100%;
    /*margin:20px auto;*/

  }
  .nav p {
    display:block;
    padding-left:10px;
    line-height:30px;
    border:1px solid #ebebeb;
  }
  .set,.setIcon {
    width: 100%;
    height: 38px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    padding: 5px 12px;
    line-height: inherit;
    -webkit-transition: 0.2s linear;
    transition: 0.2s linear;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .new {
    /*width:198px;*/
    width: 92%;
    max-height: 200px;
    overflow-y: auto;
    position:absolute;
    border:1px solid #CCC;
    display:none;
    z-index: 999;
    background: white;
    padding: 0;
  }

  .nav ul li {
    display: list-item;
    text-align: -webkit-match-parent;
    line-height:30px;
    cursor: pointer;
    padding: 6px 10px!important;
  }
  .nav ul li.dd-item:hover {
    background:#CCC;
    color:#FFF;
  }
  p{
    margin: 0;
  }
  .nav > p.set:after,.col-md-11 > p.setIcon:after {
    transform: rotate(90deg);
    position: absolute;
    right: 16px;
    font-family: 'Material Design Icons';
    font-size: 20px;
    line-height: 1.55;
    content: '\f142';
    -webkit-transition: -webkit-transform 0.3s linear;
    transition: -webkit-transform 0.3s linear;
    transition: transform 0.3s linear;
    transition: transform 0.3s linear, -webkit-transform 0.3s linear;
  }

  div p.p-input{
    display: inline-block;
  }
  div p.p-input p.icon{
    display: block;
    width: 100%;
    height: 38px;
  }

  .Icons {
    width: 91%;
    max-height: 200px;
    overflow-y: auto;
    position:absolute;
    border:1px solid #CCC;
    display:none;
    z-index: 999;
    background: white;
    padding: 12px 0 0 12px;
  }
  .Icons a{
    float: left;
    width: 50px;
    height: 50px;
    padding: 12px;
    margin: 0 12px 12px 0;
    text-align: center;
    cursor: pointer;
    border-radius: 3px;
    font-size: 20px;
    box-shadow: 0 0 0 1px #ddd;
    color: inherit;

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

</style>
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <div>
              <div class="btn-group" style="margin-right:3px">
                <button class="btn btn-primary btn-expand">
                  <i class="mdi mdi-plus-circle-outline"></i>  Expand
                </button>
                <button class="btn btn-primary btn-collapse">
                  <i class="mdi mdi-minus-circle-outline"></i>  Collapse
                </button>
              </div>


              <div class="btn-group" style="margin-right:3px">
                <button class="btn btn-outline-primary btn-refresh" style="border: 1px solid #33cabb"><i class="mdi mdi-refresh"></i> Refresh</button>
              </div>

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

      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="box-title">New</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('menu') }}" method="post">
              @csrf
              <div class="form-body">
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Parent</span></div>
                  <div class="col-md-9">
                    <input type="hidden" id="parent" name="parent_id" class="@error('parent_id') is-invalid @enderror">
                    <div class="nav">
                      <p class="set">Parent</p>
                      <ul class="new">
                        <li class="dd-item dd3-item" data-id="0"><div class="dd-handle dd3-handle"> </div><div class="dd3-content">Root</div></li>
                        <?php echo $menusHtml;?>
                      </ul>
                    </div>
                    @error('parent_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Title</span></div>
                  <div class="col-md-9">
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Icon</span></div>
                  <div class="col-md-9">
                    <input type="hidden" id="icon" name="icon">
                    <div class="nav">
                      <div class="row">
                        <div class="col-md-1">
                          <p class="p-input icon" style="width: 38px;height: 38px">
                            <i class="mdi"></i>
                          </p>
                        </div>
                        <div class="col-md-11">
                          <p class="p-input setIcon">Icon</p>

                          <div class="Icons">
                            @foreach($icons as $icon)
                              <a role="button" href="#" class="iconpicker-item" title="{{ $icon }}"><i class="mdi {{ $icon }}"></i></a>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>URI</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="uri" placeholder="URI">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Order</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="number" name="order" placeholder="Order" value="0">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Roles</span></div>
                  <div class="col-md-9">
                    <select class="form-control"  style="height: 38px" name="roles_id" size="1">
                      <option value="1">Admin</option>
                      <option value="2">zmg</option>
                      <option value="3">test3</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Permission</span></div>
                  <div class="col-md-9">
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

              <div class="form-footer row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-9">
                  <input type="hidden" name="submit">
                  <button class="btn btn-default btn-w-md" type="button">重 置</button>
                  <button class="btn btn-primary btn-w-md" type="submit">提 交</button>
                </div>
              </div>
            </form>


            <h5>变更模态框内容</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">打开模态框 for @mdo</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">新消息</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">收件人：</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">消息内容：</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">发送消息</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>

</main>

<!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')

<!--消息提示-->
<script src="/js/mogujie/admin/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/lightyear.js"></script>

<script type="text/javascript">

  $(document).click(function (e) {
    var $target = $(e.target);
    //点击选择器及选择以外的地方隐藏选择器
    if (!$target.is('.set') && !$target.is('ul.new > li.dd-item')) {
      $('.new').hide();
    }
    if (!$target.is('.setIcon') && !$target.is('div.Icons > a.iconpicker-item')) {
      $(".Icons").hide();
    }
  });

  $(function() {
    //选择上级
    $(".nav p.set").click(function() {
      var ul = $(".new");
      if (ul.css("display") == "none") {
        ul.slideDown();
      } else {
        ul.slideUp();
      }
    });
    $(".set").click(function() {
      var _name = $(this).attr("name");
      if ($("[name=" + _name + "]").length > 1) {
        $("[name=" + _name + "]").removeClass("select");
        $(this).addClass("select");
      } else {
        if ($(this).hasClass("select")) {
          $(this).removeClass("select");
        } else {
          $(this).addClass("select");
        }
      }
    });
    $(".nav li.dd-item").click(function() {
      var li = $(this).text();
      var id = $(this).attr('data-id');
      $(".nav p.set").html(li);
      $('#parent').val(id);
      $(".new").hide();
      /*$(".set").css({background:'none'});*/
      $("p").removeClass("select");
    });
    //选择icon
    $(".nav p.setIcon").click(function() {
      var div = $(".Icons");
      if (div.css("display") == "none") {
        div.slideDown();
      } else {
        div.slideUp();
      }
    });
    $(".setIcon").click(function() {
      var _name = $(this).attr("name");
      if ($("[name=" + _name + "]").length > 1) {
        $("[name=" + _name + "]").removeClass("select");
        $(this).addClass("select");
      } else {
        if ($(this).hasClass("select")) {
          $(this).removeClass("select");
        } else {
          $(this).addClass("select");
        }
      }
    });
    $(".nav a.iconpicker-item").click(function() {
      var title = $(this).attr('title');
      $(".nav p.setIcon").html(title);
      $("p.icon > i").addClass(title);
      $('#icon').val(title);
      $(".Icons").hide();
      $("p").removeClass("select");
    });

  })

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

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method:'get',
      url: "{{ route('menu.delete', 'id') }}".replace(/id/,id),
      success:function(result){
        if (result == 'success') {
          lightyear.notify('删除成功，页面即将自动跳转~', 'success', 100, 'mdi mdi-emoticon-happy', 'top', 'center' , '{{ route('menu') }}');
        } else {
          lightyear.notify('删除失败，请稍后再试~', 'danger', 100);
        }
      },
      error:function(result){
        lightyear.notify('服务器错误，请稍后再试~', 'danger', 100);
      }
    });
    $.ajax();

  })

</script>

