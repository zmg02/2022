@include('admin.mogujie.layouts.head',['title'=>'权限'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

<!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'新增权限'])
<!--End 头部信息-->

<style>
  .control-label {
    text-align: right;
  }

  .mdi-asterisk {
    color: #bd4147;
  }

  ul li,
  ol li {
    list-style-type: none;
  }

  .nav {
    width: 100%;
    /*margin:20px auto;*/

  }

  .nav p {
    display: block;
    padding-left: 10px;
    line-height: 30px;
    border: 1px solid #ebebeb;
  }

  .set,
  .setIcon {
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
    position: absolute;
    border: 1px solid #CCC;
    display: none;
    z-index: 999;
    background: white;
    padding: 0;
  }

  .nav ul li {
    display: list-item;
    text-align: -webkit-match-parent;
    line-height: 30px;
    cursor: pointer;
    padding: 6px 10px !important;
  }

  .nav ul li.dd-item:hover {
    background: #CCC;
    color: #FFF;
  }

  p {
    margin: 0;
  }

  .nav>p.set:after,
  .col-md-11>p.setIcon:after {
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
</style>

<!--页面主要内容-->
<main class="lyear-layout-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="col-xs-1">
              <h3>Create</h3>
            </div>
            <div class="col-xs-1" style="float: right;">
              <a class="btn btn-label btn-primary" href="{{ route('permission.index') }}"><label><i class="mdi mdi-keyboard-return"></i></label> List</a>
            </div>
          </div>

          <div class="card-body">
            <form action="{{ route('permission.store') }}" method="post" id="create_permission">
              @csrf
              <div class="form-body">
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Parent</span></div>
                  <div class="col-md-8">
                    <input type="hidden" id="_id" name="id">
                    <input type="hidden" name="parent_id" class="parent">
                    <div class="nav">
                      <p class="set">Parent</p>
                      <ul class="new">
                        <li class="dd-item dd3-item" data-id="0">
                          <!-- <div class="dd3-content">Parent</div> -->
                        </li>
                        <?php echo $permissionSelect; ?>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><i class="mdi mdi-asterisk"></i> <span>Slug</span></div>
                  <div class="col-md-8">
                    <input class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}" type="text" name="slug" placeholder="administrator">
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-2 control-label"><i class="mdi mdi-asterisk"></i> <span>Name</span></div>
                  <div class="col-md-8">
                    <input class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" type="text" name="name" placeholder="Administrator">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>HTTP Method</span></div>
                  <div class="col-md-8">
                    <input class="form-control" value="{{old('http_method')}}" type="text" name="http_method" placeholder="HTTP method">
                    <span class="help-block">
                      <i class="mdi mdi-calendar-question"></i>&nbsp;All methods if empty
                    </span>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>HTTP Path</span></div>
                  <div class="col-md-8">
                    <input class="form-control" value="{{old('http_path')}}" type="text" name="http_path" placeholder="HTTP path">
                  </div>
                </div>

              </div>

              <div class="form-footer row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-9">
                  <button class="btn btn-default btn-w-md btn-reset" type="button">重 置</button>
                  <button class="btn btn-primary btn-w-md" type="submit">提 交</button>
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

<script>
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
    //重置
    $('.btn-reset').click(function() {
      $(':input', '#create_permission')
        .not(':button,:submit,:reset,:hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
      $('.set').html('');
    })
  })
</script>