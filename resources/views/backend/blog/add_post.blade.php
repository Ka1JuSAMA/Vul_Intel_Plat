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

                        <h6 class="card-title">Add New Post</h6>

                        <form id="myForm" method="POST" action="{{ route('store.post') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
            
                            <div class="form-group mb-3">
                                <label for="exampleInputUsername1" class="form-label">Post Title</label>
                                <input type="text" name="post_name" class="form-control" id="post_name" autocomplete="off">
                                
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputUsername1" class="form-label">Post Content</label>
                                
                                <textarea class="form-control" type="text" name="post_type" id="post_type" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <input class="form-control" type="file" name="photo" id="photo">                            
                            </div>
                            
                            <button type="submit" class="btn btn-primary me-2">Post</button>
                            
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

            
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
              post_name: {
                    required : true,
                }, 
              post_type: {
                    required : true,
                }, 
                
            },
            messages :{
              post_name: {
                    required : 'Please Enter post name',
                }, 
              post_type: {
                    required : 'Please Enter post type',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>      


@endsection