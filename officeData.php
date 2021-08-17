<?php 
//session_start();

?>
<?php
include('header.php');
require_once('Connections/db_con.php');
 
$sql = "SELECT * FROM userlogin";
$result = pg_query($dbconn,$sql);
$arr_users = [];

if (pg_num_rows($result) > 0) {
    $arr_users = pg_fetch_all($result);
} 
?>



<?php

if(isset($_POST['deletebtn'])){
   $ret_val = $obj->deleteuser();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
?>

<?php
if(isset($_POST['Createsubmit']) and !empty($_POST['Createsubmit'])){
$ret_val = $obj->createUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Saved Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>


<?php

if(isset($_POST['editbtn']) and !empty($_POST['editbtn'])){
$ret_val = $obj->updateUser();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Updated Successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<script>

    function Editbtn(id) {
    
      $("#id").val(id);
      $.post("editval.php", {
              id: id
          },
          function (data, status) {
            
          var data = data.split('=');
          $("#editid").val(data[0]);
          $("#edituser").val(data[1]);
          $("#editpass").val(data[2]);

          }
      );      
      $("#modal-edit").modal("show");
  }


</script>

                <div style="text-align: right;">
                    <button type="button" class="btn btn-sm bg-gradient-success" data-toggle="modal" id="test" data-target="#modal-create">
                  Add User
                </button>
                              
              </div><br/>

    <div class="card">             
              <!-- /.card-header -->
              <div class="card-body">

    <table id="userTable" class="table table-striped table-bordered" style="width:100%" >
        <thead style='background-color: #017298;'>
            <th>user</th>
            <th>pass</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if(!empty($arr_users)) { ?>
                <?php foreach($arr_users as $user) { ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['pwd']; ?></td>
                         <form method="post">
                         <td style="max-width:10px ;text-align: right;">
                        <input type="submit" class="btn btn-sm bg-teal waves-effect"  value="Update" 
                        onClick="Editbtn(<?php echo $user["id"]?>);">
                         <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn bg-gradient-danger btn-sm" name= "deletebtn" value="Delete">
                         <input type="hidden" value="<?php echo $user['id']; ?>" name="id">
                         
                         </td></form>
                    </tr>
                <?php } ?>
            <?php } ?>
            

        </tbody>
    </table>

</div>
</div>


<!--MODELS-->
 <div class="modal fade" id="modal-create">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #017298;text-align: center">
              <h4 class="modal-title" style="color: white">Insert User Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="panel panel-primary">
        
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="username" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">Pass:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="password" name="pass" required>
               </div>
            </div>               
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-success" name="Createsubmit"  value="Submit">
               </div>
            </div> 
         </div>      
         </form>
          </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




      <!--model edit-->
       <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #017298">
              <h4 class="modal-title" style="color: white">Update User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="panel panel-primary">
        
            <form class="form-horizontal" method="post">
            <div class="panel-body">             
             <div class="form-group">
               <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" id="edituser" type="text" name="edituser" required>
               </div>
            </div>
             <div class="form-group">
               <label class="control-label col-sm-2">pass:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" id="editpass"type="text" name="editpass" required>
                  
               </div>
            </div>
            <input type="hidden" id="editid" name="id">
           
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="editbtn" value="Update">                    
                </div>
            </div> 
        </div>      
</form>
</div>
            </div>
            <!--<div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });

 //$('#test').click(function(){

    //    $("#model-lg").modal("show");
   
 //});
         

    </script>



<?php 
include('footer.php');
?>