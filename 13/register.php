<?php

require_once 'includes/header.php';

?>

<div>
    <h1>Register</h1>
    <p>Already have an account? <a href="login.php">Login Here</a></p>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <button type="submit">Register</button>
    </form>
</div>

<?php

require_once 'includes/footer.php';

?>