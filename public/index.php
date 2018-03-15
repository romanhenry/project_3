<?php

require_once("../private/initialize.php");

// if form has been submitted get variables and calc numbers then
// set them to the array

if(is_post_request()){

  $userName = $_POST['userName'];
  $password = $_POST['password'];

  $admin = User::find_by_username($userName, $password);

  if($admin != false) {
    $session->login($admin);
    redirect_to(url_for('../public/home.php'));
  } else {
    echo "Passwords do not match!";
  }

}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Retirement Calculator | Login Page</title>
    <link rel="stylesheet" href="stylesheets/styles.css?modified=211009">
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Blog</span> Manager</h1>
        </div>
        <nav>

        </nav>
      </div>
    </header>

  <section id="boxes">
    <div class="container">
      <h2>Login Page</h2>
      <form action="index.php" method="post">
      <p>User Name: <input type="text" name="userName" /></p>
      <p>Password: <input type="password" name="password" /></p>
      <input type="submit" name="submit" value="submit" />
      </form>
    </div>
  </section>
  </body>

</html>


<?php

include(SHARED_PATH . '/public_footer.php');
?>
