<div class="container ">
    <form>
        <div class= "row">

          <div class= "col-md-6 mb-5">
          <input type="text" placeholder="Birth Date"  class="form-control"  onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <!-- <input type="date" class="form-control" placeholder="Birthday" name="birthday"/> -->
         
          </div>
             <div class= "col-md-6 mb-5">
             <select class="form-select" aria-label="Select example" name="education" required>
                <option value="">Select Education</option>
                <option value="Education">Education</option>
                <option value="Master">Master</option> 
                <option value="Bachelor">Bachelor</option>
                <option value="Formim-Profesional">Formim Profesional</option>    
            </select>
             
             </div>
           <div class="col-md-6 mb-5"><input type="text" class="form-control" placeholder="University" name= "university" required></div>
           <div class="col-md-6 mb-5"><input type="text" class="form-control" placeholder="Branch"  name= "branch" required></div>
           <div class="col-md-6 mb-5"><input type="number" class="form-control" placeholder="Phone Number"  name= "phoneNumber " required></div>
           <div class= "col-md-6 mb-5"><input type="date"  class="form-control form-control-lg " placeholder="Start project" name="startProject" id="startProject" onfocus="(this.type='date')"  required/> </div>   
           <div class="col-md-6 mb-5"><input type="email" class="form-control" name="email" placeholder="Email" required></div>
           <div class="col-md-6 mb-5"><input type="password" class="form-control" name="password" placeholder="Password" required></div>
              
         

           <div class="col-md-6 mb-5 ">
                <select class="form-select"  class="form-control"  aria-label="Select language"  data-placeholder="English"  name= "language"  required>
                <option value=""> Select level English </option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                </select>
           </div>
           <div class="col-md-6 mb-5">
                 <select class="form-select" class="form-control"  aria-label="Select language" placeholder="Italion"  name= "language"  required>
                 <option value=""> Select level Italian </option>
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
            <!--begin::solid autosize textarea-->

    <label for="" class="form-label">Chronic Allergic Diseases</label>
    <textarea class="form-control form-control form-control-solid" data-kt-autosize="true"></textarea>


           </div>
           <div class="col-md-6 mb-5 mt-5">
                <div class="form-check form-switch form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault"/>
                <label class="form-check-label" for="flexSwitchDefault">
                     Yes
            </label>
          </div>

             <div class="row">
             <div class="col-md-9"></div>
          
            <div class="col-md-3  mb-5 mt-5">
            <button type="submit" class="btn btn-primary">Register</button>
            </div>
            </div>
           
        </div>
    </form>
</div>






</div>


<br><br>