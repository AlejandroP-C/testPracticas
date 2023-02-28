<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.2/dist/js/uikit-icons.min.js"></script>
</head>

<div class="login-container">

    <form action="./process_register.php" method="post">
    
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="username" id="username">
            </div>
        </div>
        
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: envelope"></span>
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

    <a href="/exec2/src/php/">Login</a>

</div>