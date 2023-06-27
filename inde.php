<?php

include('conf/config.php');
if (isset($_POST['login'])) {

$name = $_POST['name'];
//double encryption
$password = sha1(md5($_POST['password']));
$email = $_POST['email'];

  $result = "SELECT * FROM form WHERE name= ? ";
  $stmt = $mysqli-> prepare($result);
  $stmt ->bind_param("s", $name);
  $stmt->execute();
  $res = $stmt -> get_result();

  if($res->num_rows > 0){

    // $result = "DELETE FROM members WHERE userid > $res";
    // $stmt = $connection-> prepare($result);
    // $stmt->execute();
    $error = "Dublicate username";
  }
        else {
      $success = "Account Created";
      $sel = "INSERT INTO form (name,password,email) VALUES (?,?,?)";
      $stmt = $mysqli->prepare($sel);
      $stmt->bind_param("sss",$name,$password,$email);
      $stmt->execute();

     
        }
        // $err = 'That username already exists' ;
      }
    // }
?>
<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <?php include("partials/head.php"); ?>
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
<script src="./js/swal.js"></script>
</body>
</html>