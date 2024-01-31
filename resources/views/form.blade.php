<form method="post" action="test">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">Submit</button>
</form>
