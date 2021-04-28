<?php
    session_start();
    // checking if user is authorized - admin
    if ($_SESSION['user_role'] != 1) {
        die("unauthorized access");
    }
    require './admin.php';
    $parts = fetchInventory();

?>


<html>
    <head>
        <title>Remove Inventory</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Remove Inventory | <a href="./adminView.php">Admin Home</a></h1>
        <h4 id="inventoryFormMsg"><?php if(isset($_SESSION['form_msg'])){echo $_SESSION['form_msg'];}?></h4>
        
        <div id="inventoryTableDiv">
            <!-- https://stackoverflow.com/questions/4746079/how-to-create-a-html-table-from-a-php-array -->
            <table id="inventoryTable">
                <thead>
                    <tr>
                        <th><?php echo implode('</th><th>', array_keys(current($parts))); ?></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($parts as $row): array_map('htmlentities', $row); ?>
                        <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                        <td>
                            <form name="removePart" action="removeInventory.php" method="post">
                                <input type="hidden" name="remove_part_id" value=<?php echo $row['partID']; ?> >
                                <input type="submit" name="s" value="Remove Part" >
                            </form>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
  
    </body>
</html>
        