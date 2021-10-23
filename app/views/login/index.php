
<?php 
// session_start();
// $conn = mysqli_connect("localhost","root","","medantainment");
require '../../core/Database.php';

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id= $_COOKIE['id'];
	$key=$_COOKIE['key'];

	$result= mysqli_query($conn, "SELECT username FROM adm
				WHERE id= $id");

	$row= mysqli_fetch_assoc($result);

	if ($key === hash('sha256', $row['user'])) {
		$_SESSION ['login']= true;
	}
}

if(isset($_SESSION["login"])){
	header("Location: admin");
	exit();
}

	if(isset($_POST["login"]))
	{
		$user = $_POST["user"];
		$password = $_POST["password"];

		$result=mysqli_query($conn, "SELECT * FROM adm WHERE 
				username ='$user'");

		if(mysqli_num_rows($result) === 1){
			$row= mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){
				//set session

				$_SESSION["login"] = true;

				//cek remember me
				if(isset($_POST['cek'])){
					//buat cookie

					setcookie('id',$row['id'], time()+60);
					setcookie('key', hash('sha256', $row['user']) , time()+60);
				}

				header("Location: admin");
				exit;
			}
		}
		$error= true;

	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $data['title'] ; ?></title>
    <style>
        .col-lg-4
        {
            margin:0 auto;
        }

        
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row mt-5">
    <?php if (isset($error)) : ?>
				<div class="alert alert-warning" role="alert">
 					<p style="text-align:center; padding-top:3px; "><i> username & Password tidak sesuai!</i></p>
				</div>
			<?php endif ; ?>
        <div class="col-lg-4">
            <form method="post" action="" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Masukan username</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="cek" id="cek">
                    <label class="form-check-label"  for="cek">Check me out</label>
                </div>
                <button name="login" type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>