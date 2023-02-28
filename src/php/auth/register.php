<?php include_once('../headers.php') ?>

<div class="register-container uk-position-center">

    <form class="uk-flex uk-flex-column uk-flex-center uk-flex-middle" action="./process_register.php" method="post">
    
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input uk-form-width-large" type="text" name="username" id="username">
            </div>
        </div>
        
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                <input class="uk-input uk-form-width-large" type="text" name="email" id="email">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-width-large" type="password" name="passwd" id="passwd">
            </div>
        </div>

        <div class="uk-flex uk-flex-column uk-flex-center uk-width-1-3">
            <button class="uk-button uk-button-primary uk-margin-top" type="submit">submit</button>
            <a class="uk-button uk-button-default uk-margin" href="/exec2/src/php/">Login</a>
        </div>
        
    </form>

</div>