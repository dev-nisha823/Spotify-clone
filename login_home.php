<!-- this will be the login home page when we will login into our account. -->

<?php 

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

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
color: rgb(35, 34, 34);;
}
a {
float: right;
background: rgb(8, 198, 234);
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

     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 
                                                                  
}else{

     header("Location: login.php");

     exit();

}

 ?>