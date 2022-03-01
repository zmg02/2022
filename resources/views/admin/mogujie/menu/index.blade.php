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
              <?php echo $menusArr;?>
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
            <form action="{{ route('menu.post') }}" method="post">
              <div class="form-body">
                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Parent</span></div>
                  <div class="col-md-9">
                    <input type="hidden" id="parent" name="parent_id">
                    <div class="nav">
                      <p class="set">Parent</p>
                      <ul class="new">
                        <li class="dd-item dd3-item" data-id="0"><div class="dd-handle dd3-handle"> </div><div class="dd3-content">Root</div></li>
                        <?php echo $menusHtml;?>
                      </ul>
                    </div>

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-2 control-label"><span>Title</span></div>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="title" placeholder="Title">
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
                    <input class="form-control" type="number" name="order" placeholder="Order">
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
                  <button class="btn btn-default btn-w-md" type="button">重 置</button>
                  <button class="btn btn-primary btn-w-md" type="submit">提 交</button>
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

</script>

