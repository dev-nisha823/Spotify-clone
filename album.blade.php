<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conten
    t="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-Your favourite music is here</title>
    <!-- js file for fontawesome -->
    <script src="https://kit.fontawesome.com/fb46d810ca.js"crossorigin="anonymous"></script>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.pinimg.com/originals/c0/67/8f/c0678f89e06d785a701b75d2d901e3e4.png"/>
    <!-- css code -->
    <link rel="stylesheet" href="style.css">
     
</head>
<body>

<!-- Navigation Bar -->
<nav>
        <ul>
            <li class="brand"><img src="logo.png" alt="Spotify"> Spotify</li>            
            <li><a href="<?php echo 'index.blade.php'; ?>">Home</a></li>

            <li><a href="<?php echo 'album.blade.php'; ?>">Album</a></li>
            <li><a href="<?php echo 'signup.blade.php'; ?>">Signup</a></li>
            <li><a href="<?php echo 'login.blade.php'; ?>">LogIn</a></li>
  
            </ul>
</nav>

     <!-- main page -->
     <h1 id="heading">popular artist album</h1>
      <div id="card">
        <div class="inner-card">
          <img src="https://i.pinimg.com/originals/44/4b/41/444b418488926f2c673253df5f46d34c.jpg" alt="arijit singh" class="bg-img-top" height="200" width="300">
          <br><h3 class="artist-name">arijit singh</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://wallpaperaccess.com/full/6386209.jpg" alt="Lata Mangeshkar" height="200" width="300" class="bg-img-top">
          <br><h3 class="artist-name">Lata Mangeshkar</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://wallpaperaccess.com/full/4268776.jpg" alt="Kumar Sanu"  height="200" width="300" class="bg-img-top">
          <br><h3 class="artist-name">Kumar Sanu</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://wallpapercave.com/wp/wp5411397.jpg" alt="palak muchhal"  height="200" width="300" class="bg-img-top">
          <br><h3 class="artist-name">Palak Munchhal</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php.blade.php" class="album-name">album</a></span>
        </div>
      </div>
      <div id="card">
        <div class="inner-card">
          <img src="https://wallpaperaccess.com/full/3703702.jpg" class="bg-img-top" height="200" width="300">
          <br><h3 class="artist-name">Alka Yagnik</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://www.bollywoodhungama.com/wp-content/uploads/2020/08/EXCLUSIVE-Rahul-Jain-reveals-that-he-wrote-Bepannaah%E2%80%99s-title-track-while-travelling.jpeg" class="bg-img-top" height="200" width="300">
          <br><h3 class="artist-name">Rahul Jain</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://wallpaperaccess.com/full/2012326.jpg" alt="Neha Kakkar" height="200" width="300" class="bg-img-top">
          <br><h3 class="artist-name">Neha kakkar</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
        <div class="inner-card">
          <img src="https://yt3.ggpht.com/ytc/AKedOLSY1ZOhQ8E1XAQbnZwZ2hLUQQEPj8Q7YXgIy9q8=s900-c-k-c0x00ffffff-no-rj" alt="Udit Narayan" height="200" width="300" class="bg-img-top">
          <br><h3 class="artist-name">Udit Narayan</h3>
          <br><span class="title">click here to see <a href="playlist.blade.php" class="album-name">album</a></span>
        </div>
      </div>

    <!-- footer section -->
    <!--------------------Social media section--------------------------->
    <div id="social">
              <a  class="social-btn" target="_blank" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fblog.codingninjas.in%2F2018%2F03%2F13%2Fa-step-by-step-walk-through-of-your-first-html-page%2F"><i class="fa-brands fa-facebook-square social-icon"></i></a>
  
              <a  class="social-btn" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&title=Best+Coding+Practices+for+Hassle-free+Programming&url=http%3A%2F%2Fblog.codingninjas.in%2F2018%2F04%2F02%2Fbest-coding-practices-for-hassle-free-programming%2F"><i class="fa-brands fa-linkedin social-icon"></i></a>
  
              <a  class="social-btn" target="_blank" href="https://twitter.com/share?url=http%3A%2F%2Fblog.codingninjas.in%2F2018%2F04%2F02%2Fbest-coding-practices-for-hassle-free-programming%2F&text=Best+Coding+Practices+for+Hassle-free+Programming"><i class="fa-brands fa-twitter-square social-icon"></i></a>
  
              <a  class="social-btn" target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fblog.codingninjas.in%2F2018%2F04%2F02%2Fbest-coding-practices-for-hassle-free-programming%2F"><i class="fa-solid fa-envelope social-icon"></i></a>
  
              <a  class="social-btn" target="_blank" href="whatsapp://send?text=http%3A%2F%2Fblog.codingninjas.in%2F2018%2F04%2F02%2Fbest-coding-practices-for-hassle-free-programming%2F"><i class="fa-brands fa-whatsapp-square social-icon"></i></a>  
          </div>
     

</body>
</html>   