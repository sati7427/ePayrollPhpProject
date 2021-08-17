<?php
 include_once('Connections/db_con.php');
 $id = $_POST['id'];
 $db=$dbconn;
?>
<?php


$statement ="select * from public.userlogin  where id ='".$id."'";


    $stmt = pg_query($db,$statement);
    //$stmtt=pg_execute($db,$statement,array("success"));
    $result = pg_fetch_all($stmt);
    foreach($result as $key=>$value)
        {
            echo $value['id'];
            echo "=";
            echo $value['username'];
       		echo "=";
            echo $value['pwd'];
            echo "=";

        }
        ?> 





