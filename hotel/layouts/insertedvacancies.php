

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
                              <th>Order ID</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                              <th>Job Position</th>
                              <th>State</th>
                              <th>Number Of students</th>
							<th> <img src="assets/media/icons/check.png" alt="check">

							</th>
                             </tr>
                            </thead>
                            <tbody>
                             <tr>
                              <td>1</td>
                              <td>04/11/2022</td>
                              <td>04/12/2022</td>
                              <td>Waiter</td> 
                              <td><img src="assets/media/icons/flag-Al.png" alt="Flag"></td>
                              <td>30</td>
							
							<td><img src="assets/media/icons/hamburg-menu-2-16.png" alt="hamburg-icons" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></td>
                             </tr>
						   <tr>
                              <td>2</td>
                              <td>04/11/2022</td>
                              <td>04/12/2022</td>
                              <td>Waiter</td> 
                              <td><img src="assets/media/icons/flag-Al.png" alt="Flag"></td>
                              <td>30</td>
						

							<td><img src="assets/media/icons/hamburg-menu-2-16.png" alt="hamburg-icons" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></td>
                             </tr>
                            </tbody>
                        </table>
	 
                    </div>           
                </div>

             <div class="modal fade" tabindex="-1" id="kt_modal_2">
               <div class="modal-dialog modal-xl modal-dialog-centered">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h3 class="modal-title">Insert Vacancies</h3>

                           <!--begin::Close-->
                           <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                               <span class="svg-icon svg-icon-1">X</span>
                           </div>
                           <!--end::Close-->
                       </div>

                       <div class="modal-body">
                       <div class="table-responsive">
                           <table class="table table-striped gy-7 gs-7">
                            <thead>
                             <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>CV</th>
                              <th>Availability</th>
                              <th>Start date</th>
                              <th>End date</th>
                              <th class="text-end">  <img src="assets/media/icons/check.png" alt="">

                              </th>
                           
                             </tr>
                            </thead>
                            <tbody>
                             <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>  
                              <td>  <i class="bi bi-person fs-2x"></i></td>
                              <td>  <a href="#" class="btn btn-danger btn-sm">Accept</a></td>
                              <td>  <a href="#" class="btn btn-danger btn-sm">Decline</a></td>
                            
                             </tr>
                             <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                              <td>  <i class="bi bi-person fs-2x"></i></td>
                              <td>  <a href="#" class="btn btn-danger btn-sm">Accept</a></td>
                              <td>  <a href="#" class="btn btn-danger btn-sm">Decline</a></td>
                             </tr>
                            </tbody>
                           </table>
                       </div>
           		        
                </div>      
            </div>

       </div>
     </div>
  </div>
  <script type="text/javascript" src="assets/js/tables.js"></script>
</div>
                
		
        

           
   

                          										
							
					




					