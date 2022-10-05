@extends('agency.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
 
</head>
<body>
    

    <br><br>

    <div class="card mb-3 container">

        <div class="card-body ">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                <div class="step completed">
                    <div class="step-icon-wrap">
                        <div class="step-icon">1</div>
                    </div>
                    <h4 class="step-title">Student Doc</h4>
                </div>
                <div class="step ">
                    <div class="step-icon-wrap">
                        <div class="step-icon">2</div>
                    </div>
                    <h4 class="step-title">Contract</h4>
                </div>
                <div class="step ">
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
    <div class="card container">
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


                        <h1><span class="text-muted">Student Documents fordsx:</span>
                            {{ $students->firstName }} {{ $students->lastName }}
                        </h1>
                        <div class="card-body">
                            <div class="d-flex justify-content-end">

                                <!-- begin::Actions-->
                                <div class="my-1 me-5">
                                    <!-- begin::Pint-->

                                    <a href="{{ url('uploads', $students->passScan) }}" download> <button type="button"
                                            class="btn btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-file-arrow-down-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                                                </svg>
                                                <!--end::Svg Icon-->Download passport Copy
                                        </button></a><!-- end::Pint-->
                                    <!-- begin::Download-->
                                    <a href="{{ url('uploads', $students->studCertificate) }}" download> <button
                                            type="button" class="btn btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-file-arrow-down-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                                                </svg>
                                                <!--end::Svg Icon-->Download Student Verification Document
                                        </button>
                                    </a>
                                    <!-- end::Download-->
                                </div>
                                <!-- end::Actions-->


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end  mb-7">
            <a href="{{ url('agency/contract', encrypt($jobApplication_id)) }}"> <button type="button"
                    class="btn btn-primary p-3
            ">Next<i class="fas fa-arrow-right mx-2"></i></button></a>
        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
@endsection


