<?php
    use_javascript('jquery.js');
    use_javascript('jquery.custom.min.js');
    use_javascript('user.js');
    use_stylesheet('ui-lightness/jquery-ui-1.10.0.custom.min');
?>
<div>
    <p>
        <span>Name: </span>
        <strong><?php echo ucwords($userName); ?></strong>
    </p>

    <p>
        <span>Birth Date: </span>
        <strong><?php echo $birthDate; ?></strong>
    </p>

    <p>
        <span>Address: </span>
        <strong><?php echo $address; ?></strong>
    </p>

    <p>
        <input type="button" value="Back" onclick=" User.goHome(); " />
    </p>
</div>