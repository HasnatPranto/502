<?php
    session_start();

    if(isset($_POST['Logout'])) {
        if(session_destroy())
            header("Location: InitialPage.php");
    }
?>

<html>
    <link rel="stylesheet" href="stylesheet.css">
    <body>
        <div id="bg-image" align="center">

            <div style="font-size: 50px;padding:50px 50px 20px 50px ">
                W e L c O m E!<br>
                <div style="font-size: 40px;color: deeppink; font-style: italic"> <marquee> <?php echo $_SESSION['user']; ?></marquee></div>
            </div>
            <form method="post">
                <input id='lb' type="submit" name="Logout" value="Log Out"/>
            </form>
        </div>
    </body>
</html>