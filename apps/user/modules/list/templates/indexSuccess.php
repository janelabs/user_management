<html>
    <head>
        <title>User Management - Home</title>
    </head>

    <body>
        <div>
            <button id="addUser">Add User</button>

            <h3>List of Users</h3>

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
                        ?>
                        <tr>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                        </tr>
                        <?php
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
    </body>
</html>