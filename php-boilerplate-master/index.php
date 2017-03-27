  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DeGokkers</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="css/application.css">

  <div class="grad">
    <div class="wrapper">

      <div class="header">
        <img id="dino_header" src="img/dino.png">
        <h1>De Gokkers</h1>
        <div class="form">
          <form action="register.php" method="POST">
            <p>
              <label>Username</label>
              <input type="text" id="user" name="user">
            </p>
            <p>
              <label>Email</label>
              <input type="Email" id="email" name="email">
            </p>
            <p>
              <lab>Password</label>
              <input type="password" id="pass" name="pass">
            </p>
            <p>
              <input type="submit" id="btn" value="Register">
            </p>
          </form>

            <form action="login.php" method="POST">
              <p>
                <label>Username</label>
                <input type="text" id="user" name="user">
              </p>
              <p>
                <label>Password</label>
                <input type="password" id="pass" name="pass">
              </p>
              <p>
                <input type="submit" id="btn" value="Login">
              </p>
            </form>
            <div class="button">
            </div>
          </div>

          <div class="hero">
            <h2>Our Product</h2>
            <div class="showcase">
              <img id="screenshot" src="img/ss1.png">
              <iframe width="1280" height="720" src="https://www.youtube.com/embed/JaPUY0ItkOI?autoplay=1" frameborder="0"></iframe>
              <img id="screenshot" src="img/ss2.png">
            </div>

            <div class="hero_download">
              
              <?php 
                if(isset($_GET["message"]))
                {
              
                  echo "<a href='game/DeGokkers.exe' downloads><img src=\"img/download.png\"></a>";
                }
                else
                {
                  echo "You must be logged in to download";
                }


               ?>
          </div>
        </div>

        <div class="footer">
          <h3>Credits:</h3>
          <div class="footer_list">
            <ul>
              <li>Jelle</li>
              <li>Remco</li>
              <li>Brandon</li>
              <li>Kaan</li>
            </ul>
          </div>

          <p>&copy;De Gokkers</p>

        </div>
      </div>
    </div>
  </div>
</body>
</html>



