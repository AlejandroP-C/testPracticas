<?php include_once('../headers.php') ?>

<div class="upload-container uk-position-center">
    <form class="uk-flex uk-flex-column uk-flex-center uk-flex-middle" action="/exec2/src/php/forms/process_upload.php" method="post" enctype="multipart/form-data">

        <input class="uk-margin" type="file" name="file" id="file" multiple>
        <textarea class="uk-textarea uk-margin-medium" name="descript" id="descript"></textarea>

        <button class="uk-button uk-button-primary uk-margin-top" type="submit">submit</button>

    </form>
</div>