<?php include("../config.php"); ?> 
<?php 
// include("input.php"); 
?> 


<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <!-- Navbar -->
  <nav class=" light-blue darken-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">CRUD PDO WITH MATERIALIZE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <div class="container">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="card-panel grey lighten-5 z-depth-1">
        <h3 class="center">Welcome To CRUD PHP PDO</h3>

        <!-- Form Input -->
        <form method="post" action="../edit.php">
          <?php

           $pdo_statement = $pdo_conn->prepare("select * from users where uid=".$_GET['id']."");
           $pdo_statement->execute();
           $r = $pdo_statement->fetch();
           ?>
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="hidden" name="uid" id="uid" value="<?php echo "$r[uid]"; ?>" class="autocomplete">
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="username" id="user" value="<?php echo "$r[username]"; ?>" class="autocomplete">
                    <label for="user">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="text" name="password" id="pass" value="<?php echo "$r[password]"; ?> class="autocomplete">
                    <label for="pass">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <select>
                      <option value="" disabled selected>Chose Your Acces</option>
                      <option value="1">Admin</option>
                      <option value="2">User</option>
                    </select>
                    <label>Hak Akses</label>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-3" type="submit" href="../index.php" name= "tambah">Simpan <i class="material-icons right">send</i>
                    </button>
                    <input type="reset" class="light-blue darken-3 btn">
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!-- Akhir form Input -->
    </div>
  </div>
</div>


<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/init.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>

</body>
</html>
