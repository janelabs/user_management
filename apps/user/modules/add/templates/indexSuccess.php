<?php
    use_javascript('jquery.js');
    use_javascript('jquery.custom.min.js');
    use_javascript('user.js');
    use_stylesheet('ui-lightness/jquery-ui-1.10.0.custom.min');
?>

<form name="frmAdd" id="frmAdd" method="post" action="../add/add">

    <label for="uname">Name: </label>
    <input type="text" id="uname" name="uname" /><br>

    <label for="bdate">Birth Date: </label>
    <input type="text" id="bdate" name="bdate" readonly="readonly" /><br>

    <label for="address">Address: </label>
    <input type="text" id="address" name="address" /><br><br>

    <input type="submit" value="Add" />
    <input type="button" value="Cancel" onclick=" User.goHome(); " />
</form>

<script type="text/javascript">
    $(function(){
        User.initView();
    });
</script>