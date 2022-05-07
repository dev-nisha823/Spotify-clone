<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.pinimg.com/originals/c0/67/8f/c0678f89e06d785a701b75d2d901e3e4.png"/>
     <!-- css code -->
     <link rel="stylesheet" href="style.css">
      

<style>

body {
background: #adada2;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
flex-direction: column;
}
*{
font-family: cursive;
box-sizing: padding-box;
}
form {
width: 1000px;
border: 3px solid transparent;
padding: 20px;
background: rgb(199, 168, 0);
border-radius: 20px;
}
h2 {
text-align: center;
margin-bottom: 40px;
}
input {
display: block;
border: 2px solid #ccc;
width: 95%;
padding: 10px;
margin: 10px auto;
border-radius: 5px;
}
label {
color: black;
font-size: 18px;
padding: 10px 2%;
}
button {
float: right;
background: rgb(12, 113, 133);
padding: 10px 15px;
color: #fff;
border-radius: 5px;
margin-right: 10px;
border: none;
}
@keyframes zoomin {
    from{
        padding: 10px 15px;
    }
    to{
        padding: 15px 20px;
    }
}
button:hover{
background-color:black;
animation:zoomin 1s ease-in-out infinite alternate;
}
.error {
background: #F2DEDE;
color: #0c0101;
padding: 10px;
width: 95%;
border-radius: 5px;
margin: 20px auto;
}
h1 {
text-align: center;
color: rgb(134, 3, 3);
}
a {
float: right;
background: rgb(183, 225, 233);
padding: 10px 15px;
color: #fff;
border-radius: 10px;
margin-right: 10px;
border: none;
text-decoration: none;
}
a:hover{
opacity: .7;
}

</style>

</head>

<body>

    <nav>
        <ul>
            <li class="brand"><img src="logo.png" alt="Spotify"> Spotify</li>
            <li><a href="<?php echo 'index.blade.php'; ?>">Home</a></li>
            <li><a href="<?php echo 'about.blade.php'; ?>">About</a></li>
            <li><a href="<?php echo 'album.blade.php'; ?>">Album</a></li>
            <li><a href="<?php echo 'signup.blade.php'; ?>">Signup</a></li>
            <li><a href="<?php echo 'login.blade.php'; ?>">LogIn</a></li>
        </ul>
    </nav>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <!-- this code will tells that if user has entered wrong credentials then it will show incorrect username and password. -->
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>