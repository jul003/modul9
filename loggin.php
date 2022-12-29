<?php
session_start();

if(isset($HTTP_POST_VARS["insert"]))
{
    if(($HTTP_POST-VARS["user"]!="")&&($HTTP_POST_VARS["password"]!=""))
    {
        session_register("session_status");
        session_register("session_user");
        session_register("session_password");
        $session_status="login";
        $sesion_user=$HTTP_POST_VARS["user"];
        $sesion_password=$HTTP_POST_VARS["password"];
        header("Location: proses_loggin.php");
        exit;
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan session</h2>
    <pre>
        <form action="loggin.php" method="post">
            User Name     : <input type="text" name="user" size="15">
            User Password : <input type="password" name="password" size="15">
                            <input type="hidden" name="insert">
                            <input type="submit" name="loggin" value="Loggin">
</form>
</pre>
</body>
</html>