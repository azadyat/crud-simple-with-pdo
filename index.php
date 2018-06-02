<?php include("config.php"); ?> 
<?php 
// include("input.php"); 
?> 


<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
        <form method="post" action="input.php">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="username" id="user" class="autocomplete">
                    <label for="user">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="password" id="pass" class="autocomplete">
                    <label for="pass">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <select name="acces">
                      <option value="" disabled selected>Chose Your Acces</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>
                    <label>Hak Akses</label>
                  </div>
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-3" type="submit" href="index.php" name= "tambah" >Tambah
                      <i class="material-icons left">add</i>
                    </button>
                    <input type="reset" class="light-blue darken-3 btn">
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!-- Akhir form Input -->
       <table class="striped" border="1px">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Password</th>
              <th width="20%">Akses</th>
              <th>Option</th>
            </tr>
          </thead>

          <tbody>
           <?php  
           $pdo_statement = $pdo_conn->prepare("SELECT * FROM users ORDER BY uid DESC ");
           $pdo_statement->execute();
           $result = $pdo_statement->fetchAll();

           if(!empty($result)) { 
            foreach($result as $row) {
              ?>


              <tr class="table-row">
                <td><?php echo $row["uid"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["acces"]; ?></td>
                <td>
                  <a class="yellow darken-4 btn modal-trigger waves-effect waves-light" href='materialize/formedit.php?id=<?php echo $row['uid']; ?>'>
                    <i class="material-icons left">edit</i>Edit</a>
                    <a class="red darken-4 btn waves-effect waves-light" href='delete.php?id=<?php echo $row['uid']; ?>'><i class="material-icons left">delete</i>Hapus</a>
                  </td>


                </td>
              </tr>

              <?php
            }
           

          }
          ?>

        </tbody>
      </table>

    </div>
  </div>
</div>


<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>
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
