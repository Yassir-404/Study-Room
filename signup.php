<?php
include "koneksi.php";
if (!$koneksi) {
    echo "tidak terkoneksi";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nisn = $_POST['nisn'];
    $user = $_POST['nama'];
    $pass = $_POST['pass'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jp = $_POST['jp'];
    $role = $_POST['role'];
    
    $sql = "INSERT INTO member VALUES ('$nisn', '$user','$pass', '$tempat', '$tanggal', '$jp', '$role')";
    if (!mysqli_query($koneksi, $sql)) {
        echo "tidak terkoneksi";
    } else {
        echo "";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Room</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Arial', sans-serif;
        background-image: url(../PKK/Image/MacBook\ Pro\ 16_\ -\ 1.png);
        color: #333;
        background-size: cover;
        background-position-y: -140px;
    }
    
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-blend-mode: overlay;
        color: white;
        text-align: left;
    }
    
    .header-left {
        display: flex;
        align-items: center;

        animation: slidetop 1s ease-in-out;
    }
    
    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }
    
    .account-link {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
    
    nav {
        display: flex;
        gap: 20px;
        align-items: center;
        z-index: 20;

        animation: slidetop 1s ease-in-out;
    }
    
    nav button {
        background-color: transparent;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 16px;
    }

    .nav-link {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }
    
    .login {
        background-color: #1E3C72;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
    
    .main-content {

        align-items: center;
        padding: 24px 40px;
        color: white;
        position: relative;
    }
    
    .text-content h1 {
        font-size: 3em;
        margin-bottom: 10px;
    }
    
    .text-content p {
        font-size: 1.2em;
        margin-bottom: 20px;
    }
    
    .start-btn {
        padding: 10px 20px;
        font-size: 1em;
        background-color: #3A6EA5;
        color: white;
        border: none;   
        border-radius: 5px;
        cursor: pointer;
    }
    
    .student-image {
        width: 380px;
        border-radius: 10px;
        position: absolute;
        bottom: -49px;
        right: 30px;
        z-index: 10;

        animation: slidekanan 1s ease-in-out;
    }   
    
    footer {
        text-align: left;
        padding: 40px;
        background-color: #333;
        color: rgb(113, 113, 113);
        position: relative;
        z-index: 2;
        background-color: rgb(188, 188, 188);

        animation: slidebawah 1s ease-in-out;
    }
    
    footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
    }
    .login-container {
        background-color: #819EC9D9;
        padding: 5px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: left;
        width: 400px;
        margin-left: 60px;
        margin-top: 10px;

        animation: slidekiri 1s ease-in-out;
      }
      
      .login-container input {
        width: 70%;
        padding: 7.9px;
        margin: 10px 0px;
        margin-left: 15%;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        background-color: #D9D9D930;
        color: black;
      }
      .login-container button {
        width: 30%;
        padding: 10px;
        margin: 8px 0px;
        margin-left: 35%;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        background-color: #D9D9D930;
      }
      .login-container select {
        width: 70%;
        padding: 7.9px;
        margin: 10px 0px;
        margin-left: 15%;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 4px;
        background-color: #D9D9D930;
        color: black;
      }
      .login-container ::placeholder {
        color: black;
      }
      .linkcss {
        background-color: rgb(0, 110, 255);
        color: white;
        position: fixed;
        bottom: 20px;
        margin: 0 auto;
        left: 10px  ;
        border-radius: 20px;
        padding: 20px;
        text-decoration: none;
    }
    h2 {
        font-family: Irish Grover;
        font-size: 45px;
        color: white;
        text-shadow: 3px 3px 0 black;
        margin-left: 80px;

    }
    p {
        margin-top: 5px;
        margin-left: 80px;
    }
    .daftar {
        color: white;
        text-decoration: none;
    }
    #aboutUsText {
        position: absolute;
        top: 70px;
        right: 200px;
        background-color: #ADC4E7D9;
        padding: 20px;
        border-radius: 10px;
        max-width: 300px;
        display: none;
        z-index: 200;
    }
    #aboutUsText b {
        font-weight: bold;
    }
    #contactUsText {
        position: absolute;
        font-size: 1.2em;
        text-align: left;
        border-radius: 10px;
        background-color: #ADC4E7D9;
        padding: 10px;
        max-width: 220px;
        right: 120px;
        top: 70px;
        z-index: 200;
        display: none;
    }
    #contactUsText img {
        width: 25px;
        vertical-align: middle;
        margin-right: 10px;
    }
    .log {
        animation: slidekiri 1s ease-in-out;
    }

</style>
<body>

    <header>
        <div class="header-left">
            <img src="../PKK/Image/ppp.jpg" alt="Profile" class="profile-pic">
            <a href="#" class="account-link">My Account</a>
        </div>
        <nav>
            <a href="../PKK/Beranda.php" class="nav-link">Home</a>
            <button id="aboutUsButton">About Us</button>
            <button id="contactUsButton">Contact</button>
            <a href="../PKK/Login.php" class="nav-link login">Log In</a>
        </nav>
    </header>
    <div id="aboutUsText">
        <b>
         Study Room
        </b>
        adalah website sarana hiburan dan edukasi yang bertujuan mempermudah siswa/siswi belajar secara otodidak sesuai dengan cara belajar yang disukai mulai dari materi e-book, video, hingga games.
       </div>
    <div id="contactUsText">
        <img src="../PKK/Image/whatssappp.png" alt="whatssapp">+62 895 19633536
        <img src="../PKK/Image/instagram.png" alt="instagram">@studyroom.id
    </div>
    <h2 class="log">SIGN UP</h2>
    <p style="color: white;" class="log">Sudah memiliki akun Study Room? <a href="#" style="color: white;"><strong><a href="../PKK/Login.php" class="daftar">Log in disini</a></strong></a></p>
    <div class="login-container">
        <form action="#" method="post">
            <input type="text" id="nisn" name="nisn" placeholder="NISN" style="text-align: left;" required>
            <input type="text" id="nama" name="nama" placeholder="Nama" style="text-align: left;" required>
            <input type="password" id="pass" name="pass" placeholder="Password" style="text-align: left;" required>
            <input type="text" id="tempat" name="tempat" placeholder="Tempat lahir" style="text-align: left;" required>
            <input type="text" id="tanggal" name="tanggal" placeholder="Tanggal lahir" style="text-align: left;" required>
            <input type="text" id="jp" name="jp" placeholder="Jenjang Pendidikan" style="text-align: left;" required>
            <select name="role" id="role">
                <option value="member">Member</option>
            </select>
            <button type="submit">SIGN UP</button>
        </form>
    </div>


    <section class="main-content">
        <div class="student-image">
            <img src="../PKK/Image/student.png" alt="Child Student" class="student-image">
        </div>
    </section>


    <footer>
        <a href="#" style="padding: 10px; color: rgb(113, 113, 113)">Kebijakan Privasi</a> |
        <a href="#" style="padding: 10px; color: rgb(113, 113, 113)">Bantuan</a>
    </footer>
    <script>

        document.getElementById('aboutUsButton').onclick = function() {
          var aboutUsText = document.getElementById('aboutUsText');
          if (aboutUsText.style.display === 'none') {
            aboutUsText.style.display = 'block';
          } else {
            aboutUsText.style.display = 'none';
          }
        };
        document.getElementById('contactUsButton').onclick = function() {
            var contactUsText = document.getElementById('contactUsText');
            if (contactUsText.style.display === 'none') {
              contactUsText.style.display = 'block';
              } else {
              contactUsText.style.display = 'none';
            }
          };
      </script>
</body>
</html>