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
        z-index: 10;

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
        flex: 1;
        align-items: center;
        padding: 131px 40px;
        color: white;
        position: relative;

        animation: slidekiri 1s ease-in-out;
        
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
        background-color: #819EC9;
        color: white;
        border: none;   
        border-radius: 5px;
        cursor: pointer;
    }
    
    .student-image {
        width: 350px;
        border-radius: 10px;
        position: absolute;
        bottom: 0px;
        right: 30px;
        z-index: 5;

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
        margin-top: 20px;

        animation: slidebawah 1s ease-in-out;
    }
    
    footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
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
    div a {
        text-decoration: none;
    }

    .a {
        text-decoration: none;
        color: #333;
    }
</style>
<body>

    <header>
        <div class="header-left">
            <img src="../PKK/Image/ppp.jpg" alt="Profile" class="profile-pic">
            <a href="#" class="account-link">My Account</a>
        </div>
        <nav>
            <a href="#" class="nav-link">Home</a>
            <button id="aboutUsButton">About Us</button>
            <button id="contactUsButton">Contact</button>
            <a href="logout.php" class="nav-link login">Log Out</a>
        </nav>
    </header>
    <div id="aboutUsText">
        <b>
         Study Room
        </b>
        adalah website sarana hiburan dan edukasi yang bertujuan mempermudah siswa/siswi belajar secara otodidak sesuai dengan cara belajar yang disukai mulai dari materi e-book, video, hingga games.
       </div>
    <div id="contactUsText">
        <p><img src="../PKK/Image/whatssappp.png" alt="whatssapp"><a href="https://wa.me/6289519633536" target="_blank" class="a">WhatsApp</a></p>
        <p><img src="../PKK/Image/instagram.png" alt="instagram">@studyroom.id</p>
    </div>

    <section class="main-content">
        <div class="text-content">
            <h1>STUDY ROOM</h1>
            <p>Cara yang menyenangkan untuk belajar berbagai pelajaran melalui materi, video, dan game.</p>
            <a href="metode.php" class="start-btn">Start</a>
        </div>
    </section>
    <div class="student-image">
        <img src="../PKK/Image/385b4600b882d26984dfee1fd89bac24.png" alt="Child Student" class="student-image">
    </div>


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