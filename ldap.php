<?php

session_start();
$output = NULL;
if(isset($_SESSION['loggedin'])){
  //If the user is logged in load up the IT Start page
  header("Location: index.php");
} else {

    // Check if username or password fields are empty.
    // If either are empty, simply reload the page
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        header('location: login.php');
        exit;
    }

    // List of authorized users
    $authorized_users = array("jlaroche", "other-it-staff", "more-it-personnel");

    // Check if AD user trying to log in is in the Authorized Users array above
    // If they are, proceed with login. If they are not, simply reload the page
    if (in_array($_POST['username'], $authorized_users)) {

      // LDAP Connection Info:
      // ---------------------

        // What Domain are we connecting to?
      $ldap = ldap_connect("yourdomain.local"); // replace yourdomain.local with your domain name (keep the quotes)
      $domain = "yourdomain\\"; // replace yourdomain with your domain name (keep the quotes and the backslashes)

        // Pulling username and password info from form and saving as variable
      $username = trim($_POST['username']);
      //$password = trim($_POST['password']);

        // Combine Domain and Username for LDAP Login
      $domain_user = $domain . '' . $username;

        // Attempt to Authenticate user
      if ($bind = @ldap_bind($ldap, $domain_user, $_POST['password'])) {
        // Authentication Success: Log them in
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['user'] = $username;
        //echo "Authenticated!";
        header('location: index.php');
      } else {
        // Authentication Error!: Don't let them in!
        //$_SESSION['loggedin'] = FALSE;
        //echo "Invalid Credentials!";
        header('location: login.php');
      }

    } else {
      header('location: login.php');
      exit;
    }

}
?>
