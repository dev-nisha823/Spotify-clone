<link rel="stylesheet" href="style.css">
<style>
    #form{
        border:1px solid black;
        border-radius:10px;
        height:fit-content;
        width:50%;
        background-color:grey;
        margin:0% 0% 10% 25%;
    }
    form{
        padding:1% 5%;
    }
    label{
        color: white;
        font-size:20px;
        text-tranform:capitalize;
    }
    p{
        color: white;
        font-size:20px;
        text-tranform:capitalize;
    }
    input[type=email]{
      padding:5px 10px;
      width:70%;
      background-color:lightgrey;
      color:black;
      border-radius:10px;
    }
    input[type=password]{
     padding:5px 10px;
      width:70%;
      border-radius:10px;
    }
    input[type=text]{
        padding:5px 10px;
      width:70%;
      background-color:lightgrey;
      color:black;
      border-radius:10px;
    }
    input[type=submit]{
        border:1px solid black;
        padding:1% 3%;
        background-color:green;
        color:black;
        font-size:15px;
        border-radius:10px;
        margin-left:40%;
    }
    </style>

<?php
echo "<pre>";
print_r($_POST);
   $email1=$_POST['email1'];
   echo "Hello"."  ".$email1."  ";
   if(isset($_POST['submit']))
        {
            $email1=$_POST['email1'];
            $password=$_POST['password'];
            $pname=$_POST['pname'];
            $birthday=$_POST['birthday'];
             // for gender
        if(isset($_POST['gender']))
        {
        $gender=($_POST['gender']);
        }
        else
        {
            $gender="";
        }
           
        $age=$_POST['age'];

            if(strlen($email1)<=10)
            {
                echo "Email should be more than 10 characters.";
            }
            if(strlen($password)<=6)
            {
                echo "Password should be more than 6 alpha-numeric characters.";
            }
        }

?>

<nav>
        <ul>
            <li class="brand"><img src="logo.png" alt="Spotify"> Spotify</li>
            <li><a href="<?php echo 'index.blade.php'; ?>">Home</a></li>
           
            <li><a href="<?php echo 'album.blade.php'; ?>">Album</a></li>
            <li><a href="<?php echo 'signup.blade.php'; ?>">Signup</a></li>
            <li><a href="<?php echo 'login.blade.php'; ?>">LogIn</a></li>
        </ul>
    </nav>
    
<div id="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       

       <label for="email">What's your email?</label><br>
       <input type="email" id="email" name="email1"><br><br>

       <label for="email">Confirm your email</label><br>
       <input type="email" id="email" name="email"><br><br>

       <label for="password">Create your Password</label><br>
       <input type="password" id="password" name="password" placeholder="Enter your Pwd"><br><br>

       <label for="pname">What should we call You?</label><br>
       <input type="text" id="pname" name="pname" placeholde="Enter a profile name"><br>
       <p>This appears on your profile</p><br>

       <label for="birthday">Date Of Birth</label><br>
       <input type="date" id="birthday" name="birthday"><br><br>

       <label for="gender">What's Your gender?</label><br>
       <input type="radio" name="gender" id="male" value="male">
       <label for="gender">Male</label><br>
       <input type="radio" name="gender" id="female" value="female">
       <label for="gender">Female</label><br>
       <input type="radio" name="gender" id="non-binary" value="non-binary">
       <label for="gender">Non-binary</label><br>


  <p>Please select your age:</p>
  <input type="radio" id="age1" name="age" value="25">
  <label for="age1">15 - 25</label><br>
  <input type="radio" id="age2" name="age" value="40">
  <label for="age2">26 - 40</label><br>  
  <input type="radio" id="age3" name="age" value="70">
  <label for="age3">41 - 70</label><br><br>


  <input type="submit" name="submit" value="Sign Up">




    </form>
</div>