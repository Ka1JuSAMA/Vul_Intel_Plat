@extends('admin.admin_dashboard')
@section('admin')


			<div class="page-content">
				<div class="row">
					<div class="col-xl-10 main-content ps-xl-4 pe-xl-5">
						<h1 class="page-title">Advanced Scan</h1>
						<p class="lead">A slideshow component for cycling through elements—images or slides of text—like a carousel. Read the <a href="https://getbootstrap.com/docs/5.1/components/carousel/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>


						<div class="example">
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="{{ asset('picture/advanced_scan.png') }}" class="d-block w-100" alt="...">
									</div>

								</div>
							</div>
						</div>
						<figure class="highlight" id="slidesOnly">
<pre><code class="language-markup"><script type="script/prism-html-markup">Advanced scan report</script></code></pre>
							<button type="button" class="btn btn-clipboard" data-clipboard-target="#slidesOnly">copy</button>
            </figure>
            
						<hr>


@endsection