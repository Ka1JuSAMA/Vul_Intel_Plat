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
            <h1 class="page-title">Auto Play</h1>
            <p class="lead">A slideshow component for cycling through elements—images or slides of text—like a carousel. Read the <a href="https://getbootstrap.com/docs/5.1/components/carousel/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
            

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
<pre><code class="language-markup"><script type="script/prism-html-markup">New Feeds</script></code></pre>
              <button type="button" class="btn btn-clipboard" data-clipboard-target="#slidesOnly">copy</button>
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
                        What is Lorem Ipsum?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                        <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where does it come from?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqAccordion">
                      <div class="accordion-body">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
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
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
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
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
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