<?php if (isset($menu)) { 
      echo $menu; ?>
      <?php } ?>
    </div>
    <?php if (isset($status_text)) { ?>
      <?php echo '<h3>'.$status_text.'</h3>'; ?>
      
    <?php } 

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>[sign in]</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   
    <style type="text/css">
     *          {background-color:black;}

      .wrapper  {width: 100%; height: 20%; 
                float: middle;
                margin: auto;
                margin-top: 20%;
                background-color: none;}

      .login    {width: 13.5em; height: 2.3em;
                float: middle;
                margin: auto;
                background-color: none;}


      .image  {width: 8em; 
              padding-top: 0%; 
              margin: auto; 
              float: middle; 
              background-color: none;}

    </style>
  </head>
  <body>
  
      <hr />

    <div class="wrapper">

      <p class ="login">
           <?php print_r($content); ?>
      </p>


</div>


  </body>
</html>
