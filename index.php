<html>
  <head> 
   <title>HTML Forms Input and Display in PHP</title>
  </head>
  <body> 
    <style type="text/css">
      body {
        font-family: arial;
            size: 12px;
      };
    </style>

   <?php
     $display="";
     $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname   = $_POST['lastname'];

   if(isset($_POST['submit'])) {
      $display .= "<h2> Display Results </h2>";
      $display .= "First Name  : " .
                  strtoupper($firstname) ."<br/>";
      $display .= "Middle Name : " . 
                  strtoupper($middlename)."<br/>";
      $display .= "Last Name   : " . 
                    strtoupper($lastname)."<br />";
    }

  if (isset($_POST['clear'])) {
     $firstname ="";
     $middlename ="";
     $lastname ="";
     $display ="";
     } 
   ?>   

      <h2> HTML Forms Input and Display in PHP </h2>
  <form method="post">
     <p>First Name: <input type="text" name="firstname"
      value="<?php echo $firstname; ?>" autofocus
      ></p>

     <p>Middle Name: <input type="text" name="middlename"
      value="<?php echo $middlename; ?>"></p>

     <p>Last Name: <input type="text" name="lastname" 
      value="<?php echo $lastname; ?>"></p>

     <input type="submit" name="submit" value="Submit" />
     &nbsp;&nbsp;&nbsp;
     <input type="submit" name="clear" value="Clear" />
  </form>

    <?php
      echo $display;
     ?> 
   </body>
 </html>
