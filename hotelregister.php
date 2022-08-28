<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        if (document.documentElement) {
            const defaultThemeMode = "system";
            const name = document.body.getAttribute("data-kt-name");
            let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
            if (themeMode === null) {
                if (defaultThemeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="../../demo1/dist/index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
                <img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2">
                            <a href="{{ url('hotel/login') }}" class="btn btn-icon bg-light rounded-circle">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr002.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                            fill="currentColor" />
                                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Back link-->
                        <!--begin::Sign Up link-->
                        <div class="m-0">
                            <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Already
                                a member ?</span>

                            <a href="{{ url('hotel/login') }}" class="link-primary fw-bold fs-5">


                                <a href="" class="link-primary fw-bold fs-5">

                                    <a href="{{ route('hotel.login') }}" class="link-primary fw-bold fs-5"
                                        data-kt-translate="sign-up-head-link">Sign In</a>
                        </div>
                        <!--end::Sign Up link=-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->

                    <div class="py-20">

                        <!--begin::Form-->
                        <form method="post" action="{{ route('register.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            <!--begin::Heading-->
                            <div class="text-start mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account
                                </h1>
                                <!--end::Title-->
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-2">
                                <!--begin::Col-->
                                <div class="col-md-6 mb-5 mt-5">
                                
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="Company Name" name="companyName" id="companyName"  required minlength="10"  maxlength="20"/>
                                    <div class="valid-feedback">
                                       Looks good!
                                     </div>
                                     <div class="invalid-feedback">
                                       The Company Name should includes min 10 characters and max 30  characters
                                     </div>
                                   
                                 </div>
                                 <div class="col-md-6 mb-5 mt-5">
                                      <!--begin::Col-->
                              
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="nius" name="nius" id="nius" required/>
                            
                                <!--end::Col-->
                                 </div>

                                     <!--begin::Col-->
                                <div class="col-xl-6 mt-3">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Adress Line" name="adressLine" id="adressLine" required/>
                                </div>
                                <div class="col-xl-6 mb-5 mt-3 ">
                                    
                                        <select class=" form-select form-control  form-control-lg form-control-solid "  type="text" id="region" name="region" aria-label="Floating label select example " required>
                                        <option name="" id=""> Select  a Region</option>      
                                        <option name="" id="">Roma </option>
                                        <option name="" id="">Milano </option>
                                        <option name="" id="">Abruzzo</option>
                                        <option name="" id="">Aosta Valley </option>
                                        <option name="" id="">Apulia </option>
                                        <option name="" id="">Basilicata</option>
                                        <option name="" id="">Calabria</option>
                                        <option name="" id="">Campania</option>
                                        <option name="" id="">Emilia-Romagna</option>
                                        <option name="" id="">Friuli-Venezia Giulia</option>
                                        <option name="" id="">Lazio</option>
                                        <option name="" id="">Liguria</option>
                                        <option name="" id="">Lombardy</option>
                                        <option name="" id="">Marche</option>
                                        <option name="" id="">Molise</option>
                                        <option name="" id="">Piedmont</option>
                                        <option name="" id="">Sardinia</option>
                                        <option name="" id="">Sicily</option>
                                        <option name="" id="">Trentino-South Tyrol</option>
                                        <option name="" id="">Tuscany</option>
                                        <option name="" id="">Umbria</option>
                                        <option name="" id="">Veneto</option>
                                        
                                        </select>
                                 
                                </div>
                                <!--end::Col-->
                                   <!--begin::Col-->
                                <div class="col-md-12 mb-5 mt-5">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Website" name="website" id="website"  required/>
                                </div>

                                <p class="text-center fw-bold">Director of Human Resources</p>

                                <div class="col-md-6 mb-5 mt-5">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Director Name" name="directorFullName" id="directorFullName"  required/>
                                </div>
                                <div class="col-md-6  mb-5 mt-5">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="Phone Number" name="directorPhoneNumber"
                                        id="directorPhoneNumber" required />
                                </div>

                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <p class="text-center  fw-bold mt-5">Account User</p>

                            <div class="row fv-row mb-4">
                                <div class="col-md-6 mb-5 mt-5">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="User Name" name="userFullName" id="userFullName"
                                        data-kt-translate="sign-up-input-first-name"  required/>
                                </div>
                                <div class="col-md-6 mb-5 mt-5  ">
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="User Phone Number" name="userPhoneNumber" id="userPhoneNumber"  required/>
                                </div>
                                <!--end::Col-->
                              
                                <!--begin::Col-->
                                <div class="col-xl-12 mb-5 mt-5">
                                   
                                    <input class="form-control form-control-lg form-control-solid" type="email"
                                        placeholder="Email" name="email" id="email" required />
                                        <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                            The e-mail is required!
                                          </div>
                                  </div>
                                <div class="col-xl-6 mb-5 mt-5">
                                   
                                     <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="Password" name="password" id="password"
                                        data-kt-translate="sign-up-input-password"  required minlength="6"/>
                                        <div class="valid-feedback">
                                              Great!
                                            </div>
                                            <div class="invalid-feedback">
                                              The password must contain at least 6 characters uppercase and lowcase!
                                            </div>                                      

                                </div>
                                <div class="col-xl-6 mb-5 mt-5">
                                  
                                     <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="Verified Password " name="password" id="password"
                                        data-kt-translate="sign-up-input-password"  required minlength="6"/>
                                        <div class="valid-feedback">
                                              Great!
                                            </div>
                                            <div class="invalid-feedback">
                                              The password must contain at least 6 characters uppercase and lowcase!
                                            </div>                                      

                                </div>
                                <!--end::Col-->
                            
                              

                            </div>

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Submit-->
                                <button id="kt_sign_up_submit" type="submit" class="btn btn-primary mt-5"
                                    data-kt-translate="sign-up-submit">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Register</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                                <!--end::Submit-->
                                <!--begin::Social-->
                                <div class="d-flex align-items-center mt-5 ">
                                    <div class="text-gray-400 fw-semibold fs-6 me-6">Or</div>
                                    <!--begin::Symbol-->
                                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                            class="p-4" />
                                    </a>
                                    <!--end::Symbol-->
                                    <!--begin::Symbol-->
                                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                        <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg"
                                            class="p-4" />
                                    </a>
                                    <!--end::Symbol-->
                                    <!--begin::Symbol-->
                                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg"
                                            class="theme-light-show p-4" />
                                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
                                            class="theme-dark-show p-4" />
                                    </a>
                                    <!--end::Symbol-->
                                </div>
                                <!--end::Social-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="m-0">

                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url(assets/media/auth/bg11.png)"></div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
        <example-component>
            <example-component />
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="assets/js/custom/authentication/sign-up/general.js"></script>
    <script src="assets/js/custom/authentication/sign-in/i18n.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script>
  (function() {
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');

      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {  debugger;
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();

            checkInputs();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


  /** to reoved spaces */
  
//   var field = document.querySelector('[name="nius"]');

// field.addEventListener('keypress', function ( event ) {  
//    var key = event.keyCode;
//     if (key === 32) {
//       event.preventDefault();
//     }
// })

//   document.getElementById("password").addEventListener("keyup", validatePass);

// function validatePass() {  
//     let pass = document.getElementById("password");

//   if(pass.include("S"))
//   {
//   startDate.value = "";
//   endDate.value = "";
//   }
// }
</script>
</body>
<!--end::Body-->

</html>