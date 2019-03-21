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
                right:30;
                background-color:crimson;
                width: 70%;
                height: 50px;
                color: white;
                padding:10px;
                margin: 10px;
                font-weight: bold;
                font-size: 12;
            }
           .heading{
                font-size: 19px;
                font-family:monospace;
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
                 .dic
            {
                font-family:serif;
                font-size: 68;
                color:white;
                
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
            <h3 class="heading">READY TO PLAY THE GAME</h3>
            <form id="f">
                <table cellpadding="15px" border="1">
                   
                      
                      <tr>
                       
                       
                        <td><textarea rows="10" cols="90" id="msg"  >I bought an Umbrella yesterday</textarea></td>
 
                    </tr>
                    <tr>
                        <td valign="top">What does an refers to??</td>
                    </tr>
                    <tr>
                        <td>A.<input type="checkbox" value="come to party " onclick=alert("Wrong answer") name="a">Article</td><br>
                    </tr>
                    <tr>
                         <td>B.<input type="checkbox" value="go to a concert " onclick=alert("Correct answer") name="b">Vowel</td><br>
                    </tr>
                    <tr>
                         <td>C.<input type="checkbox" value="give somebody a message"onclick=alert("Wrong answer") name="c">Verb</td><br>
                    </tr>
                </table>
                <input type="submit" name="submit" id="submit1" value="Submit Answer" name="submit">
                    <input type="button" name="submit" id="submit1" value="Previous" onclick="window.open('Game.php','_self');"> 
                <input type="button" name="submit" id="submit1" value="Next" onclick="window.open('q3.php','_self');"> 
             <h1 class="foot" align="left">____CopyRight 2018-2019,Stella Maris College(Autonomous)
                   All rights reserved.Developed by SUBHALAXMIJAYAKUMAR___</h1> 
            </form>
             <?php

if(isset($_GET['submit']))
{
  $ans=$_GET['c'];
  
  
  if($name==$ans)
  {
      
    echo
                       "<script>if(confirm('Right Answer'))
                       {
                       
                       }
                       </script>";
                       
                     
               }
          else
          {
             echo
                  "<script>if(confirm('Wrong Answer'))
                  {
                  
                  }
                       
                       </script>";
                       
             
          }
   
}
?>
        </section>
    </body>
    <script>
        var btn=document.getElementById('submit');
        var login=document.getElementById('Login');
        btn.onclick=function(e){
            check_validation();
        }
        
        function check_validation(){
            var word=document.getElementById('word');
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
          
            
        }
    </script>
</html>