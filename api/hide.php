<?php

require_once("../common/connection.php");
require("../common/session_mng.php");
    if(checkSession()){
        $id=$_GET["id"];
            $sql="update posts set status=0 where id=$id";
            $result=$conn->query($sql);
            if($result){
                header("Location: http://localhost:8080/quotation/pages/profile.php");
            }
            else{
                echo "Error in ".$sql."<br>".$conn->error;
            }
        }
        
    
    $conn->close();
?>