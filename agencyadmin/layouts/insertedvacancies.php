

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
							<span class="card-label fw-bold text-gray-800">Inserted Vacancies</span>
							
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
                                 <th>Hotel Name</th>
                                 <th>Job Position</th>
                                 <th>State</th>
                                 <th>No.of.jobs</th>              
							   <th> <img src="assets/media/icons/check.png" alt="check"></th>
                             </tr>
                            </thead>
                            <tbody>
                             <tr>
                              <td>Blu Hotel</td>
                              <td>Waiter</td>
                              <td><img src="assets/media/icons/flag-Al.png" alt="Flag"></td>
                              <td>30</td> 
                              <td><img src="assets/media/icons/edit.png" alt="Edit" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></td>
                            
							
							<!-- <td><img src="assets/media/icons/hamburg-menu-2-16.png" alt="hamburg-icons" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></td> -->
                             </tr>
						 
                            </tbody>
                        </table>
	 
                    </div>           
                </div>

                <div  class="modal fade" tabindex="-1" id="kt_modal_2">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Insert Vacancies</h1>     

                                     <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                    <span class="svg-icon svg-icon-2x">X</span>
                                </div>
                                <!--end::Close-->
                               </div>                         

                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="assets/media/flags/Flag_of_Albania.png" alt="Flag-Albania">
                                            </div>
                                            <div class="col-md-2">
                                                   <img src="assets/media/flags/flag-Montenegro.png" alt="Flag-Montenegro">
                                            </div>
                                             <div class="col-md-2">
                                                 <img src="assets/media/flags/Flag_of_North_Macedonia.png" alt="Flag-Montenegro">
                                             </div>
                                             <div class="col-md-2">
                                                  <img src="assets/media/flags/Serbia-flag.png" alt="Flag-Serbia">
                                             </div>
                                             <div class="col-md-2">
                                                  <img src="assets/media/flags/Flag_of_North_Macedonia.png" alt="Flag-Montenegro">
                                             </div>
                                             <div class="col-md-2">
                                                   <img src="assets/media/flags/Serbia-flag.png" alt="Flag-Serbia">
                                            </div>
           
                                        </div>
                                         <div class="row mt-10 mb-10">
                                                 <div class="col-md-2">
                                                     <div class="form-group ">
    	         	                                     <input type="number" name="" class="form-control"
                                                         placeholder="3">
                                                              
                                                     </div>
                                                 </div>
                                                 <div class="col-md-2">
                                                     <div class="form-group ">
    	         	                                     <input type="number" name="" class="form-control"
                                                         placeholder="3">
                                                              
                                                     </div>
                                                 </div>
                                                 <div class="col-md-2">
                                                     <div class="form-group ">
    	         	                                     <input type="number" name="" class="form-control"
                                                         placeholder="1">
                                                              
                                                     </div>
                                                 </div>
                                                 <div class="col-md-2">
                                                     <div class="form-group ">
    	         	                                     <input type="number" name="" class="form-control"
                                                         placeholder="0">
                                                              
                                                     </div>
                                                 </div>
                                        </div>
                                  </div> 
                            
                            
                                
                                       
                                 <div class="modal-footer">
                       
                                 <button type="button" class="btn btn-primary justify-co">Insert</button>
                                 </div>
                            </div>
                        </div>
                  </div> 
            </div> 

                           
        </div>

       </div>
     </div>


  </div>
  <script type="text/javascript" src="assets/js/tables.js"></script>
</div>
                
		
        

           
   

                          										
							
					




					