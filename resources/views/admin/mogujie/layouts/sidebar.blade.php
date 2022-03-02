<aside class="lyear-layout-sidebar">
  <!-- logo -->
  <div id="logo" class="sidebar-header">
    <a href="{{ url('admin/mogujie') }}"><img src="/img/mogujie/admin/logo-sidebar.png" title="LightYear" alt="LightYear" /></a>
  </div>
  <div class="lyear-layout-sidebar-scroll">

    <nav class="sidebar-main">
      <ul class="nav nav-drawer">
        <?php echo $menus;?>
      </ul>
    </nav>

    <div class="sidebar-footer">
      <p class="copyright">Copyright &copy; 2019. <a target="_blank" href="http://lyear.itshubao.com">IT书包</a> All rights reserved.</p>
    </div>
  </div>
</aside>
