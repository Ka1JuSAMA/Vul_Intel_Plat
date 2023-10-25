@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

        
        <div class="row profile-body">
         
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
              
              
              <div class="card">
              <div class="card-body">

                        <h6 class="card-title">Add New Context</h6>

                        <form method="POST" action="{{ route('store.context') }}" class="forms-sample">
                            @csrf
            
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Context Name</label>
                                <input type="text" name="context_name" class="form-control @error('context_name') is-invalid @enderror " id="context_name" autocomplete="off">
                                @error('context_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Context Type</label>
                                <input type="text" name="context_type" class="form-control @error('context_type') is-invalid @enderror " id="context_type" autocomplete="off">
                                @error('context_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Add</button>
                            
                        </form>

              </div>
            </div>



              </div>
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          <div class="d-none d-xl-block col-xl-3">
            
          </div>
          <!-- right wrapper end -->
        </div>

			</div>

        


@endsection