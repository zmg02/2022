</div>
</div>

<script type="text/javascript" src="/js/mogujie/admin/jquery.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/jconfirm/jquery-confirm.min.js"></script>
<script type="text/javascript" src="/js/mogujie/admin/main.min.js"></script>
<script>
  //后台菜单
  $(function() {
    $('li.active').children('a').addClass('a-active');
    $('li.active').parents('li').addClass('open active');
  });
</script>
<!-- 后台成功信息显示 -->
@if (Session::has('message'))
<script type="text/javascript">
  $(function() {
    var url = "{{Session::get('url')}}"
    var loginTime = parseInt($('.loginTime').text());
    var time = setInterval(function() {
      loginTime = loginTime - 1;
      $('.loginTime').text(loginTime);
      if (loginTime == 0) {
        clearInterval(time);  //关闭定时
        window.location.href = url;
      }
    }, 1000);
  })
</script>
@endif
</body>
</html>