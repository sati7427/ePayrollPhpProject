<?php

//echo $_GET['id'];exit;
include_once('db_con.php'); 
class Db_Class{
    private $table_name = 'userlogin';
    function createUser(){
        $sql = "INSERT INTO public.".$this->table_name."(username,pwd) "."VALUES('".$this->cleanData($_POST['username'])."','".$this->cleanData($_POST['pass'])."')";
        return pg_affected_rows(pg_query($sql));
    }
    function getUsers(){             
        $sql ="select * from public." . $this->table_name . " ORDER BY id DESC";
        return pg_query($sql);
    } 
    function getUserById(){    
  
        $sql ="select * from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 
    function deleteuser(){    
  
         $sql ="delete from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
        
        echo '<script type="text/javascript">';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        return pg_query($sql);
    } 
   
     function updateUser($data=array()){       
     
        $sql = "update public.userlogin set username='".$this->cleanData($_POST['edituser'])."',pwd='".$this->cleanData($_POST['editpass'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
	
    function cleanData($val){
         return pg_escape_string($val);
    }
	
	function returndata(){
		  $sql ="select *from public.userlogin ORDER BY id DESC";
        return pg_query($sql);
		echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
		
	}
}


?>