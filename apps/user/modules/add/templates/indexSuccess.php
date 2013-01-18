<?php
use_javascript('jquery.js');
use_javascript('user.js');
?>

<form name="frmAdd" id="frmAdd" method="post" action="../add/add">

    <label for="uname">Name: </label>
    <input type="text" id="uname" name="uname" /><br>

    <label for="bdate">Birth Date: </label>
    <input type="text" id="bdate" name="bdate" /><br>

    <label for="address">Address: </label>
    <input type="text" id="address" name="address" /><br><br>

    <input type="submit" value="Add" />
    <input type="button" value="Cancel" onclick=" User.goHome(); " />
</form>