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

                        <form id="myForm" method="POST" action="{{ route('store.context') }}" class="forms-sample">
                            @csrf
            
                            <div class="form-group mb-3">
                                <label for="exampleInputUsername1" class="form-label">Context Name</label>
                                <input type="text" name="context_name" class="form-control" id="context_name" autocomplete="off">
                                
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputUsername1" class="form-label">Context Type</label>
                                <input type="text" name="context_type" class="form-control" id="context_type" autocomplete="off">
                               
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
              context_name: {
                    required : true,
                }, 
              context_type: {
                    required : true,
                }, 
                
            },
            messages :{
              context_name: {
                    required : 'Please Enter context name',
                }, 
              context_type: {
                    required : 'Please Enter context type',
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