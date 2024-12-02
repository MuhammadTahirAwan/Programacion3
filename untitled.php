
<?php
 $mysqli = new mysqli('localhost', 'root', '', 'Paises');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>


            <p>Seleccione un país del siguiente menú:</p>  
            <p>Paises:
              <select name="pais"> 
               <option value="0">Seleccione:</option> 
               <?php 

                $query = $mysqli -> query ("SELECT * FROM Paiz");



                if ($query) {
                   while ($valores = mysqli_fetch_array($query)) {
                       echo '<option value="'.$valores['id'].'">'.$valores['nombre'].'</option>'; 
                   }
               } else {
                   echo '<option value="0">No data available</option>';
               }



                
               ?>
              </select>
            </p>



            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
