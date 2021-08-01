<?php
include 'includes/head.php';
// require 'includes/header.php';
require_once 'includes/header.php';
?>

<h1>Welcome</h1>
<h1><?php
    introduction();
    ?></h1>


<?php
include 'includes/footer.php';

//include - path is wrong - we only get warning
//Require - path is wrong - the script will give a fatal error.
?>