<?php
    if(isset($_Post['submit'])){
        $name=$_Post['name'];
        $email=$_Post['email'];
        $phone=$_Post['phone'];
        $to='lalteshsharma1997@gmail.com';
        $subject='Form-submission';
        $message="Name: ".$name."\n"."Phone: ".$phone."."Wrote the following: "."\n\n".$email;
        $headers:"From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo"<h1>Sent sucessfully" ".$name.",contact you</h1>";
    }
    else{
        echo"failed";
    }
}


?>