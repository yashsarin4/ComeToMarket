<?php
    session_start();
    session_destroy();
    header("Location: ../new_home/index.php"); //home page of the website
