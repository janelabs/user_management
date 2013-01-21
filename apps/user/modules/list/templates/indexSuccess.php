<?php
    use_javascript('jquery.js');
    use_javascript('jquery.custom.min.js');
    use_javascript('user.js');
    use_stylesheet('ui-lightness/jquery-ui-1.10.0.custom.min.css');
?>
<div>
    <h3>List of Users</h3>
    <a href="../add/index">Add User</a><br><br>
    <!--LIST OF USERS -- START -->
    <table id="userListTbl" border='1' cellpadding="4" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php
            if(!empty($user)):
                foreach($user AS $u):
                    ?>
                    <tr>
                        <td><?php echo ucwords($u->getName()); ?></td>
                        <td><?php echo date('F j, Y', strtotime($u->getBirthdate())); ?></td>
                        <td><?php echo ucwords($u->getAddress()); ?></td>
                        <td>
                            <button class="viewUser" uid="<?php echo $u->getId(); ?>">View</button>
                            <button class="editUser" uid="<?php echo $u->getId(); ?>">Edit</button>
                            <button class="deleteUser" uid="<?php echo $u->getId(); ?>">Delete</button>
                        </td>
                    </tr>
                    <?php
                endforeach;
            else:
                ?>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        No record(s) found.
                    </td>
                </tr>
                <?php
            endif;
        ?>
    </table>
    <!--LIST OF USERS -- END -->
</div>

<script type="text/javascript">
    $(function(){
        User.initView();
    });
</script>
