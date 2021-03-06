<?php include('../header.php');?>

<script src="../Styles/js/bootstrap-datepicker.js"></script>
    <link href="../Styles/css/datepicker.css" rel="stylesheet" /> 
    <h3 class="text-center">Employee Details</h3>
    <br />
    <div class="container-fluid">
        <!-- Charts -->
        <div class="col-md-12 p-sm-5" style="border-color: #009ca6;border-style: solid;">
            <div class="w-sm-50 w-auto mx-auto">

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <div class="form-group">
                         <label class="font-weight-bold" for="Gpf_No">Gpf_No/Suffix</label>
                            <input class="form-control form-control-sm" Style="border-color: #009ca6"  id="Gpf_No">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label Style="color: white" runat="server">--</label>
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
                        <label class="font-weight-bold" for="Name">Name</label>
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
                    <label class="font-weight-bold" for="any_post_action">Post Type</label>
                     <div class="radio">
                       <label>
                      <input type="radio" name="any_post_action" id="PostType_Mini" value="M" checked="checked">Ministerial</label>&nbsp;&nbsp;&nbsp;&nbsp;
                       <label><input type="radio" name="any_post_action" id="PostType_Exec" value="E"> Executive</label>
                     </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="PFType">PFType</label>
                     <select class="form-control form-control-sm" style="border-color: #009ca6" id="PFType" name="PFType">
                                                    <option selected>Select PFType</option>
                                                    <option value="1">NPS</option>
                                                    <option value="2">CPS</option>
                                                    <option value="3">AISPF</option>
                                                    <option value="3">TPF</option>
                                                </select>                           
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="Category">Category</label>
                                                <select class="form-control form-control-sm" style="border-color: #009ca6" id="Category" name="Category">
                                                    <option selected>Select Category</option>
                                                    <option value="1">Others</option>
                                                    <option value="2">AIS</option>
                                                </select>
                    </div>
                </div>

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
                <div class="col-sm-1"></div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label  class="font-weight-bold" for="DOB">Date of Birth (dd/mm/yyyy)</label>
                                                <div class='input-group date'>
                                                    <input type='date' class="form-control" style="border-color: #009ca6" id='temp_con_godate' name="temp_con_godate" />
                                                    <span class="input-group-addon" style="border-color: #009ca6">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="per_go_date">Date of Retirement (dd/mm/yyyy)</label>
                                                <div class='input-group date'>
                                                    <input type='date' class="form-control" style="border-color: #009ca6" id='per_go_date' name="per_go_date" />
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
                    <label class="font-weight-bold" for="temp_Join">DOJ Govt. Service (dd/mm/yyyy)</label>
                                                <div class='input-group date'>
                                                    <input type='date' class="form-control" style="border-color: #009ca6" id='temp_Join' name="temp_Join" />
                                                    <span class="input-group-addon" style="border-color: #009ca6">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="Gender">Gender</label>
                                                <select class="form-control form-control-sm" style="border-color: #009ca6" id="Gender" name="Gender">
                                                    <option selected>Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Transgender</option>
                                                </select>
                    </div>

                </div>
                <div class="col-sm-1"></div>
            </div>


            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="Marital status">Marital status</label>
                                                <select class="form-control form-control-sm" style="border-color: #009ca6" id="Marital status" name="Marital status">
                                                    <option selected>Select Marital status</option>
                                                    <option value="1">Married</option>
                                                    <option value="2">UnMarried</option>
                                                </select>
                    </div>
                </div>


                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="FathersName">FathersName</label>
                                                <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="FathersName"
                                                       name="FathersName">
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="SpouseName">SpouseName</label>
                    <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="SpouseName" name="SpouseName">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="Aadhar No">Aadhar No</label>
                     <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Aadhar No" name="Aadhar No">
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="PANNo">PANNo</label>
                    <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="PANNo"name="PANNo">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="forn-group">
                    <label class="font-weight-bold" for="Physically_Chalelnged">Physically_Chalelnged?</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Physically_Chalelnged" id="Phy_Yes" value="Y">
                                                        Yes
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input type="radio" name="Physically_Chalelnged" id="Phy_No" value="N" checked="checked">
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
                    <label class="font-weight-bold" for="Email_Id">Email_Id</label>
                     <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Email_Id"  name="Email_Id">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label class="font-weight-bold" for="Address">Address</label>
                   <input type="textbox" class="form-control form-control-sm" style="border-color: #009ca6" id="Address"name="Address">
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br />
            <div class="d-flex justify-content-center">
                <center>
                <center>
       <button class="btn btn-sm btn-primary" style="font-weight:bold">SUMBIT</button>
            <button class="btn btn-sm btn-primary" style="font-weight:bold">CLEAR</button>
                </center>
               </center>
            </div>

        </div><!--div colomn class-->        
    </div><!--div container class-->
    

    <br />
    <br />

    <footer style="background-color: #017298;">
        <div class="container d-flex justify-content-center">
            <p style="padding-top: 5px; color: #ffffff">Designed and developed by NIC Chennai.</p>
        </div>
    </footer>
	
	<?php include('../footer.php');?>