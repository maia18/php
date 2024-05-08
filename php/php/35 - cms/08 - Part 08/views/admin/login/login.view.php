<?php if (!empty($loginError)): ?>
    <p>An error occured, the username and password combination could not be found.</p>
<?php endif; ?>
<form method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/login']);?>">

    <label for="login-username">Username:</label>
    <input type="text" name="username" id="login-username" value="<?php if (!empty($_POST['username'])) echo e($_POST['username']); ?>" />

    <label for="login-password">Password:</label>
    <input type="password" name="password" id="login-password" value="" />
    <br />
    <input type="submit" value="Login!" />

</form>