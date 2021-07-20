<?php

require_once("../common/connection.php");
require("../common/session_mng.php");
    if(checkSession()){
        $id=$_POST["id"];
        $likes=$_POST["likes"];
        $type=$_POST["type"];

        if($type=="1"){
            $newlikes=(int)$likes+1;
            $sql="update posts set likes=$newlikes where id=$id";
            $result=$conn->query($sql);
            if($result){
                echo "success";
            }
            else{
                echo "Error in ".$sql."<br>".$conn->error;
            }
        }
        if($type=="0"){
            $newlikes=(int)$likes-1;
            $sql="update posts set likes=$newlikes where id=$id";
            $result=$conn->query($sql);
            if($result){
                echo "success";
            }
            else{
                echo "Error in ".$sql."<br>".$conn->error;
            }
        }
    }
    $conn->close();
?>