@extends('admin.admin_dashboard')
@section('admin')

			<div class="page-content">
				<div class="row">
					<div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
						<h1 class="page-title">Carousel</h1>
						<p class="lead">A slideshow component for cycling through elements—images or slides of text—like a carousel. Read the <a href="https://getbootstrap.com/docs/5.1/components/carousel/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
						
						<hr>
						
						<h4 id="slides-only">Slides only</h4>
						<p class="mb-3">Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images to prevent browser default image alignment.</p>
						<div class="example">
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="../../../assets/images/others/placeholder.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="../../../assets/images/others/placeholder.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="../../../assets/images/others/placeholder.jpg" class="d-block w-100" alt="...">
									</div>
								</div>
							</div>
						</div>
						<figure class="highlight" id="slidesOnly">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="..." class="d-block w-100" alt="...">
		</div>
	</div>
</div></script></code></pre>
							<button type="button" class="btn btn-clipboard" data-clipboard-target="#slidesOnly">copy</button>
            </figure>
            
						<hr>


@endsection