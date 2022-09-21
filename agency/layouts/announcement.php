	<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bold my-1 fs-3">Dashboard Agency</h1>
            <p>Welcome back</p>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-2 py-md-1">
         
            <!--begin::Button-->
            <a href="#" class="btn btn-danger  fw-bold" data-bs-toggle="modal" data-bs-target="#announcement">Announcement</a>
            <!--end::Button-->
            <div class="modal fade" tabindex="-1" id="announcement">
                <div class="modal-dialog  modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Announcement</h3>

                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                <span class="svg-icon svg-icon-1">X</span>
                            </div>
                            <!--end::Close-->
                        </div>

                        <div class="modal-body">
                           <form>
                               <div class="row">
                                   <div class="col-md-6 mb-5">
                                      <label for="" class="form-label">Select Notifica Title</label>
                                         <select class="form-select " id="notificationtitle" aria-label="Floating label select example" name="notificationtitle" required>
                                         <option value= "">Select Notifica Title</option>      
                                         <option value="Option1">Option1</option>
                                         <option value="Option1">Option1</option>
                                         <option value="Option1">Option1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        <label for="" class="form-label">Select Number of vacancies of Intership</label>
                                         <select class="form-select " id="numbervacanciesofintership" aria-label="Floating label select example" name="numbervacanciesofintership" required>
                                         <option value= ""> Select Number of vacancies of Intership</option>      
                                         <option value="Option1">Option1</option>
                                         <option value="Option1">Option1</option>
                                         <option value="Option1">Option1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-5">
                                    <label for="" class="form-label">  Select Intership Positio</label>
                                         <select class="form-select " id="numbervacanciesofintership" aria-label="Floating label select example" name="intershipposition" required>
                                         <option value= ""> Select Intership Position</option>      
                                         <option value="Option1">Waiter Assistant</option>

                                         <option value="Option1">Bartender Assistant</option>
                                         <option value="Option1">Maintenance</option>
                                         <option value="Option1">Kitchen</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="" class="form-label"> Aplication Deadlin:</label>
                                        <input type="date" class="form-control" name= "aplicationdeadline"   min="2022-08-29">
                                    </div>

                                </div>  

                               </div>
                               
                               
                                 <div class="modal-footer">
                                    
                                     <button type="submit" class="btn btn-primary">Create</button>
                                 </div>

                            </form>

                        </div>
                </div>
            </div>
       


        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar--> 