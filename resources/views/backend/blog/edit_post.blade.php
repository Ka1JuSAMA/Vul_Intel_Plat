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

                        <h6 class="card-title">Edit Post</h6>

                        <form method="POST" action="{{ route('update.post') }}" class="forms-sample">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{ $posts->id }}">
                            
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Post Title</label>
                                <input type="text" name="post_name" class="form-control @error('post_name') is-invalid @enderror " value="{{ $posts->post_name }}" id="post_name" autocomplete="off">
                                @error('post_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Post Content</label>
                                <textarea class="form-control" type="text" name="post_type" class="form-control" id="post_type" rows="5">{{ $posts->post_type }}</textarea>
                                @error('post_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <button type="submit" class="btn btn-primary me-2">Update</button>
                            
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