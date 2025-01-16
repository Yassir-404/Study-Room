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
        text-align: center;
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
        margin-bottom: 0;

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
    .border {
    border-radius: 30px;
    background-color: #819EC9;
    justify-content: center;
    display: flex;
    align-items: center;
    text-align: center;
    padding: 20px; 
    width: 250px; 
    height: 300px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
    flex-direction: column; 
}

.border img {
    width: 200px;
    margin-bottom: 10px;
}

.border2 {
    border-radius: 15px;
    background-color: #6982A7;
    width: 190px;
    height: 70px;
    padding: 10px 20px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    text-align: center;
    font-family: Irish Grover;
}

.containerr {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 50px;
  padding: 20px;
  margin: 50px;
  animation: slidetop 1s ease-in-out;
}

h1 {
    font-family: Irish Grover;
    color: white;
    text-shadow: 3px 2px 0px black;
    animation: slidetop 1s ease-in-out;
}

</style>
<body>

    <header>
        <div class="header-left">
            <img src="../PKK/Image/ppp.jpg" alt="Profile" class="profile-pic">
            <a href="#" class="account-link">My Account</a>
        </div>
        <nav>
            <a href="Beranda.php" class="nav-link">Home</a>
            <button id="aboutUsButton">About Us</button>
            <button id="contactUsButton">Contact</button>
            <a href="Login.php" class="nav-link login">Log In</a>
        </nav>
    </header>
    <div class="middle">
        <h1>PILIH METODE YANG KAMU SUKA!</h1>
    </div>
    <div id="aboutUsText">
        <b>
         Study Room
        </b>
        adalah website sarana hiburan dan edukasi yang bertujuan mempermudah siswa/siswi belajar secara otodidak sesuai dengan cara belajar yang disukai mulai dari materi e-book, video, hingga games.
       </div>
    <div id="contactUsText">
        <p><img src="../PKK/Image/whatssappp.png" alt="whatssapp">+62 895 19633536</p>
        <p><img src="../PKK/Image/instagram.png" alt="instagram">@studyroom.id</p>
    </div>

    <div class="containerr">
        <div class="border">
            <img src="../PKK/Image/materipkk.png" alt="Materi">
        <div class="border2">
            MATERI E-BOOK
        </div>
        </div>
        
        <div class="border">
            <a href="#"><img src="../PKK/Image/vidio.png" alt="Materi"></a>
        <div class="border2">
            VIDEO
        </div>
        </div>

        <div class="border">
            <img src="../PKK/Image/stikpkk.png" alt="Materi">
        <div class="border2">
            GAMES
        </div>
        </div>
    </div>
    
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