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
                  <li class="active"><a href="admin.php">Admin</a></li>
                  <li><a href="../quicklinks.php">Quick Links</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <br><br>
            </div>
            <?php
                # tests if username and password are set       
                if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                    # connect to the mysql server
                    require( '../includes/connect_db.php' );
                    # contains helper functions
                    require('../includes/helpers.php');
                    show_admin_records($dbc);
                } else {
                    echo $_COOKIE['username'];
                }
                
                
            ?>  
            <hr>
            <h6>Click on the user id to update an admin user</h6>
            <br>
            <hr>
            <a href="addAdmin.php">Create An Admin User</a><br>  
            <a href="deleteAdmin.php">Delete An Admin User</a><br>
            <a href="editAdmin.php"></a>Update An Admin User<br>
        </div>
    </div>	
	<footer class="container-fluid">
  	<p>This site was created by Taddyb, MoMan, and Eli</p>
	</footer>
</body>
</html>