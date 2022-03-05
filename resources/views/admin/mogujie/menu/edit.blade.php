@include('admin.mogujie.layouts.head',['title'=>'菜单'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'修改菜单'])
<!--End 头部信息-->

<link rel="stylesheet" href="/css/mogujie/admin/menu.css">

<!--页面主要内容-->
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="col-xs-1">
              <h3>Update</h3>
            </div>
            <div class="col-xs-1" style="float: right;">
              <a class="btn btn-label btn-primary" href="{{route('menu.index')}}"><label><i class="mdi mdi-keyboard-return"></i></label> List</a>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('menu.update',[$menuInfo['id']]) }}" method="post">
              @csrf
              <div class="form-body">
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Parent</span></div>
                  <div class="col-md-9">
                    <input type="hidden" name="parent_id" class="parent @error('parent_id') is-invalid @enderror" value="{{$menuInfo['parent_id']}}">
                    <div class="nav">
                      <p class="set">{{$menuInfo['parent_title']}}</p>
                      <ul class="new">
                        <li class="dd-item dd3-item" data-id="0">
                          <div class="dd3-content">Root</div>
                        </li>
                        <?php echo $menusSelect; ?>
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
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title" value="{{$menuInfo['title']}}">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Icon</span></div>
                  <div class="col-md-9">
                    <input type="hidden" id="icon" name="icon" value="{{$menuInfo['icon']}}">
                    <div class="nav">
                      <div class="row">
                        <div class="col-md-1">
                          <p class="p-input icon" style="width: 38px;height: 38px;line-height:38px;">
                            <i class="mdi {{$menuInfo['icon']}}"></i>
                          </p>
                        </div>
                        <div class="col-md-11">
                          <p class="p-input setIcon">{{$menuInfo['icon']}}</p>

                          <div class="icons">
                            <input class="form-control " type="text" name="icon_name" style="display:inline-block; width: 95%;" placeholder="icon name">
                            <i class="mdi mdi-find-replace search_icon"></i>
                            <div class="icons_show" style="margin-top: 10px;">
                              @foreach($icons as $icon)
                              <a role="button" href="#" class="iconpicker-item" title="{{ $icon }}"><i class="mdi {{ $icon }}"></i></a>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>URI</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="uri" placeholder="URI" value="{{$menuInfo['uri']}}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Order</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="number" name="order" placeholder="Order" value="{{$menuInfo['order']}}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Roles</span></div>
                  <div class="col-md-9">
                    <select class="form-control" style="height: 38px" name="roles_id" size="1">
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
                  {{method_field('put')}}
                  <button class="btn btn-default btn-w-md btn-reset" type="button">重 置</button>
                  <button class="btn btn-primary btn-w-md btn_submit" type="submit">提 交</button>
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

<script type="text/javascript">
  $(document).click(function(e) {
    var $target = $(e.target);
    //点击选择器及选择以外的地方隐藏选择器
    if (!$target.is('.set') && !$target.is('ul.new > li.dd-item')) {
      $('.new').hide();
    }

    if (!$target.is('.setIcon') && !$target.is('div.icons *')) {
      $(".icons").hide();
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
    $(".new li.dd-item").click(function() {
      var li = $(this).text();
      var id = $(this).attr('data-id');
      $(".nav p.set").html(li);
      $('.parent').val(id);
      $(".new").hide();
      /*$(".set").css({background:'none'});*/
      $("p").removeClass("select");
    });
    //选择icon
    $(".nav p.setIcon").click(function() {
      var div = $(".icons");
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

    //回车搜索图标
    $("input[name='icon_name']").keydown(function(event) {
      event = event || window.event;
      if (event.keyCode == 13) {
        $(".search_icon").click();
        return false; //回车不提交表单
      }
    });

    $(".search_icon").click(function() {
      var name = $("input[name='icon_name']").val();
      var modal = $('.icons')
      if (name == '') {
        name = 'none_search'
      }
      $.ajax({
        url: "{{ route('icon', 'name') }}".replace(/name/, name),
        success: function(result) {
          var icons = '';
          for (icon of result) {
            icons += '<a role="button" href="#" class="iconpicker-item" title="' + icon + '"><i class="mdi ' + icon + '"></i></a>'
          }
          if (icons == '') {
            icons = '未找到图标！';
          }

          modal.find('div.icons_show').html(icons);
        }
      })
    });
    $(document).on("click", ".icons a.iconpicker-item", function() {
      var title = $(this).attr('title');
      $(".nav p.setIcon").html(title);
      $("p.icon > i").addClass(title);
      $('#icon').val(title);
      $("p").removeClass("select");
    });
    //重置
    $('.btn-reset').click(function() {
      window.location.href = '{{route("menu.edit",[$menuInfo["id"]])}}';
    })

  });
</script>