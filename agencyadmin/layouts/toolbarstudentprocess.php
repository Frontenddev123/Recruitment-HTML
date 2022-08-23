	<!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Dashboard</h1>
                <p>Welcome back</p>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-2 py-md-1">
             
                <!--begin::Button-->
                <a href="#" class="btn btn-danger  fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Student in Process</a>
                <!--end::Button-->
                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                   <div class="modal-dialog modal-xl ">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h3 class="modal-title">Modal</h3>

                               <!--begin::Close-->
                               <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                   <span class="svg-icon svg-icon-1">X</span>
                               </div>
                               <!--end::Close-->
                           </div>

                           <div class="modal-body">
                            <div class="container">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h1>Students in Intership Process</h1>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="search-box">
                                                  <div class="input-group">
                                                  <input type="text" id="search" class="form-control" placeholder="Search">
                                                 
                                                  </div>
                                            </div>
                                                            
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                   <table class="table table-striped gy-7 gs-7 mt-10">
                                    <thead>
                                     <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                      <th>Hotel Name</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Job Position</th>
                                      <th>State</th>
                                      <th>Student Code</th>
                                      <th>% of Process</th>
                                      <th> <img src="assets/media/icons/check.png" alt="check"> </th>               
                                     </tr>
                                    </thead>
                                    <tbody>
                                     <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>Waiter</td>
                                      <td> <img src="assets/media/icons/flag-Al.png" alt="/Flag_of_Albania"></td>
                                      
                                      <td>390</td>
                                    
                                      <td>20%</td>
                                      <td>  <i class="bi bi-person fs-2x"></i></td>
                                     </tr>
                                  
                                    </tbody>
                                   </table>
                           
                                </div>      
                            </div>       
                        </div>     
                       
                    </div>
              </div>
          </div>
    </div>

</div>
            
           


</div>
    <!--end::Actions-->
</div>
    <!--end::Container-->
            
</div>
<!--end::Toolbar-->