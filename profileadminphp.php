@extends('admin.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

</head>
<body>
	

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Navbar-->
		<div class="card mt-20 mb-xl-10">
			<!--begin::Card header-->
			<div class="card-header border-0 cursor-pointer" >
				<div class="card-title m-0">
					<h3 class="fw-bold m-0">Change Password</h3>
				</div>
			</div>
			<!--end::Card header-->
			<div class="card-body">
				<form>
				<div class="row">
 				    <div class="col-lg-4 mb-4">
                      <div class="form-group ">
                        <input type="password" id="form6Example1" class="form-control"  placeholder="Current password" required/>
                      
                      </div>
                     </div>
 				    <div class="col-lg-4 mb-4">
                      <div class="form-group ">
                        <input type="password" id="form6Example1" class="form-control"   placeholder="New password" required/>
                      
                      </div>
                     </div>
 				     <div class="col-lg-4">
                      <div class="form-group ">
                        <input type="password" id="form6Example1" class="form-control"   placeholder="Confrim password" required/>
                      
                      </div>
                      </div> 
					
				
				      <div class="modal-footer  mt-5">
				      <button type="submit" class="btn btn-primary  mt-5 me-2">Save changes</button>
				      </div>


				</div>              
               </form>
			</div>
			
		</div>
        <!--end::Navbar-->
    
    </div>
    <!--end::Post-->
	<!-- JavaScript Bundle with Popper -->
</div>
<!--end::Container-->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


@endsection