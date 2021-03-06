<?php
    $rootDir = "../";
    
    require_once($rootDir."back/user.php");
    
    User::checkLogin(UserType::Company, $rootDir);
    $user = $_SESSION["user"];
    
    if(!$user->info["verified"]) header("Location: index.php");
    
    require_once($rootDir."back/internship.php");
    
    $id = $_GET["id"];
    
    /*
        TODO: Check that id and make sure this company is the owner of this internship
    */
    
    $internship = new Internship($id);
    $internship->close();
    
    /*
        TODO: Email company
    */
    
    header("Location: index.php");