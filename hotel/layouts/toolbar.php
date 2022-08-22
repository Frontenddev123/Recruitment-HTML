<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column me-3">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bold my-1 fs-3">Dashboard</h1>
			<!--end::Title-->
			<!--begin::Breadcrumb-->
			<p>Welcome back</p>
					
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center py-2 py-md-1">
				<!--begin::Wrapper-->
			<div class="me-3">							
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="d-flex justify-content-end">
				
			<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
			Advertise a job vacancy</button>

     <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg ">
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
    		        <form>
                         <div class="row"> 

    			   	
                        <!-- 2 column grid layout with text inputs for the first and last names -->
         
                          <!-- Text input -->
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-select " id="jobPosition" aria-label="Floating label select example" name="jobPosition">
                                  <option selected>Job Position</option>
                                  <option value="Kamarier">Kamarier</option>
                                  <option value="Bankier">Bankier</option>
                                  <option value="Ndihmes-Kamerier">Ndihemes-Kamerier</option>
                              </select>
                         
                            </div>     
           
                        </div>  
                            

                     
    

                            <div class="col-md-6">
                                <!--begin::Input group-->
                                 <div class="input-group mb-5">
                                     <span class="input-group-text" id="basic-addon1">$</span>
                                     <input type="text" name="salary"  class="form-control" placeholder="Payment for the job position" aria-label="Username" aria-describedby="basic-addon1"/>
                                 </div>
                        
                            </div>
         
                          
                        
                             <!-- Text input -->
                        <div class="col-md-6">
                              <div class="form-outline mb-4">
    	         	         <input type="number" name="employeesNumber" class="form-control"
                               placeholder="The number of Employees">
                               <label class="form-label" for=""></label>
                              </div>
                          </div>
       
                 
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jobType" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Full Time 
                                </label>
                              </div>   

                        </div>

                        <div class="col-md-3">

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jobType" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  In Shifts
                                </label>
                            </div>
                        </div>
                            

                
          
                        <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-select " id="dayOff" aria-label="Floating label select example" name= "dayOff">
                                  <option selected>Day off</option>
                                  <option value="Sunday">Sunday</option>
                                  <option value="Saturday">Saturday</option>
                        
                              </select>
                         
                           </div>  
                        </div>
                        

                        
                        <div class="col-md-6">
                          <div class="form-outline ">
                          <select class="form-select " id="lunchBreak" aria-label="Floating label select example" name= "lunchBreak" >
                                  <option selected>Lunch Break</option>
                                  <option value="">13:00-14:00</option>
                                  <option value="">13:00-14:00</option>
                        
                              </select>  
                          </div>
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
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                  <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                                  <label class="form-check-label" for="flexSwitchChecked">
                                      Student Accomodation
                                  </label>
                            </div>
                         </div>
                        <div class="col-md-6 mt-5">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                              <label class="form-check-label" for="flexSwitchChecked">
                              Room-Hotel-Room Transportation
                                  
                              </label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                              <label class="form-check-label" for="flexSwitchChecked">
                              Food included
                              </label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                              <label class="form-check-label" for="flexSwitchChecked">
                                 Healthy Insuarance
                              </label>
                            </div>
                        </div>


                           <!-- Addres Line2 input -->
                        <div class="row mt-10">
                             <div class="form-outline ">
                             <textarea class="form-control" id="form6Example7" rows="4" ame="comment" class="form-control" placeholder="Comment"></textarea>
    	
                             </div>     
                        </div> 
                        </form>
    				</div>
                
                 </div>

      
          
            <div class="modal-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </div>
    </div>
</div>


</div>


	<!--end::Actions-->
	</div>
		<!--end::Form-->
		</div>
			<!--end::Menu 1-->
				<!--end::Menu-->				
			</div>
			<!--end::Wrapper-->
			<!--begin::Button-->
			
			<!--end::Button-->
		</div>
		<!--end::Actions-->
	</div>
	<!--end::Container-->
</div>
		

</div>
