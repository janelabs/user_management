<?php
    use_javascript('jquery.js');
    use_javascript('jquery.custom.min.js');
    use_javascript('user.js');
    use_stylesheet('ui-lightness/jquery-ui-1.10.0.custom.min.css');
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
        <strong><?php echo ucwords($address); ?></strong>
    </p>

    <p>
        <input type="button" value="Back" onclick=" User.goHome(); " />
    </p>
</div>

<script type="text/javascript">
    $(function(){
        $('input[type="button"]').button();
    });
</script>