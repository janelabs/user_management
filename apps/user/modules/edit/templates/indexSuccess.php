<?php
use_javascript('jquery.js');
use_javascript('jquery.custom.min.js');
use_javascript('user.js');
use_stylesheet('ui-lightness/jquery-ui-1.10.0.custom.min.css');
?>

<form name="frmEdit" id="frmEdit" method="post" action="../edit/save">

    <label for="uname">Name: </label>
    <input type="text" id="uname" name="uname" value="<?php echo $userName; ?>" /><br>

    <label for="bdate">Birth Date: </label>
    <input type="text" id="bdate" name="bdate" readonly="readonly" value="<?php echo $birthDate; ?>" /><br>

    <label for="address">Address: </label>
    <input type="text" id="address" name="address" value="<?php echo $address; ?>" /><br><br>

    <input type="hidden" value="<?php echo $uid; ?>" id="uid" name="uid" />
    <input type="submit" value="Save" />
    <input type="button" value="Cancel" onclick=" User.goHome(); " />
</form>

<script type="text/javascript">
    $(function(){
        User.initView();
    });
</script>