<?php
        define( 'DB_NAME', 'hkweb' );
        define( 'DB_USER', 'root' );
        define( 'DB_PASSWORD', 'root' );
        define( 'DB_HOST', 'localhost' );

        function verifyUser($username, $password){

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // check connection
        if (!$conn) {
                die("Connection fail: " . mysqli_connect_error());
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                        setcookie('username', $username, time() + (86400 * 30), "/");
                        mysqli_close($conn);
                        return true; 
                      }else{
                        setcookie("username", "", time() - (3600), "/");
                      }
                       }
                      mysqli_close($conn);
                      return false;
      }
      ?>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 font-family: Georgia;
  }
  

input[type=submit] {
  width: 100%;
  background-color: lavender;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: Georgia; 
}
  input[type=submit]:hover {
  background-color: #45a049;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 font-family: Georgia;
}
  div {
  border-radius: 5px;
  background-color: lightblue;
  padding: 20px;
  font-family: Georgia; 
}
</style>
<div>
      <form method="post">
              User ID: <input type= "text" name="username"><br>
              Password: <input type="password" name="password"><br>
              <input type="submit" value="Submit">
      </form>
  </div>
      <?php

              $username = $_POST['username'];
              $password = $_POST['password'];
              if(verifyUser($username, $password)){
                header('Location: http://18.191.197.10/neighborhoodgems/lb.php');
                exit();
}

?>
