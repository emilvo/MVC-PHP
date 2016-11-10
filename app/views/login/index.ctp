<?php
if (!empty($error)) {
    echo
        '<div class="alert alert-warning">
            '.$error.'
        </div>';
}
?>
<div class="login-form-1">
    <form id="login-form" class="text-left" method="post">
        <div class="login-form-main-message"></div>
        <div class="main-login-form">
            <div class="login-group">
                <div class="form-group">
                    <label for="lg_username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="lg_password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                </div>
                <div class="form-group login-group-checkbox">
                    <input type="checkbox" id="lg_remember" name="lg_remember">
                    <label for="lg_remember">remember</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-chevron-right"></i> Login</button>
        </div>
        <div class="etc-login-form">
            <p>forgot your password? <a href="#">click here</a></p>
            <p>new user? <a href="#">create new account</a></p>
        </div>
    </form>
</div>