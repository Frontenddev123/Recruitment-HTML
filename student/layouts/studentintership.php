
  

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
                <!-- Modal -->
                <div class="modal fade" id="reviewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered  modal-xl">

                        <div class="modal-content">

                            <div class="modal-header">

                                 <h5 class="modal-title" id="exampleModalLabel">Review Student</h5>

                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>

                             <div class="modal-body"> 
                                 <div class="container">

                                     <div class="row">                                

                                         <div class="col-md-12">                                

                                            <div class="row">                                

                                                 <div class="col-md-6">                                

                                                     <p>Communication</p>
                                                     <hr>
                                                 </div>                                

                                                 <div class="col-md-6">
                                                            
                                                   <div class="rating ">
                                                         <!--begin::Reset rating-->
                                                         <label class="  fw-bold btn-sm rating-label me-3" for="kt_rating_input_0" >
                                                             
                                                         </label>
                                                         <input class="rating-input" name="rating" value="0" checked type="radio" id="kt_rating_input_0"/>
                                                         <!--end::Reset rating-->                                
                                                          <p class="star1"> 
                                                         <!--begin::Star 1-->
                                                         <label class="rating-label" for="kt_rating_input_1" class="pa-8">
                                                             <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                                                              </svg></span>
                                                         </label>
                                                         <input class="rating-input" name="rating" value="1" type="radio" id="kt_rating_input_1"/>
                                                         <!--end::Star 1-->                                
                                                         </p>
                                                         <!--begin::Star 2-->
                                                         <label class="rating-label" for="kt_rating_input_2">
                                                             <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                                                              </svg></span>
                                                         </label>
                                                         <input class="rating-input" name="rating" value="2" type="radio" id="kt_rating_input_2"/>
                                                         <!--end::Star 2-->                                

                                                         <!--begin::Star 3-->
                                                         <label class="rating-label" for="kt_rating_input_3">
                                                             <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                                                              </svg></span>
                                                         </label>
                                                         <input class="rating-input" name="rating" value="3" type="radio" id="kt_rating_input_3"/>
                                                         <!--end::Star 3-->                                

                                                         <!--begin::Star 4-->
                                                         <label class="rating-label" for="kt_rating_input_4">
                                                             <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                                                              </svg></span>
                                                         </label>
                                                         <input class="rating-input" name="rating" value="4" type="radio" id="kt_rating_input_4"/>
                                                         <!--end::Star 4-->                                

                                                         <!--begin::Star 5-->
                                                         <label class="rating-label" for="kt_rating_input_5">
                                                             <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                                                              </svg></span>
                                                         </label>
                                                         <input class="rating-input" name="rating" value="5" type="radio" id="kt_rating_input_5"/>
                                                         <!--end::Star 5-->
                                                    </div>          
                                                    </div> 

                                                   </div>  

                                         </div>     
                                                                   
                                     </div>

                                 </div>

                             </div>

                         </div>

                    </div>

                      <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               <button type="button" class="btn btn-primary">Save changes</button>
                     </div>

                 </div>

                </div>

            </div> 

        </div>
            
    </div>

</div>

                         
                  
                      
                        

<script>
  // Rating Initialization
$(document).ready(function() {
  $('#rateMe1').mdbRate();
});
</script>

         
 


              
                           
      
        

           
   

                          										
							
					




					
  
</body>
</html>