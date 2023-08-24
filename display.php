<?php
session_start();
require 'dbcon.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styleforindex.css">
  </head>
  <body>
    <div>
    
        <div class="showcase">
            <!--Navbar Top Section-->
            <div class="navbar-top">
              <ul class="left">
                <li><a href="#">Firm(LOGO)</a></li>
                <li><a href="#">Number</a></li>
                <li><a href="#">Address</a></li>
                <li><a href="#">Address</a></li>
              </ul>
              <ul class="right">
                
                <li><a href="#"><i class="fas fa-user me" id="user-btn"></i></a></li>
                <li><a href="#"><i class="fas fa-search" id="user-btn"></i></a></li>

              </ul>
            </div>
            <!--Navbar Bottom Section-->
            <div class="navbar-bottom">
              <ul class="menu-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="imageindex.php">Cases</a></li>
                <li><a href="index.php">New Entry</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
          </div>
        </div>

    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>