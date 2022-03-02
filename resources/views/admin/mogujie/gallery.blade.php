@include('admin.mogujie.layouts.head',['title'=>'示例页面 - 图库列表'])

<!--左侧导航-->
@include('admin.mogujie.layouts.sidebar')
<!--End 左侧导航-->

    <!--头部信息-->
@include('admin.mogujie.layouts.header',['title'=>'示例页面 - 图库列表'])
    <!--End 头部信息-->

    <!--页面主要内容-->
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                <div class="masonry-grid" data-provide="photoswipe">

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/1.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/5.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/2.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/3.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/4.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/9.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/6.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/7.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/8.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/10.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/11.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/13.jpg" alt="The selected child description">
                  </a>

                  <a class="masonry-item" href="#">
                    <img src="/img/mogujie/admin/gallery/14.jpg" alt="The selected child description">
                  </a>

                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <!--End 页面主要内容-->
@include('admin.mogujie.layouts.foot')
