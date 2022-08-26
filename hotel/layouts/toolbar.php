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
                <a href="#" class="btn btn-danger  fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Advertise a job vacancy</a>
                <!--end::Button-->
                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                    <div class="modal-dialog modal-lg">
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
                               <div class="form">
                                   <div class="row">
                                       <div class="col-md-6">
                                          <select class="form-select " id="jobPosition" aria-label="Floating label select example" name="jobPosition">
                                          <option selected>Job Position</option>
                                          <option value="Kamarier">Kamarier</option>
                                          <option value="Bankier">Bankier</option>
                                          <option value="Ndihmes-Kamerier">Ndihemes-Kamerier</option>
                                         </select>
                                        </div>


                                         <div class="col-md-3 mt-5">
                                           <div class="form-check">
                                               <input class="form-check-input" type="radio" name="experience" id="experience">
                                               <label class="form-check-label" for="flexRadioDefault1">
                                                 Experinced
                                               </label>
                                             </div>                          
                                         </div>

                                        <div class="col-md-3 mt-5">

                                           <div class="form-check">
                                               <input class="form-check-input" type="radio" name="experience" id="experience" checked>
                                               <label class="form-check-label" for="flexRadioDefault2">
                                                 Not Experinced
                                               </label>
                                           </div>

                                         </div>

                                         <div class="col-md-6 mt-5">
                                            <div class="form-outline mb-4">
    	         	                       <input type="number" name="employeesNumber" class="form-control"
                                             placeholder="The number of Employees">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-5">
                                        <div class="form-group">
                                             <select class="form-select " id="dayOff" aria-label="Floating label select example" name= "dayOff">
                                                 <option selected>Day off</option>
                                                 <option value="Sunday">Sunday</option>
                                                 <option value="Saturday">Saturday</option>
                        
                                             </select>
                         
                                          </div>  
                                      </div>


                                      <div class="col-md-3 mt-5">
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" name="jobType" id="flexRadioDefault1">
                                              <label class="form-check-label" for="flexRadioDefault1">
                                                Full Time 
                                              </label>
                                            </div>   

                                      </div>

                                      <div class="col-md-3  mt-5">

                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="jobType" id="flexRadioDefault2" checked>
                                              <label class="form-check-label" for="flexRadioDefault2">
                                                In Shifts
                                              </label>
                                          </div>
                                      </div>

                                      <div class="col-md-6 mt-5">
                                         <div class="form-outline ">
                                         <select class="form-select " id="lunchBreak" aria-label="Floating label select example" name= "lunchBreak" >
                                                 <option selected>Lunch Break</option>
                                                 <option value="">13:00-14:00</option>
                                                 <option value="">13:00-14:00</option>
                        
                                             </select>  
                                         </div>
                                       </div>

                                       <div class="col-md-6 mt-5">
                                           <!--begin::Input group-->
                                            <div class="input-group mb-5">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                                <input type="text" name="salary"  class="form-control" placeholder="Payment for the job position" aria-label="Username" aria-describedby="basic-addon1"/>
                                            </div>
                        
                                       </div>
                                       <div class="col-md-6"></div>
                                       <div class="col-md-6 mt-5">
                                              <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked1" checked="checked" />
                                                    <label class="form-check-label" for="flexSwitchChecked1">
                                                        Student Accomodation
                                                    </label>
                                              </div>
                                           </div>
                                          <div class="col-md-6 mt-5">
                                              <div class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked2" checked="checked" />
                                                <label class="form-check-label" for="flexSwitchChecked2">
                                                Room-Hotel-Room Transportation
                                                    
                                                </label>
                                              </div>
                                          </div>
                                          <div class="col-md-6 mt-5">
                                              <div class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked3" checked="checked" />
                                                <label class="form-check-label" for="flexSwitchChecked3">
                                                Food included
                                                </label>
                                              </div>
                                          </div>
                                          <div class="col-md-6 mt-5">
                                              <div class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked4" checked="checked" />
                                                <label class="form-check-label" for="flexSwitchChecked4">
                                                   Healthy Insuarance
                                                </label>
                                              </div>
                                          </div>
                                          <div class="row mt-10">
                                             <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                              <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" checked />
                                              <label class="form-check-label" for="flexCheckDefault"> Accept  <span class="text-info">Accept terms of services</span>
                                                  </label>
                                            </div>
                                           
                                          </div>

                                          
 
         
                                       

                                      </div>
                                   </div>
                               </div>
                            <div class="modal-footer">
                               
                                <button type="button" class="btn btn-primary">Create</button>
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