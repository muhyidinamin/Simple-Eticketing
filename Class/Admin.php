<?php
    class Admin{
        public $username;
        public $password;
        
        function cekAdmin($con){
            if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $query = "select * from admin WHERE Username = '$username' AND Password = '$password'";
                    $hasil = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($hasil);
                    if ($row['Username'] == $username AND $row['Password'] == $password) {
                        $_SESSION['username'] = $username;
                        header("location:Homepage.php");
                    }
                    else {
                        header("location:Index.php?error=salah");
                    }
                }
            }
    }
?>