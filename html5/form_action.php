<html>
    <body>
        Name:
    <?php
        $name = $_POST['user_name'];
        $email  = htmlspecialchars($_POST['user_mail']);
        $msg  = htmlspecialchars($_POST['user_message']);
      
        echo $name, " <br /> Email: ", $email, "<br /> Msg: ",$msg;
      ?>
    </body>
</html>

