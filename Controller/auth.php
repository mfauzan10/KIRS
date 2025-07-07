<?php

    if ($_POST['username'] == "researcher")
    {
        if ($_POST['password'] == "123")
        {
            header("Location: ../Views/researcher/dashboard.php");
        }
        else 
        {
            header("Location: ../index.php");
        }
    }

?>