<?php
include_once ('heads/head.account.php');
include_once ('nav.fot/navbar.php');
?>


    <section class="forms-section">
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>

                <form class="form form-login" action="includes/login.inc.php" method="post">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" name="email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" name="pwd" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" name="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>

                <form class="form form-signup" action="includes/signup.inc.php" method="post">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="email">E-mail
                            <input name="email" type="text" required></label>
                        </div>
                        <div class="input-block">
                            <label for="uid">Username
                            <input name="uid" type="text" required></label>
                        </div>
                        <div class="input-block">
                            <label for="pwd">Password
                            <input name="pwd" type="password" required></label>
                        </div>
                        <div class="input-block">
                            <label for="pwdrepeat">Confirm password
                            <input name="pwdrepeat" type="password" required></label>
                        </div>
                    </fieldset>
                    <button href="" type="submit" name="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>




<?php
include_once ('nav.fot/footer.php')
?>