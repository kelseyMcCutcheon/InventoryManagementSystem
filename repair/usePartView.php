<?php
    session_start();
    // checking if user is authorized - repair
    if ($_SESSION['user_role'] != 2) {
        die("unauthorized access");
    }
    require './repair.php';
    $parts = fetchInventory();

?>

<html>
    <head>
        <title>Use Part</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Use Part | <a href="./repairView.php">Repair Home</a></h1>
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
                            <form name="usePart" action="usePart.php" method="post">
                                <input type="hidden" name="use_part_id" value=<?php echo $row['partID']; ?> >
                                <input type="submit" name="s" value="Use Part" >
                            </form>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
  
    </body>
</html>