<div class="login-container">

    <form action="/exec2/src/php/auth/process_login.php" method="post">

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="email" id="email">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input" type="password" name="passwd" id="passwd">
            </div>
        </div>

        <button type="submit">submit</button>

    </form>

    <a href="/exec2/src/php/auth/register.php">Register</a>

</div>