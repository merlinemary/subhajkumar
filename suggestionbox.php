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
            .foot {
  color:white;
                font-family:sans-serif;
                font-size:12;
                background-color:crimson;
            }
             aside{
                position: relative;
                background-color:black;
                padding: 10px;
                margin: 10px;
                width: 100%;
                height: 700px;
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
                height: 90px;
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
  color:black;
                font-family:sans-serif;
                font-size:12;
                  color: white;
}
               .dic
            {
                font-family:serif;
                font-size: 68;
                color:white;
                
            }
              .heading{
                font-size: 15px;
                font-family: monospace;
            }
        </style>
    </head>
    <body> <header align="center" class="dic"> ___________DICTIONARY___________</header>
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
            <h1 class="heading">POST YOUR SUGGESTION</h1>
            <form id="f">
               <div class="container">  
                     <label for="fname" class="font">First Name</label><br>
    <input type="text" id="fname" name="fname" placeholder="First Name" id="fname" required><p id="err1"></p><br>

    <label for="lname"  class="font">Last Name</label><br>
    <input type="text" id="lname" name="lname" placeholder="Last Name" id="lname" required><p id="err2"></p><br>

    <label for="country"  class="font">Country</label><br>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
        <option value="australia">India</option>
      <option value="canada">Japan</option>
      <option value="usa">Singapore</option>
         <option value="australia">Malaysia</option>
      <option value="canada">America</option>
      <option value="usa">Australia</option>
    </select><br>
 <label for="lname"  class="font">Mail ID</label><br>
    <input type="email" id="lname" name="mail" placeholder="Last Name" id="lname" required><p id="err4"></p><br>
    <label for="subject" class="font">Suggestion</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" id="subject"  required></textarea><p id="err3"></p><br>

    <input type="submit" value="Submit" id="submit" name="submit">
  
</div>
                 <h1 class="foot" align="left">____CopyRight 2018-2019,Stella Maris College(Autonomous)
                   All rights reserved.Developed by SUBHALAXMIJAYAKUMAR___</h1> 
            </form>
        </section>
    </body>
    <script>
        var btn=document.getElementById('submit');
       
        btn.onclick=function(e){
           
            check_validation();
        }
        
        function check_validation(){
           
            var fname=document.getElementById('fname');
            var lname=document.getElementById('lname');
            var mail=document.getElementById('mail');
             var subject=document.getElementById('subject');
             
           
           
            if(fname.checkValidity)
            {
                document.getElementById("err1").innerHTML=fname.validationMessage;
            }
              if(lname.checkValidity)
            {
                document.getElementById("err2").innerHTML=lname.validationMessage;
            }
            if(mail.checkValidity)
            {
                document.getElementById("err4").innerHTML=mail.validationMessage;
            }
             if(subject.checkValidity)
            {
                document.getElementById("err3").innerHTML=subject.validationMessage;
            }
            
        }
    </script>
      <?php
    $conn = mysqli_connect("localhost","root","","dict");
    $FIRSTNAME=$_GET['fname'];
    $LASTNAME=$_GET['lname'];
    $COUNTRY=$_GET['country'];
    $MAIL=$_GET['mail'];
    $SUGGESTION=$_GET['subject'];
   
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO suggestion ( FIRSTNAME,LASTNAME,COUNTRY,MAIL,SUGGESTION) VALUES ('$FIRSTNAME','$LASTNAME','$COUNTRY','$MAIL','$SUGGESTION')";
    mysqli_query($conn,$query);
        echo 'Inserted Successfully';
?>

</html>