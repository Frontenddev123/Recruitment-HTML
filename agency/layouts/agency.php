

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
							<span class="card-label fw-bold text-gray-800">Jobs launched by the IT Agency</span>
							
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
                                  <th>No. of vacant positions </th>
					    		  <th>Intership Start Date </th>
					    		  <th>Intership End Date </th>
					    		

                                 </tr>
                                </thead>
                                <tbody>  
                                 <tr>
                                  <td>Blue Hotel</td>
                                  <td>Waiter</td>
                                  <td>30</td>
					    		  <td>6/6/2022</td>
					    		  <td>6/6/2022</td>
			                      <td>  <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalatched">Attach</a>

					    		 
					    		</td> 
	
                                 </tr>
					    	  
                                </tbody>
                            </table>
	 
                        </div>           
                </div>
				<div class="modal fade" tabindex="-1" id="modalatched">
                     <div class="modal-dialog modal-xl modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h3 class="modal-title">Jobs launched by the IT Agency</h3>

                                 <!--begin::Close-->
                                 <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                     <span class="svg-icon svg-icon-1">X</span>
                                 </div>
                                 <!--end::Close-->
                             </div>

                             <div class="modal-body">
                                 
							 <div class="table-wrapper">

                                <div class="table-heading">                                   

                                	<div class="row mb-5">
                                		<div class="col-md-10">
                                		   <!--begin::Main wrapper-->
<div
    id="kt_docs_search_handler_basic"

    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="true"
    data-kt-search-layout="inline">

    <!--begin::Input Form-->
    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
        <!--begin::Hidden input(Added to disable form autocomplete)-->
        <input type="hidden"/>
        <!--end::Hidden input-->

        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
					<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
				</svg>
			</span>
        <!--end::Icon-->

             <!--begin::Input-->
             <input type="text" class="form-control form-control-lg form-control-solid px-15"
                 name="search"
                 value=""
                 placeholder="Search by username, full name or email..."
                 data-kt-search-element="input"/>
             <!--end::Input-->

             <!--begin::Spinner-->
             <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                 <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
             </span>
             <!--end::Spinner-->

             <!--begin::Reset-->
             <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                 data-kt-search-element="clear">

                 <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                 
             </span>
             <!--end::Reset-->
         </form>
         <!--end::Form-->

         <!--begin::Wrapper-->
         <div class="py-5">
             <!--being::Search suggestion-->
             <div data-kt-search-element="suggestions">
              
             </div>
             <!--end::Suggestion wrapper-->

             <!--begin::Search results-->
             <div data-kt-search-element="results" class="d-none">
               
             </div>
             <!--end::Search results-->

             <!--begin::Empty search-->
             <div data-kt-search-element="empty" class="text-center d-none">
             
             </div>
             <!--end::Empty search-->
         </div>
         <!--end::Wrapper-->
</div>
<!--end::Main wrapper-->
                                     		</div>                                   

                                		<div class="col-md-2">                                   

										<a href="#"  class="btn  btn-lg btn-danger"  style="float:right;"  >Select</a>

                                								                                    

                                		</div>                                   

                                	</div>  
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                         <label for="" class="form-label">Comment</label>
                                         <textarea class="form-control" data-kt-autosize="true"></textarea required>
                                         </div>
                                     </div>                                 

                                </div>                                   

                                <div class="table-responsive">                                   

                                <table class="table table-striped gy-7 gs-7 mt-10">                                   

                                <thead>
                                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>CV</th>
                                <th>Video</th>
                                <!-- <th>Actions</th> -->
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Pdf</td>
                                <td>Attach</td>
                              
                                
                                <td> <a href="http://localhost/panel/profilestudent.php"><i class="bi bi-person fs-2x"></i></a></td>
                                <td><i class="bi bi-trash fs-2x"></i></td>
                                                                     
                                </tr>                                                        

                                </tbody>                                   

                                </table>                                   

                                </div>
                            </div>
                             </div>

                             <div class="modal-footer">
                              
                                 <button type="submit" class="btn  btn-lg btn-danger">Publish</button>
                             </div>

                         </div>

                     </div>

                  </div>

                </div>

			</div>

        </div>

     </div>

     <script>
        var processs = function(search) {
        var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 6);

        // Hide recently viewed
        suggestionsElement.classList.add("d-none");

        if (number === 3) {
            // Hide results
            resultsElement.classList.add("d-none");
            // Show empty message
            emptyElement.classList.remove("d-none");
        } else {
            // Show results
            resultsElement.classList.remove("d-none");
            // Hide empty message
            emptyElement.classList.add("d-none");
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    suggestionsElement.classList.remove("d-none");
    // Hide results
    resultsElement.classList.add("d-none");
    // Hide empty message
    emptyElement.classList.add("d-none");
}

// Input handler
const handleInput = () => {
    // Select input field
    const inputField = element.querySelector("[data-kt-search-element="input"]");

    // Handle keyboard press event
    inputField.addEventListener("keydown", e => {
        // Only apply action to Enter key press
        if(e.key === "Enter"){
            e.preventDefault(); // Stop form from submitting
        }
    });
}

// Elements
element = document.querySelector('#kt_docs_search_handler_basic');

if (!element) {
    return;
}

wrapperElement = element.querySelector("[data-kt-search-element="wrapper"]");
suggestionsElement = element.querySelector("[data-kt-search-element="suggestions"]");
resultsElement = element.querySelector("[data-kt-search-element="results"]");
emptyElement = element.querySelector("[data-kt-search-element="empty"]");

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on("kt.search.process", processs);

// Clear handler
searchObject.on("kt.search.clear", clear);

// Handle select
KTUtil.on(element, "[data-kt-search-element="customer"]", "click", function() {
    //modal.hide();
});

// Handle input enter keypress
handleInput();
     </script>
</div>

                
		
        

           
   

                          										
							
					




					