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
            <input type="button" name="DictionarySearch" value="Login" class="link"  onclick="window.open('Login.php','_self');"><br><br>
            
              <input type="button" name="Game" value="Game" class="link" onclick="window.open('Game.php','_self');"><br><br>
            <input type="button" name="Administrator" value="Admistrator" class="link" onclick="window.open('AdminLogin.php','_self');"><br><br>
           
              <input type="button" name="Comment" value="Post Your Comment" class="link"  onclick="window.open('suggestionbox.php','_self');">
             
        </aside>
        <section>
            <h1 class="heading">CHANGE PASSWORD PAGE</h1>
            <form id="f">
               <div class="container">
                     <br>
                   <br>
                  
                     

    <label for="lname"  class="font">Enter Your Email-Address</label><br>
    <input type="email" id="email" name="email" placeholder="Email Address" id="email" required><p id="err1"></p><br>
<label for="lname"  class="font">Enter Your New Password</label><br>
    <input type="password" id="pass" name="pass" placeholder="Password" id="pass" required><p id="err2"></p><br>
  <label for="lname"  class="font">Confirm Password</label><br>
    <input type="password" id="pass" name="cpass" placeholder="Confirm Password" id="cpass" required><p id="err3"></p><br>

   

    <input type="submit" value="Change Password" id="submit" name="submit"> 
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
                    <?php
    if(isset($_GET['submit']))
    {      
    $conn =mysqli_connect("localhost","root","","dict");
        
 $EMAIL=$_GET['email'];
    $PASS=$_GET['pass'];
    $CPASS=$_GET['cpass'];
   
    $query="UPDATE sign SET PASSWORD='$PASS',CONFIRM='$CPASS' WHERE EMAIL='$EMAIL'";
mysqli_query($conn, $query); 
echo "<table align=center border=1 cellpadding=1 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"PASSWORD UPDATED SUCCESSFULLY";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
        mysqli_close($conn);
     
   }
    ?>      
                     <h1 class="foot" align="left">____CopyRight 2018-2019,Stella Maris College(Autonomous)
                   All rights reserved.Developed by SUBHALAXMIJAYAKUMAR___</h1> 
               
  
</div>
            </form>
        </section>
    </body>
    <script>
        var btn=document.getElementById('submit');
        var login=document.getElementById('Login');
        btn.onclick=function(e){
            //alert("hai");
            check_validation();
        }
        
        function check_validation(){
            //alert("fun");
            var email=document.getElementById('email');
             var pass=document.getElementById('pass');
             var cpass=document.getElementById('cpass');
           
            if(email.checkValidity)
            {
                document.getElementById("err1").innerHTML=email.validationMessage;
            }
              if(pass.checkValidity)
            {
                document.getElementById("err2").innerHTML=pass.validationMessage;
            }
            if(cpass.checkValidity)
            {
                document.getElementById("err3").innerHTML=cpass.validationMessage;
            }
            
        }
    </script>
                                                  
</html>