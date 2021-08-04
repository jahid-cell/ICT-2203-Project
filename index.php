<?php

   if(isset($_POST["btn-send"]))
   {
       $UserName=$_POST["name"];
       $Email=$_POST["Email"];
       $Phone=$_POST["Phone"];
       $Nationality=$_POST["Catagory"];
       $Suggestions=$_POST["Details"];
       $Message=$_POST["Message"];
       
       if(empty($UserName)||empty($Email)|| empty($Phone)||empty($Nationality))
       {
           header("location:index.php?error");

       }

       else{
           $to="padmabrodgedemo01@gmail.com";
           
           if(mail($to,&Email,$Phone,$Message)){
               header("location:index.php?success");
           }
       }
   }
   else
   {
       header("location:index.php?success")
   }


?>