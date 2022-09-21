<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#progressbar">
    Launch demo modal
</button>

<div class="modal fade" tabindex="-1" id="progressbar">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Application Process</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1">X</span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-control">
                       Filling in the documents
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-control">
                      Completion of the contract
                      </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-control">
                      Arrival at the Hotel
                      </div>
                      </div>
                    </div>
                    <div class="row mt-10 bg-primary">
                    <div class="progress bg-primary">
                      <div class="progress-bar text-white" style="width: 100%">
                          100%
                      </div>
                  </div>
                    </div>
               </div>
            </div>

        </div>
    </div>
</div>