<?php

    if ($_POST['username'] == "researcher")
    {
        if ($_POST['password'] == "123")
        {
            header("Location: ../views/researcher/dashboard.php");
        }
        else 
        {
            header("Location: ../index.php");
        }
    }

?>