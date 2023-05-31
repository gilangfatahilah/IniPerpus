<?php

    ob_start();
    session_start();

   $koneksi = new mysqli ("localhost","root","","perpustakaan");


   
       
?>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Login Page </title>
</head>

<body>

    <div class="global-container">
        <div class="card login-form">

            <div class="card-body">
                <h1 class="card-title text-center">INIPERPUS
                    <br>
                    <h5 class="card-subtitle">silahkan masukan username dan password anda !</h5>
                </h1>
            </div>
            <div class="card-text">
                <form role="form" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" id="username"
                            aria-label="default input example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                    </div>

                </form>
            </div>
            <div class="footer-text">
                About me ? <a href="https://www.instagram.com/gilanqf/" style="color:yellow;">Gilang Fatahilah</a>
            </div>
        </div>
    </div>


    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

<?php 

    if(isset($_POST['login'])) {


        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = $koneksi->query("select * from login where username='$username' and password='$password'");

        $data = $sql->fetch_assoc();

        $ketemu = $sql->num_rows;

        if ($ketemu >=1) {

            session_start();

            if ($data['level'] == "admin") {

                $_SESSION['admin'] = $data['id'];

                header("location:admin.php");
            
           }else if($data['level'] == "user") {

                $_SESSION['user'] = $data['id'];

                header("location:index.php");
            }

        }else{

                ?>

<script type="text/javascript">
alert(" Username atau Password salah")
</script>
<?php
            }
        
    
}
 ?>