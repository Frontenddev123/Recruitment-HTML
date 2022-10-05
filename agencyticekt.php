@extends('agency.layouts.master')
@section('content')

    <div class="card mb-3 container">

        <div class="card-body ">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon">1</div>
                    </div>
                    <a href="{{ url('agency/studentDoc', encrypt($jobApplication_id)) }}">
                        <h4 class="step-title">Student Doc</h4>
                    </a>
                </div>
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon">2</div>
                    </div>
                    <a href="{{ url('agency/contract', encrypt($jobApplication_id)) }}">
                        <h4 class="step-title">Contract</h4>
                    </a>
                </div>
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon">3</div>
                    </div>
                    <h4 class="step-title">Ticket</h4>
                </div>
                <div class="step ">
                    <div class="step-icon-wrap">
                        <div class="step-icon">4</div>
                    </div>
                    <h4 class="step-title">Host Info</h4>
                </div>
                <div class="step ">
                    <div class="step-icon-wrap">
                        <div class="step-icon">5</div>
                    </div>
                    <h4 class="step-title">Confirmation</h4>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="card container mb-10">
        <!-- begin::Body-->
        <div class="card-body py-20">

            <!-- begin::Wrapper-->
            <div class="mw-lg-950px mx-auto w-100">
                <!-- begin::Header-->

                <!--end::Header-->
                <!--begin::Body-->
                <div class="pb-12">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column gap-7 gap-md-10">

                        <h1>Ticket</h1>

                        <form method="post" action="{{ url('agency/ticket', encrypt($jobApplication_id)) }}">
                            @csrf
                            @method('HEAD')
                            <div class="row">

                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="" class="form-label">Travel Code</label>
                                        <input type="text" class="form-control" name="flight_code"
                                            value="{{ $tikets->flight_code }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Departure from Albania</label>
                                        <select class="form-select form-control" name="departure" required>
                                            <option value="">Select ways to travel</option>

                                            <option value="Tirana International Airport Nënë Tereza" <?php if ($tikets->departure == 'Tirana International Airport Nënë Tereza') {
                                                echo 'selected';
                                            } ?>>
                                                Tirana International Airport Nënë Tereza</option>

                                            <option value="Kukës International Airport" <?php if ($tikets->departure == 'Kukës International Airport') {
                                                echo 'selected';
                                            } ?>>
                                                Kukës International Airport</option>

                                            <option value="Port of Durres" <?php if ($tikets->departure == 'Port of Durres') {
                                                echo 'selected';
                                            } ?>>
                                                Port of Durres</option>

                                            <option value="Port of Vlora" <?php if ($tikets->departure == 'Port of Vlora') {
                                                echo 'selected';
                                            } ?>>
                                                Port of Vlora</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                        <label for="" class="form-label">Date and time, arrived in Airport,
                                            Italy</label>
                                        <input type="datetime-local" class="form-control" data-date-format="YYYY MMMM DD"
                                            name="departure_time" value="{{ $tikets->departure_time }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5">

                                    <div class="form-group">
                                        <label for="" class="form-label">Airport arrived in Italy</label>
                                        <input type="text" class="form-control" id="" aria-describedby=""
                                            name="aiport_italy" value="{{ $tikets->aiport_italy }}" required>

                                    </div>
                                </div>

                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                        <label for="" class="form-label">City arrived in Italy</label>
                                        <input type="text" class="form-control" id="" name="city_arrived"
                                            aria-describedby="" value="{{ $tikets->aiport_italy }}" required>

                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer mb-10 mt-10">

                                <button type="submit" class="btn btn-primary  me-2">Update</button>
                            </div>

                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end container mt-5">
        <a href="{{ url('agency/hostInfo', encrypt($jobApplication_id)) }}"> <button type="button"
                class="btn btn-primary p-3
            ">Next<i class="fas fa-arrow-right mx-2"></i></button></a>
    </div>



    {{-- <div class="card container mb-10 mt-10">
        <!-- begin::Body-->
        <div class="card-body py-20">

            <!-- begin::Wrapper-->
            <div class="mw-lg-950px mx-auto w-100">
                <!-- begin::Header-->

                <!--end::Header-->
                <!--begin::Body-->
                <div class="pb-12">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column gap-7 gap-md-10">

                        <h1>Details Ticket</h1>

                        <form>
                            <div class="row">

                                  <div class="col-md-6 mt-5">
                                     <label for="" class="form-label fw-semibold text-muted">Departure from Albania</label>
                                  </div>
                                   <div class="col-md-6">  <span  class="fw-bold fs-6 text-gray-800"> Tirana International Airport Nënë Tereza</span>
                                       
                                  </div>
                                      
                                  <div class="col-md-6 mt-5">  
                                      <label for="" class="form-label form-label fw-semibold text-muted">Date and time, arrived in Airport, Italy</label>
                                           
                                       
                                   </div>
                                   <div class="col-md-6">  <span  class="fw-bold fs-6 text-gray-800">  23/09/2022 14:31</span> </div>

                                   <div class="col-md-6 mt-5">

                                     
                                    <label for="" class="form-label form-label fw-semibold text-muted">Airport arrived in Italy</label>
                               
                                   </div>

                                   <div class="col-md-6">
                                   <span  class="fw-bold fs-6 text-gray-800">  Fiumicino Leonardo da Vinci International Airport:</span>
                                   </div>
                                   
                                   <div class="col-md-6 mt-5">
                                      <div class="form-group">
                                          <label for="" class="form-label form-label fw-semibold text-muted">City arrived in Italy</label>
                                          
                                      </div>
                                   </div>
                                   <div class="col-md-6">  <span  class="fw-bold fs-6 text-gray-800"> Roma </span></div>

                                    <div class="modal-footer mt-5">
                                   <button type="submit" class="btn btn-primary  me-2 ">Edit</button>
                                   </div>
                                   
                             </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        
    </div> --}}
@endsection
