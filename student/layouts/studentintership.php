
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Reviwe Modal</title>
    <style>
    
.star-rating form {
    display: none;
}
.star-rating .thanks-msg {
    display: none;
    font-size: 20px;
    margin: 40px auto;
    color: #4caf50;
    background-color: rgba(76, 175, 80, 0.1411764705882353);
    padding: 8px 20px;
    border-left: 3px solid #4caf50;
    border-radius: 20px;
}
.star-rating input {
    display: none;
}
.star-rating {
 
    display: table;
    width: 350px;
}
.star-rating label {
    padding: 10px;
  
    font-size: 16px;
    color: #eee;
}
.star-rating input:not(:checked) ~ label:hover,
.star-rating input:not(:checked) ~ label:hover ~ label {
    color: #ffc107;
}
.star-rating input:checked ~ label {
    color: #ffc107;
}
.star-rating form .rating-reaction:before {
    width: 100%;
    float: left;
    color: #ffc107;
}
.star-rating #rating-1:checked ~ form .rating-reaction:before {
    /* content: "I hate it"; */
}
.star-rating #rating-2:checked ~ form .rating-reaction:before {
    /* content: "I don't like it"; */
}
.star-rating #rating-3:checked ~ form .rating-reaction:before {
    content: "It is good";
}
.star-rating #rating-4:checked ~ form .rating-reaction:before {
    content: "I like it";
}
.star-rating #rating-5:checked ~ form .rating-reaction:before {
    content: "I love it";
}
.star-rating input:checked ~ form {
    border-top: 1px solid #ddd;
    width: 100%;
    padding-top: 15px;
    margin-top: 15px;
    display: inline-block;
}
.star-rating form .rating-reaction {
    font-size: 24px;
    float: left;
    text-transform: capitalize;
}
.star-rating form .submit-rating {
    border: none;
    outline: none;
    background: #795548;
    color: #ffc107;
    font-size: 18px;
    border-radius: 4px;
    padding: 5px 15px;
    cursor: pointer;
    float: right;
}
form .submit-rating:hover {
    background-color: #333;
}
    </style>
</head>
<body>
    

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
 		<!--begin::Post-->
	<div class="content flex-row-fluid" id="kt_content">
							
		<div class="row gy-5 g-xl-10">
								
			<!--begin::Col-->
			<div class="col-xl-12 mb-5 mb-xl-10">

				<!--begin::Table Widget 4-->
				<div class="card card-flush h-xl-100">

					<!--begin::Card header-->
					<div class="card-header pt-7">

						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bold text-gray-800">Students in Intership </span>
							
						</h3>
						<!--end::Title-->
						<!--begin::Actions-->
						<div class="card-toolbar">
							<!--begin::Filters-->
							<div class="d-flex flex-stack flex-wrap gap-4">
								
							
								<!--begin::Search-->
								<div class="position-relative my-1">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<input type="text"  class="form-control w-150px fs-7 ps-12" placeholder="Search"  id="myInput" onkeyup="myFunction()" />
                                    <div id="not-found"></div>
								</div>
								<!--end::Search-->
							</div>
							<!--begin::Filters-->
						</div>
						<!--end::Actions-->
				    </div>
					<!--end::Card header-->
					<!--begin::Card body-->
				    <div class="card-body pt-2">
					   <div class="table-responsive">
                            <table class="table table-striped gy-7 gs-7"  id="myTable">
                                 <thead>
                                  <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                  <th>ID</th>

                                   <th>Start Date</th>
                                   <th>End Date</th>
                                   <th>Job Position</th>
                                   <th>Student Code<th>      

					      	

                                    </tr>
                                 </thead>
                                 <tbody>
                                  <tr>
                                  <td>Tiger Nixon</td>
                                   <td>10/20/2022</td>
                                   <td>11/20/2022</td>
                                   <td>Waiter</td>
                                   <td>3033</td>
                                   <td><a href="#" class="btn btn-danger "  data-bs-toggle="modal" data-bs-target="#reviewmodal">Review</a></td>
                                   <td><i class="bi bi-person-fill fs-2x"></i></td> 
                                    </td>	
                                    </tr>			           
                       
                                  </tbody>
                            </table>            
                         </div>
                    </div>  
                    <div class="modal fade" tabindex="-1" id="reviewmodal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Review Student</h3>                    

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-1">X</span>
                                    </div>
                                    <!--end::Close-->
                                </div>                    
                                 <form>
                                <div class="modal-body">
                                  
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6"><label for=""   class=" form-label mt-5 fw-bold" >Communication</label></div>
                                                     <div class="col-md-6">
                                                        
                                                        
                                                        
                                                        <div class="star-rating">
                                                            <div class="star-input">
                                                                <input type="radio" name="rating" id="rating-5">
                                                                 <label for="rating-5" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-4">
                                                                 <label for="rating-4" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-3">
                                                                 <label for="rating-3" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-2">
                                                                 <label for="rating-2" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-1">
                                                                 <label for="rating-1" class="fas fa-star"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-6"><label for=""   class=" form-label mt-5 fw-bold" >Commitment</label></div>
                                                     <div class="col-md-6">
                                                        
                                                        
                                                        
                                                        <div class="star-rating">
                                                            <div class="star-input">
                                                                <input type="radio" name="rating" id="rating-5">
                                                                 <label for="rating-5" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-4">
                                                                 <label for="rating-4" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-3">
                                                                 <label for="rating-3" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-2">
                                                                 <label for="rating-2" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-1">
                                                                 <label for="rating-1" class="fas fa-star"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-6"><label for=""   class=" form-label mt-5 fw-bold" >Correctnees</label></div>
                                                     <div class="col-md-6">
                                                        
                                                        
                                                        
                                                        <div class="star-rating">
                                                            <div class="star-input">
                                                                <input type="radio" name="rating" id="rating-5">
                                                                 <label for="rating-5" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-4">
                                                                 <label for="rating-4" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-3">
                                                                 <label for="rating-3" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-2">
                                                                 <label for="rating-2" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-1">
                                                                 <label for="rating-1" class="fas fa-star"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-6"><label for=""   class=" form-label mt-5 fw-bold" >Ethics</label></div>
                                                     <div class="col-md-6">
                                                        
                                                        
                                                        
                                                        <div class="star-rating">
                                                            <div class="star-input">
                                                                <input type="radio" name="rating" id="rating-5">
                                                                 <label for="rating-5" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-4">
                                                                 <label for="rating-4" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-3">
                                                                 <label for="rating-3" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-2">
                                                                 <label for="rating-2" class="fas fa-star"></label>
                                                                 <input type="radio" name="rating" id="rating-1">
                                                                 <label for="rating-1" class="fas fa-star"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                       <label for="commentreviwe" class="form-label"></label>
                                                       <textarea class="form-control" id="commentreviwe" rows="2"   data-kt-autosize="true" placeholder= "Comment"></textarea>
                                                     </div>
    
     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>                    
                               
                                <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-primary">Reviwe</button>
                                </div>
                              <form>
                            </div>
                        </div>
                    </div>  
         </div> 

    </div>

</div>

<script>

</script>
                       
</body>
</html>                  
                      
                        


         
 


              
                           
      
        

           
   

                          										
							
					




					
  
</body>
</html>