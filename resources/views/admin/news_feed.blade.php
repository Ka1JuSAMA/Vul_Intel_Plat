@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">

 <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">News Feed</a></li>
          </ol>
  </nav>

 <div class="row">
  <div class="col-md-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-body">
            <h6 class="card-title">News</h6>
                <div class="owl-carousel owl-theme owl-auto-play">
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiC0yPIwP5bfBuSCE9ftxOKB14Q9wDETTDMIwGc8Lq57CS3DzLm2IIfg6u6aUH6oPsKw4&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzabAbcTvabrFrjSmXXzg2OXpMJNEUx2nU4V-GES1GxeMISCJHOFDg19omHZMuLCmTW4A&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT6rWjCqYHB1m9ItYcB0X5JE7-VaJdAavVVBeTioesRqjMPe6Da_0v8LP7j7kvdf-DqhI&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5CRa2G98bTNEk-SYTbgWRNjcBk_w_0TEeGrBb6htHMx64OPWlNPAnGSI_t-FSOw3Xnd4&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAnqZyn0qvbNfJURUADT6zTaJGdIJ-SnzBlLQq3bWzOXWISRGbDo0lVvXbOqzoB1K1VgM&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://static.toiimg.com/thumb/msid-82361211,width-400,resizemode-4/82361211.jpg" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://s.france24.com/media/display/243ebbc8-7fbd-11ee-997d-005056a97e36/w:480/p:16x9/capture-179492563654e15529b5881.23962314.jpg" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3rJywMU3qc5wFks0g6oGYEKK5McSoeaS5ev5Yhgy8iALwn5Qpenz70MfPfxYbeRQo4E0&usqp=CAU" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://akm-img-a-in.tosshub.com/sites/btmt/images/stories//February2013/cyberattack-anatomy-small_012813031640.jpg" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://news-cdn.softpedia.com/images/news2/Russian-Hackers-Allegedly-Behind-White-House-Network-Cyber-Attack-477916-2.jpg" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://images.7news.com.au/publication/C-12496133/293b4c0c9b1d807e9ed2685201ea81f6038f9d9d-4x3-x500y0w1500h1125.png?imwidth=1100&impolicy=sevennews_v2" width="265" height="167" alt="item-image">
                  </div>
                  <div class="item">
                    <img src="https://www.coderedcomms.com/app/uploads/2023/09/Top-Cybersecurity-News-From-July-2023-1.png" width="265" height="167" alt="item-image">
                  </div>
                </div>
            </div>
      </div>
   </div>


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

@endsection