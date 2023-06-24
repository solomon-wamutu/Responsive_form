<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Login</h2>

                    <div class="input-box">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" name = "name" required>
                        <label for="name">Name</label>
                    </div>

                    <div class="input-box">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name = "email" required>
                        <label for="email">Email</label>
                    </div>
                    
                    <div class="input-box">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name = "password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="forget">
                        <span><input type="checkbox">Remember me</span><a href="#">Forgot Password</a>
                    </div>
                    <?php
                    $length = 8;
                    $_Number =  substr(str_shuffle('0123456789AaBaCc@D$eE!GgF#JkLpVW'), 1, $length);
                    ?>
                    <input type="button" value="Generate OTP" class="magex"id="magex"  name = "login"><input type="text" class="gotp" value="<?php echo $_Number ?>">

                    <br>
                    <!-- <div class="input-box">
                        <button id = "input-box">Generate OTP</button>
                    </div> -->

                    <input type="submit" value="Login" class="magex" name = "login">
                        <div class="register">
                            <p>Don't have an account <a href="#">Register</a></p>
                        </div>

                    <div>
                        <spa class="apsn">
                            Sign up
                        </spa>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
    <script>
         const button = document.querySelector('.magex');
        button.addEventListener('click' ,() =>
                {
                    button.classList.toggle('clicked');
                }
        )
        </script>
    <script src="./swal.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>