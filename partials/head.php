<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>

    <?php
    if(isset($success)){?>

    <script>
        setTimeout(() => {
            swal("Success","<?php echo $success ?>","success");
        },100);
    </script>

    <?php } ?>

    <?php
    if(isset($error)){
        
    ?>

    <script>
        setTimeout(() => {
            swal("Failed", "<?php echo $error ?>" ,"error");
        },100);
    </script>

    <?php } ?>
    </head>
