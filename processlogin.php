<?php

include('database.php');

$username = $_POST['username']; 
$userpass = $_POST['password'];

$select_data = "SELECT username, password, nama, role FROM users WHERE username = '$username'";
$result = mysqli_query($koneksi, $select_data);    

list($username, $password, $nama, $role) = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {

        if (password_verify($userpass, $password)) {

            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['nama']     = $nama;
            $_SESSION['role'] = $role;

            header("location: dashboard");
            die();

         } else {

         	header("Location: index.php?pesan=gagal_login");

         }

    }


?>