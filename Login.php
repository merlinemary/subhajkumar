<?php
session_start();
?>

<html>
    <head>
        <title>DICTIONARY</title>
       
         <style>
              header
            {
                position: absolute;
                left:0;
                top:0; 
                background-color:dimgray;
                width: 100%;
                height: 300%;
              
           
            }
             footer
            {
                position: absolute;
                left:0;
                top:0; 
                background-color:crimson
                width: 30%
                height: 300%;
              
           
            }
            aside{
                position: relative;
                background-color:black;
                padding: 10px;
                margin: 10px;
                width: 60%;
                height: 900px;
                color: white;
                 top:80;
            }
            h4{
               color: darkslategrey;
            }
            #form_header{
                color: white;
                font-weight: bold;
                background-color:darkgoldenrod;
                float: right;
            }
            /*address{
                font-style: normal;
            }*/
            section{
                position: absolute;
                top:80;
                right:10;
                background-color:crimson;
                width: 70%;
                height: 900px;
                color: white;
                padding:10px;
                margin: 10px;
                font-weight: bold;
                font-size: 12;
            }
            
            .heading{
                font-size: 19px;
            }
            form{
                position: absolute;
                left:0;
                background-color: #f2f3f5;
                height: 530px;
                width: 920px;
            }
            input[type=text],input[type=email]{
                
                background-color:floralwhite;
                
            }
            input[type=submit]:hover{
                cursor: pointer;
            }
            input[type=number]{
              
                background-color:floralwhite;
               
               
             }
            input[type=password]{
              
                background-color:floralwhite;
               
               
             }
             p{
                display: inline-block;
                border-bottom: 2px solid grey;
                margin: 0;
                padding: 0;
                color: red;
             }
             ::placeholder{
                color: red;
             }
            table{
                color: grey;
                padding: 20px;
            }
            textarea{
                background-color:#dddddd;
                border:none;
            }
               .foot {
  color:white;
                font-family:sans-serif;
                font-size:12;
                background-color:crimson;
            }
            .form_footer{
                border-bottom: 2px dotted grey;
            }
            #submit{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:60px;
                padding-right: 60px;
                color: white;
                font-style: bold;
                border:none;
            }
              #submit{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            }  #submit1{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:60px;
                padding-right: 60px;
                color: white;
                font-style: bold;
                border:none;
            }
              .link{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:60px;
                padding-right: 60px;
                color: black;
                font-style: bold;
                  font-size: 14;
                  font-family:monospace;
                border:none;
                  width: 250px;
                  height: 40px;
            }
            body {font-family:sans-serif,Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],[type=password],[type=email], select, textarea {
  width: 40%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
    
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
            .font {
  color:black;
                font-family:sans-serif;
                font-size:12;
}
             
            .font2 {
  color:white;
                font-family:sans-serif;
                font-size:12;
}
            .dic
            {
                font-family:serif;
                font-size: 68;
                color:white;
                
            }
               .fg
            {
                font-family:monospace;
                font-size: 16;
                background-color: red;
                color:white;
                
            }
               .heading{
                font-size: 15px;
                font-family:monospace;
            }
        </style>
    </head>
    <body>
          <header align="center" class="dic"> ___________DICTIONARY___________</header>
         <aside>
         <input type="button" name="About" value="About Us" class="link" onclick="window.open('about_dic.php','_self');"><br><br>
            <input type="button" name="Home" value="Home" class="link" onclick="window.open('DICTIONARY.php','_self');"><br><br>
                     <input type="button" name="About" value="Spell Check" class="link" onclick="window.open('v2.php','_self');"><br><br>

            <input type="button" name="DictionarySearch" value="Login" class="link"  onclick="window.open('Login.php','_self');"><br><br>
            
              <input type="button" name="Game" value="Game" class="link" onclick="window.open('Game.php','_self');"><br><br>
            <input type="button" name="Administrator" value="Admistrator" class="link" onclick="window.open('AdminLogin.php','_self');"><br><br>
           
              <input type="button" name="Comment" value="Post Your Comment" class="link"  onclick="window.open('suggestionbox.php','_self');">
             
        </aside>
        <section>
            <h1 class="heading">LOGIN PAGE</h1>
            <form id="f" method="get">
               <div class="container">
                     <br>
                   <br>
                  
                     <label for="fname" class="font">First Name</label><br>
    <input type="text" id="fname" name="fname" placeholder="First Name" required><p id="err1"></p><br>

    <label for="lname"  class="font">Email-Address</label><br>
    <input type="email" id="email" name="email" placeholder="Email Address" required><p id="err2"></p><br>
<label for="lname"  class="font">Password</label><br>
    <input type="password" id="pass" name="pass" placeholder="Password" required><p id="err3"></p><br>
  

   

    <input type="submit" value="Login" id="submit" name="btnsubmit"> <input type="button" class="fg"  name="Comment" value="Change Password" class="link"  onclick="window.open('fgp.php','_self');">
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                  
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                    <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                    <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                    <br>
                   <br>
                   
                     <h1 class="foot" align="left">____CopyRight 2018-2019,Stella Maris College(Autonomous)
                   All rights reserved.Developed by SUBHALAXMIJAYAKUMAR___</h1> 
               
  
</div>
            </form>
        </section>
    
      <?php
      if(isset($_GET['btnsubmit']))
    {      
          
    $conn =mysqli_connect("localhost","root","","dic");
  $fname=$_GET['fname'];  
          $email=$_GET['email'];
$pass=$_GET['pass'];
           
         $result =mysqli_query($conn,"SELECT * FROM sign WHERE EMAIL='$email' and PASSWORD='$pass'");
         // $count=mysqli_num_rows($result);
          
                          $_SESSION['fss']=$_GET['fname'];  
          echo
                  "<script>if(confirm('valid Username And Password'))
                       {
                       document.location.replace('view.php')};</script>";
                  
           if($count=mysqli_num_rows($result))
                       {
              
                          $_SESSION['fss']="priya";  
                                     
                                                    
                          
                         
                       }
          
        $count=mysqli_num_rows($result);
                if($count<1)
                     
               {
                  // $SESSION['Error1']="USERNAME DOES NOT EXIST";
                 echo
                  "<script>if(confirm('valid Username And Password'))
                       {
                       document.location.replace('view.php')};</script>";
                   
                }
               
          else
          {
              while($row=mysqli_fetch_assoc($result))
              {
                  if($row['pass']!=$pass)
                  {
                      $_SESSION['email']=$_GET['email'];
                      $_SESSION['ERROR2']="password incorrect";
                  }
                  else
                  { 
                      echo "<script> window.location.assign('view.php');</script>";
                  }
              }
             
               echo
                       "<script>if(confirm('InValid Username And Password'))
                       {
                       document.location.replace('Login.php')};</script>";
                              
             
          }
                 }
    
    ?>  
    <script>
        var btn=document.getElementById('submit');
        var login=document.getElementById('Login');
        btn.onclick=function(e){
            //alert("hai");
            check_validation();
        }
        
        function check_validation(){
            //alert("fun");
            var fname=document.getElementById('fname');
             var email=document.getElementById('email');
             var pass=document.getElementById('pass');
           
            if(fname.checkValidity)
            {
                document.getElementById("err1").innerHTML=fname.validationMessage;
            }
              if(email.checkValidity)
            {
                document.getElementById("err2").innerHTML=email.validationMessage;
            }
            if(pass.checkValidity)
            {
                document.getElementById("err3").innerHTML=pass.validationMessage;
            }
            
        }
    </script>
       </body>                                                                    
</html>