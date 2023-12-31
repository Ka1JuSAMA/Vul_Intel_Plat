@extends('admin.admin_dashboard')
@section('admin')

  	<!-- Plugin css for calendar -->
	<link rel="stylesheet" href="{{ asset(  'backend/assets/vendors/fullcalendar/main.min.css' ) }}">
	<!-- End plugin css for calendar -->

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
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3 d-none d-md-block">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title mb-4">Full calendar</h6>
                    <div id='external-events' class='external-events'>
                      <h6 class="mb-2 text-muted">Draggable Events</h6>
                      <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Assignment 1 Due</div>
                      </div>
                      <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Presentation Due</div>
                      </div>
                      <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Laravel Project Start</div>
                      </div>
                      <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>Client Meeting</div>
                      </div>
                      <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                        <div class='fc-event-main'>End of Trimester</div>
                      </div>
                    </div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-9">
								<div class="card">
									<div class="card-body">
										<div id='fullcalendar'></div>
									</div>
									</div>
							</div>
						</div>
					</div>
				</div>

				<div id="fullCalModal" class="modal fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 id="modalTitle1" class="modal-title"></h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
							</div>
							<div id="modalBody1" class="modal-body"></div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button class="btn btn-primary">Event Page</button>
							</div>
						</div>
					</div>
				</div>

				<div id="createEventModal" class="modal fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 id="modalTitle2" class="modal-title">Add event</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
							</div>
							<div id="modalBody2" class="modal-body">
								<form>
									<div class="mb-3">
										<label for="formGroupExampleInput" class="form-label">Example label</label>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
									</div>
									<div class="mb-3">
										<label for="formGroupExampleInput2" class="form-label">Another label</label>
										<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button class="btn btn-primary">Add</button>
							</div>
						</div>
					</div>
				</div>

			</div>

	<!-- core:js calendar-->
	<script src="{{ asset('backend/assets/vendors/core/core.js' ) }}"></script>
	<!-- endinject -->

		<!-- Plugin js for calendar -->
	<script src="{{ asset('backend/assets/vendors/moment/moment.min.js' ) }}"></script>
	<script src="{{ asset('backend/assets/vendors/fullcalendar/main.min.js' ) }}"></script>
	<!-- End plugin js for calendar -->

	<!-- inject:js calendar -->
	<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js' ) }}"></script>
	<script src="{{ asset('backend/assets/js/template.js' ) }}"></script>
	<!-- endinject -->

	<!-- Custom js for calendar -->
	<script src="{{ asset('backend/assets/js/fullcalendar.js' ) }}"></script>
	<!-- End custom js for calendar -->

@endsection