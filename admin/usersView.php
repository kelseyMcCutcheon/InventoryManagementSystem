<?php
    session_start();
    // checking if user is authorized
    if ($_SESSION['user_role'] != 1) {
        die("unauthorized access");
    }
    require './admin.php';
    $users = fetchUsers();

?>

<html>
    <head>
        <title>Manage Users</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Manage Users | <a href="./adminView.php">Admin Home</a></h1>
        <h4 id="usersFormMsg"><?php if(isset($_SESSION['form_msg'])){echo $_SESSION['form_msg'];}?></h4>
        <div id="addUserDiv">
            <table>
                <form name="add_user" action="addUser.php" method="post">
                    <tr>
                        <th>Email: </th>
                        <th><input type="text" name="email" required></th>
                    </tr>
                    <tr>
                        <th>First Name: </th>
                        <th> <input type="text" name="fn" required></th>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <th><input type="text" name="ln" required></th>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <th><input type="text" name="pw" required></th>
                    </tr>
                    <tr>
                        <th>User Role</th>
                        <th><select name="role" required>
                                    <option value="">None</option>    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="submit" name="s" value="Add User"></th>
                    </tr>
                </form>
            </table>
        </div>
        
        <div id="userTableDiv">
            <!-- https://stackoverflow.com/questions/4746079/how-to-create-a-html-table-from-a-php-array -->
            <table id="userTable">
                <thead>
                    <tr>
                        <th><?php echo implode('</th><th>', array_keys(current($users))); ?></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $row): array_map('htmlentities', $row); ?>
                        <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                        <td>
                            <form name="deleteUser" action="deleteUser.php" method="post">
                                <input type="hidden" name="delete_user_id" value=<?php echo $row['id']; ?> >
                                <input type="submit" name="s" value="Delete User" >
                            </form>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="updateUserDiv">
            <form name="update_user" action="validateUserUpdate.php" method="post">
                <label for="users">User to modify:</label>
                    <select name="users" required>
                        <option value="">None</option>
                        <?php foreach($users as $row): array_map('htmlentities', $row);?>
                            <option value=<?php echo $row['id']?> > <?php echo $row['id']?> </option>
                        <?php endforeach; ?>
                    </select>
                <label for="options">Item to modify:</label>
                    <select name="options" required>
                        <option value="">None</option>
                            <?php foreach($users[0] as $key=>$value){
                                //dont want to be able to modify id
                                if ($key != "id") {
                                    echo "<option value=" . $key .">" . $key . "</option>";
                                }}?>
                    </select>
                <input type="text" id="updateVal" name="updateVal" required>
                <input type="submit" name="s" value="Update User">
            </form>
        </div>
    </body>
</html>