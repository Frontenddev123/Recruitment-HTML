<div class="container ">
    <form>
    <div class= "row">
        <div class= "col-md-6 mb-5">
            <input type="text" class="form-control" placeholder="First Name" name="firstName"/>
         
          </div>
          <div class= "col-md-6 mb-5">
            <input type="text" class="form-control" placeholder="Last Name" name="lastName"/>
         
          </div>
          <div class= "col-md-6 mb-5">
          <input type="text" placeholder="Birth Date"  class="form-control"  onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">

            <!-- <input type="date" class="form-control" placeholder="Birthday" name="birthday"/> -->
         
          </div>
          <div class= "col-md-6 mb-5">
            <select class="form-select" aria-label="Select example" name="education">
                <option>Education</option>
                <option value="Master">Master</option> 
                <option value="Bachelor">Bachelor</option>
                <option value="Formim-Profesional">Formim Profesional</option>    
            </select>
          
          </div>
        <div class="col-md-6 mb-5"><input type="text" class="form-control" placeholder="University" name= "university"></div>
        <div class="col-md-6 mb-5"><input type="text" class="form-control" placeholder="Branch"  name= "branch" ></div>
        <div class="col-md-6 mb-5"><input type="tel" class="form-control" placeholder="Phone Number"  name= "phoneNumber "></div>
        <div class= "col-md-6 mb-5"><input class="form-control form-control-lg " type="text"  placeholder="Start project" name="startProject" id="startProject" onfocus="(this.type='date')" /> </div>   
        <div class="col-md-6 mb-5"><input type="email" class="form-control" name="email" placeholder="Email"></div>
        <div class="col-md-6 mb-5"><input type="password" class="form-control" name="password" placeholder="Password"></div>
           
      

        <div class="col-md-6 mb-5 ">
             <select class="form-select"  class="form-control"  aria-label="Select language"  data-placeholder="English"  name= "language" >
             <option>English </option>
                 <option value="B1">B1</option>
                 <option value="B2">B2</option>
                 <option value="C1">C1</option>
             </select>
        </div>
        <div class="col-md-6 mb-5">
              <select class="form-select" class="form-control"  aria-label="Select language" placeholder="Italion"  name= "language" >
              <option >Italian </option>
               <option value="B1">B1</option>
               <option value="B2">B2</option>
               <option value="C1">C1</option>

              </select>

        </div>
        <div class="col-md-12 mt-5 mb-5">
            <div class="form-check form-switch form-check-custom form-check-solid">
             <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" name="active"/>
             <label class="form-check-label" for="flexSwitchDefault">
                 Active student
             </label>
             </div>
        </div>
        <div class="col-md-6 mb-5 mt-5">
            <div class="form-group">
           <label for="" class="mb-5 ">Chronic Allergic Diseases</label>
           <input type="text" class="form-control" id="" aria-describedby="" name="chronicAllergies " >
           
         </div>
        </div>
        <div class="col-md-6 mb-5 mt-5">
        <div class="form-check form-switch form-check-custom form-check-solid">
    <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>
    <label class="form-check-label" for="flexSwitchDefault">
       Yes
    </label>
</div>
</div>

<div class="col-md-6">
<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#register-student">Continue</a>


</div> 
<div class="modal fade" tabindex="-1" id="register-student ">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Modal title</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


</form>


</div>
</div>

<br><br>