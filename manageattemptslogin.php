<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10026: Manage Attempts Login Page" />
  <meta name="keywords" content="HTML, Forms" />
  <meta name="author" content="Alex Nikolov" />
  <link href="styles/style.css" rel="stylesheet"/>
  
  <!--Reference to external responsive CSS File-->
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>

  <title>Manage Attempts Login</title>
</head>
<body>

  <?php include 'header.inc'; ?>
	<div id="content">
	<?php include 'menu.inc'; ?>
	<div id="article1">

  <h4>
    Quiz Management Login
  </h4>

  <form method="post" action="manageattempts.php" >
    <fieldset>
      <legend class="studentdetails">
        <h4>Username/Login (hint: try admin/admin)</h4>
      </legend>

      <p><label for="username">Username</label> 
        <input type="text" name="username" id="username" size="20" required="required"/>
      </p>
      <p>
        <label for="password">Password</label> <input type="text" name="password" id="password" size="20" required="required"/>
      </p>
    </fieldset>

    <input type= "submit" value="Submit"/>
  </form>

</div>
</div>

<?php include 'footer.inc';?>

</body>
</html>