<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <?php 
        if(isset($_POST['success'])){
            $success = "Congatulations!!!";
     } ?>

    <form action="" method="post">
        <input type="submit" value="success" name="success">
        <label for="success"></label>
    </form>
    
    <?php
    if(isset($success)){?>

    <script>
        setTimeout(() => {
            swal("Success","<?php echo $success ?>","success");
        },100);
    </script>

    <?php } ?>
    <script src="./js/swal.js"></script>
</body>
</html>