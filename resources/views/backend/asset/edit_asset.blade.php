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

                        <h6 class="card-title">Edit Asset</h6>

                        <form method="POST" action="{{ route('update.asset') }}" class="forms-sample">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{ $assets->id }}">
                            
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Asset Name</label>
                                <input type="text" name="asset_name" class="form-control @error('asset_name') is-invalid @enderror " value="{{ $assets->asset_name }}" id="asset_name" autocomplete="off">
                                @error('asset_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Asset Type</label>
                                <input type="text" name="asset_type" class="form-control @error('asset_type') is-invalid @enderror " value="{{ $assets->asset_type }}" id="asset_type" autocomplete="off">
                                @error('asset_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Asset Brand</label>
                                <input type="text" name="asset_brand" class="form-control @error('asset_brand') is-invalid @enderror " value="{{ $assets->asset_brand }}" id="asset_brand" autocomplete="off">
                                @error('asset_brand')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Asset Status</label>
                                <input type="text" name="asset_status" class="form-control @error('asset_status') is-invalid @enderror " value="{{ $assets->asset_status }}" id="asset_status" autocomplete="off">
                                @error('asset_status')
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