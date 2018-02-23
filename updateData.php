<!DOCTYPE html>
<html lang="en">
<head>
  <title>Limbo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 914px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
        <ul class="nav nav-pills nav-stacked">
          <li style="font-size:150%"><a href="../index.php">Limbo Landing Page</a></li>
          <li><a href="../lost.php">Lost</a></li>
          <li><a href="../found.php">Found</a></li>
          <li class="active"><a href="../admin.php">Admin</a></li>
          <li><a href="../quicklinks.php">Quick Links</a></li>
        </ul><br>
      </div>
      <div class="col-sm-9"> 
        <hr>
        <h2>Admin Page</h2>
        <br><br>
      </div>
      <?php
        $debug = true;
        # connect to the MySql server    
        require( '../includes/connect_db.php' );
        # contains helper functions
        require( '../includes/helpers.php');
        
        # tests if user is posting information   
        if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
          $locationId = $_POST['location_id'] ;
          $descrip = $_POST['description'] ;
          $room = $_POST['room'] ;
          $owner = $_POST['owner'] ;
          $finder = $_POST['finder'] ;
          $status = $_POST['status'] ;
          $id = $_POST['id'];
          $vars = array($locationId, $descrip, $room, $owner, $finder, $status, $id);
          update_limbo_query($dbc, $vars);
        }

      # Close the connection
        mysqli_close( $dbc ) ; 
      ?>
      <h6> You just updated the status of an item!</h6>
      <a href="addAdmin.php">Create An Admin User</a><br>  
      <a href="deleteAdmin.php">Delete An Admin User</a><br>
      <a href="updateAdmin.php">Update An Admin User</a><br>    
    </div>
  </div>
  <footer class="container-fluid">
    <p>This site was created by Taddyb, MoMan, and Eli</p>
  </footer>
</body>
</html>