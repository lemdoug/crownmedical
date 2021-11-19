<?php 
    $title = 'Admin Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password Incorrect! Please try again. </div>';
        }else{
            $_SESSION["username"] = $username;
            $_SESSION["userid"] = $result['id'];

            header("Location: viewall.php");
            exit();
        }

    }
?>



<h1 class="text-center"><?php echo $title ?> </h1>
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="mb-5">
        <table class="table table-sm">
            <tr>
                <td><label for="username">Username:  </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password:  </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
        </table><br/><br/>
        <div class="d-grid gap-2">
        <input type="submit" value="Login" class="btn btn-dark"><br/>
        </div>
        
            
    </form>

<?php include_once 'includes/footer.php'?>

