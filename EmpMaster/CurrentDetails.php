
<?php include('../header.php');
session_start();?>
<h3 class="text-center">Current Details</h3><br />
   
   <div class="container-fluid">  
       <!-- Charts -->
       <div class="col-md-12 p-sm-5" style="border-color: #009ca6;border-style: solid;">
           <div class="w-sm-50 w-auto mx-auto">

               <div class="row">
                   <div class="col-sm-1"></div>
                   <div class="col-sm-3">
                       <div class="form-group">
                       <label class="font-weight-bold" for="go_no">Gpf_No/Suffix</label>
<input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Gpf_No" name="Gpf_No">
                       </div>
                   </div>
                   <div class="col-sm-2">
                       <div class="form-group">
                       <Label class="font-weight-bold" ID="Label1" Style="color: white" runat="server" >--</label>
                       <select class="form-control form-control-sm" style="border-color: #009ca6" id="Suffix" name="Suffix">
                                                        <option selected>Select Suffix</option>
                                                        <option value="1">AIS</option>
                                                        <option value="2">MEDL</option>
                                                        <option value="3">EDN</option>
                                                    </select>
                       </div>
                   </div>
                   <div class="col-sm-5">
                       <div class="form-group">
                       <label class="font-weight-bold" for="Name">EmployeeName</label>
                                                    <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Name" name="Name">
                       </div>
                   </div>
                   <div class="col-sm-1"></div>
               </div>
           </div>


           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Department">Department</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Department" name="Department">
                                                        <option selected>Select Department</option>
                                                        <option value="1">National Institute of Siddha</option>                                                        
                                                    </select>
                   </div>
               </div>

               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Section">Section</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Section" name="Section">
                                                        <option selected>Select Section</option>
                                                        <option value="1">Admin</option>
                                                        
                                                    </select>
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Designation">Designation</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Designation" name="Designation">
                                                        <option selected>Select Designation</option>
                                                        <option value="1">Additional Director</option>
                                                        <option value="2">Accountant</option>
                                                    </select>
                      
                   </div>
               </div>

               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Employee_Type">Employee_Type</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Employee_Type" name="Employee_Type">
                                                        <option selected>Select Employee Type</option>
                                                        <option value="1">Permanent</option>
                                                        <option value="2">Temporary</option>
                                                    </select>
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>



            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Payment_type">Payment_type</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Payment_type" name="Payment_type">
                                                        <option selected>Select Payment type</option>
                                                        <option value="1">Salary</option>
                                                        <option value="2">Arrear</option>
                                                    </select>
                      
                   </div>
               </div>

               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Salary_Type">Salary_Type</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Salary_Type" name="Salary_Type">
                                                        <option selected>Select Salary Type</option>
                                                        <option value="1">Fullpay</option>
                                                        <option value="2">Halfpay</option>
                                                        <option value="3">Other</option>
                                                    </select>
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>






           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="SFP">Salary_Fromperiod</label>
                                                    <div class='input-group date'>
                                                        <input type='date' class="form-control" style="border-color: #009ca6" id='SFP' name="SFP" />
                                                        <span class="input-group-addon" style="border-color: #009ca6">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                   </div>
               </div>

               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="STP">Salary_Toperiod</label>
                                                    <div class='input-group date'>
                                                        <input type='date' class="form-control" style="border-color: #009ca6" id='STP' name="STP" />
                                                        <span class="input-group-addon" style="border-color: #009ca6">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>

           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Billtype">Billtype</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Billtype" name="Billtype">
                                                        <option selected>Select Billtype</option>
                                                        <option value="1">Permanent</option>
                                                        <option value="2">Temporary</option>
                                                    </select>
                   </div>
               </div>

               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Quarters">Quarters</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Quarters" id="Q_Yes" value="Y">
                                                            Yes
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label>
                                                            <input type="radio" name="Quarters" id="Q_No" value="N" checked="checked">
                                                            No
                                                        </label>
                                                    </div>
                   </div>

               </div>
               <div class="col-sm-1"></div>
           </div>


           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Quarters_Address">Quarters_Address</label>
                    <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Quarters_Address" name="Quarters_Address">
                   </div>
               </div>


               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="HRA_Type">HRA_Type</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="HRA_Type" name="HRA_Type">
                                                        <option selected>Select HRA_Type</option>
                                                        <option value="1">X</option>
                                                        <option value="2">Y</option>
                                                        <option value="3">Z</option>
                                                    </select>
                      
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>
           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="CCA_Type">CCA_Type</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="CCA_Type" name="CCA_Type">
                                                        <option selected>Select CCA_Type</option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">C</option>
                                                    </select>
                   </div>
               </div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Bank_Name">Bank_Name</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Bank_Name" name="Bank_Name">
                                                        <option selected>Select Bank_Name</option>
                                                        <option value="1">Indian Bank</option>
                                                        <option value="2">State Bank of India</option>
                                                        <option value="3">Canara Bank</option>
                                                    </select>
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>

           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="Branch_Name">Branch_Name</label>
                                                    <select class="form-control form-control-sm" style="border-color: #009ca6" id="Branch_Name" name="Branch_Name">
                                                        <option selected>Select Branch_Name</option>
                                                        <option value="1">Velachery</option>
                                                        <option value="2">Guindy</option>
                                                        <option value="3">Tambaram</option>
                                                    </select>
                     
                   </div>
               </div>
               <div class="col-sm-5">
                   <div class="forn-group">
                   <label class="font-weight-bold" for="IFSC_Code">IFSC_Code</label>
                   <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="IFSC_Code" name="IFSC_Code">
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>

           <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="MICRCode">MICRCode</label>
   <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="MICRCode" name="MICRCode">
                   </div>
               </div>
               <div class="col-sm-5">
                   <div class="form-group">
                   <label class="font-weight-bold" for="AccountNumber">AccountNumber</label>
                    <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="AccountNumber" name="AccountNumber">
                       
                   </div>
               </div>
               <div class="col-sm-1"></div>
           </div>
           <br />
           <div class="d-flex justify-content-center">
           <center>
            <button class="btn btn-sm btn-primary" style="font-weight:bold">SUMBIT</button>
            <button class="btn btn-sm btn-primary" style="font-weight:bold">CLEAR</button>
            </center>
           </div>




       </div><!--div colomn class-->        
   </div><!--div container class-->
   

   <br />
   <br />

   <footer style="background-color: #017298;">
       <div class="container d-flex justify-content-center">
           <p  style="padding-top: 5px; color: #ffffff">Designed and developed by NIC Chennai.</p>
       </div>
   </footer>
   
   <?php include('../footer.php');?>