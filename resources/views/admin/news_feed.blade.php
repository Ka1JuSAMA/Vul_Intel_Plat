@extends('admin.admin_dashboard')
@section('admin')

<!-- core:css -->
  <link rel="stylesheet" href="{{ asset(  'backend/assets/vendors/core/core.css' ) }}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset(  'backend/assets/vendors/prismjs/themes/prism.css' ) }}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset(  'backend/assets/fonts/feather-font/css/iconfont.css' ) }}">
  <link rel="stylesheet" href="{{ asset(  'backend/assets/vendors/flag-icon-css/css/flag-icon.min.css' ) }}">
  <!-- endinject -->

  <!-- Layout styles -->  
  <link rel="stylesheet" href="{{ asset(  'backend/assets/css/demo2/style.css' ) }}">
  <!-- End layout styles -->

  <link rel="stylesheet" href="{{ asset(  'backend/assets/images/favicon.png' ) }}">



      <div class="page-content">
        <div class="row">
          <div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
            <h1 class="page-title">Cyber News</h1>            

            <div class="example">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://images.7news.com.au/publication/C-12496133/293b4c0c9b1d807e9ed2685201ea81f6038f9d9d-4x3-x500y0w1500h1125.png?imwidth=1100&impolicy=sevennews_v2" width="500" height="350" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://akm-img-a-in.tosshub.com/sites/btmt/images/stories//February2013/cyberattack-anatomy-small_012813031640.jpg" width="500" height="350" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.coderedcomms.com/app/uploads/2023/09/Top-Cybersecurity-News-From-July-2023-1.png" width="500" height="350" alt="...">
                  </div>
                </div>
              </div>
            </div>
            
            <figure class="highlight" id="slidesOnly">
<pre><code class="language-markup"><script type="script/prism-html-markup"></script></code></pre>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec posuere sem. Aliquam ligula augue, ultricies fringilla luctus at, mollis eget purus. Pellentesque eu nulla eu leo iaculis fringilla at at tellus. Sed id nunc sodales, blandit velit eu, pretium nunc. Maecenas eu faucibus sapien. Cras elementum facilisis risus, nec consectetur tortor tempus a. Duis velit velit, feugiat quis sagittis sed, ultricies pulvinar sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam fringilla rhoncus ligula, a lacinia orci dapibus eget. Phasellus mauris est, consequat non ultricies in, euismod mattis quam. Curabitur vel vulputate nunc.

Vestibulum interdum enim a justo iaculis iaculis. Aliquam eu elit eu lectus luctus commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus quis massa ut iaculis. Phasellus rhoncus mauris in augue egestas viverra. Aenean in mattis magna. Vivamus in sollicitudin lacus. Pellentesque interdum ex a dui tincidunt facilisis. Proin semper nisl nec mollis tincidunt. Quisque elementum mauris vel interdum ultricies. Nullam gravida vehicula tortor quis rhoncus. Nulla et iaculis risus. Integer volutpat mi vitae porttitor pulvinar. Integer vitae lectus interdum magna convallis venenatis.</p>
<a href="#" class="btn btn-primary">Read More</a>
</figure>


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Lorem Ipsum</h6>
                <div class="accordion" id="FaqAccordion">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Why is Cyber Security inmportant?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                        <strong>Lorem Ipsum</strong> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Morbi et dui convallis, iaculis nisl et, pellentesque velit. Nam pharetra lacus tincidunt lacinia dapibus. Morbi rhoncus imperdiet libero, mollis molestie lectus bibendum eget. Nam mollis, risus cursus vestibulum molestie, lorem elit egestas libero, sed auctor augue lectus at dui. Nulla enim lorem, commodo nec nunc et, accumsan blandit sem.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What can we do to protect it?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                      Sed dapibus lorem id dui tincidunt, pharetra consectetur dui consequat. Morbi quis congue lacus. Aenean nec fringilla nisi. Pellentesque in quam in tellus faucibus egestas. Curabitur id lectus orci. Praesent laoreet interdum augue suscipit suscipit. Aenean et vehicula mauris. Suspendisse potenti. Suspendisse porttitor, nisl sed sollicitudin dignissim, arcu metus scelerisque felis, in porta mi lacus et risus. Aenean commodo nibh augue, nec porta diam consectetur nec. Sed ornare dictum suscipit. Phasellus tempor interdum feugiat. Vestibulum in vestibulum ligula. Morbi quis orci et felis luctus luctus eget vel orci. Maecenas lacinia orci magna, in sagittis risus pulvinar nec. Nullam hendrerit nibh tempus elit lobortis auctor.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why do we use it?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                      Vestibulum lobortis dolor lorem, malesuada sagittis eros feugiat vel. Nam sed auctor mauris, sit amet ullamcorper tellus. Pellentesque lacinia, lacus sit amet maximus pretium, ante urna semper sapien, vitae porttitor justo eros at mi. Aenean lobortis quis dui non ullamcorper. Aenean vestibulum laoreet consequat. Fusce ac nunc sapien. Nullam tristique est eu dolor hendrerit, at volutpat lectus varius. Pellentesque imperdiet eleifend euismod. Vivamus non tristique diam. Nunc a urna quis odio suscipit egestas. Curabitur ac malesuada nibh. Nam id magna ut leo euismod molestie. Fusce posuere, lectus ut aliquam faucibus, massa risus malesuada purus, sed placerat libero enim in lacus. Sed ac ultricies lacus.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Where can I get some?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec posuere sem. Aliquam ligula augue, ultricies fringilla luctus at, mollis eget purus. Pellentesque eu nulla eu leo iaculis fringilla at at tellus. Sed id nunc sodales, blandit velit eu, pretium nunc. Maecenas eu faucibus sapien. Cras elementum facilisis risus, nec consectetur tortor tempus a. Duis velit velit, feugiat quis sagittis sed, ultricies pulvinar sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam fringilla rhoncus ligula, a lacinia orci dapibus eget. Phasellus mauris est, consequat non ultricies in, euismod mattis quam. Curabitur vel vulputate nunc.
                      </div>
                    </div>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



<!-- core:js -->
  <script src="{{ asset(  'backend/assets/vendors/core/core.js' ) }}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="{{ asset(  'backend/assets/vendors/prismjs/prism.js' ) }}"></script>
  <script src="{{ asset(  'backend/assets/vendors/clipboard/clipboard.min.js' ) }}"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{ asset(  'backend/assets/vendors/feather-icons/feather.min.js' ) }}"></script>
  <script src="{{ asset(  'backend/assets/js/template.js' ) }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <!-- End custom js for this page -->


@endsection