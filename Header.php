<?php
session_start();
include "Server/GroceryDBConnection.php";

  function getcategory()
  {
      global $DB;
      $getCatsQuery = "select * from Category";
      $getCatsResult = mysqli_query($DB,$getCatsQuery);
      while($row = mysqli_fetch_assoc($getCatsResult)) {
          $cat_title = $row['Title'];
          echo " <a class='dropdown-item' href='#' style='padding:0px;border-top: 1px solid green; color: green'>$cat_title</a>";
      }
  }

  ?>
<!--<div id="header">
    <!--  NavBar Area -->
    <nav class="navbar navbar-expand-md navbar-dark bg-light navbar-fixed-top"   style="padding:0px 0px 0px 0px ;margin-bottom: 0px; border-bottom: 2px solid white" >
        <span class="navbar-text navbar-left d-inline " style=" padding-bottom: 0px;padding-top: 0px ; margin:0px 0px 0px 0px">
            <a href="Index.php" style="color: green; font-size:xx-large;font-family: 'Franklin Gothic Medium Cond';font-weight: bolder;"> CityGroccer's </a>
        </span>

        <button class="navbar-toggler navbar-right" type="button" data-toggle="collapse" data-target="#collapse_target" style="padding-left:0px ;padding-right:0px;">
            <span class="sr-only">Togggle navigation</span>
            <div  class="fa fa-align-justify fa-2x nav navbar-right" style="opacity: 0%;color: green;" ></div>
        </button>
        <div class=" collapse navbar-collapse" id="collapse_target">
            <ul class= "nav navbar-nav navbar-right" style="border-left: 1px black"   >
                <li class="dropdown">
                    <a href="Header.html" class=" dropdown-toggle fa fa-home " data-toggle="dropdown" data-target="#dropdowntarget" style="color: green"> Categories</a>
                    <div class="dropdown-menu bg-light" aria-labelledby="dropdowntarget" style="padding: 0px">
                        <?php
                        getcategory();?>
                    </div>
                </li>
                <?php
                if(!isset($_SESSION['useremail']))
                {
                    echo "<li >
                    <a href= 'Login.php' class='fa fa-sign-in-alt' style='padding-right: 30px;color: green'> Login</a>
                     </li>";
                }
                else{
                    echo "<li >
                    <a href= 'Logout.php' class='fa fa-sign-in-alt' style='padding-right: 30px;color: green'> Logout</a>
                     </li>";
                }
                ?>
            </ul>
        </div>

    </nav>
</div>-->
