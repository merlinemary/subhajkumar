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
                width: 60%;
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
        .font2 {
  color:white;
                font-family:sans-serif;
                font-size:12;
}
             .f
             {
                 font-family:monospace;
                 font-size: 12;
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
    <body>
       <header align="center" class="dic"> ___________DICTIONARY___________</header>
         <aside>
         
            <input type="button" name="Home" value="Home" class="link" onclick="window.open('DICTIONARY.php','_self');"><br><br>
            <input type="button" name="DictionarySearch" value="Dictionary Search" class="link"  onclick="window.open('view.php','_self');"><br><br>
            <input type="button" name="TranslationSearch" value="Translation Search" class="link"  onclick="window.open('Translationview.php','_self');"><br><br>
            <input type="button" name="Grammatical WordSearch" value="Grammatical Word Search" class="link"  onclick="window.open('usergrammer.php','_self');"><br><br>
            <input type="button" name="Related WordSearch" value="Related Word Search" class="link"  onclick="window.open('RelatedWord.php','_self');"><br><br>
             
           
             
            <input type="button" name="Administrator" value="Post Your Request" class="link" onclick="window.open('nw.php','_self');"><br><br>
             <input type="button" name="Logout" value="Logout" class="link"   onclick="window.open('Login.php','_self');"><br><br>
        </aside>
        
        <section>
            <h3 class="heading">ADMINISTARTOR LOGIN-IN PAGE</h3>
            <form class="f">
                
                <table cellpadding="15px" border="1">
                    <br>
                    <br>
                    <tr>
                        <td>Role</td>
                        <td><input type="text" name="role"  id="role" value="ADMINISTRATOR" readonly class="f"></td>
                    </tr>
                    <tr>
                        <td>Administrator  UserName:</td>
                        <td><input type="text" name="fname" required id="fname" class="f"><p id="err1"></p></td>
                    </tr>
                    
                       
                  
                     <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" id="password" required><p id="err5"></p></td>
                    </tr>
                       
                </table>
                <br>
                    <br>
                <input type="submit" name="submit" id="submit" value="Login-In">
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
  $name=$_GET['fname'];
  $pwd=$_GET['pass'];
  
  if($name=="admin" && $pwd=="admin123")
  {
      
    echo
                       "<script>if(confirm('Valid Username And Password'))
                       {
                       document.location.replace('Translation.php')};</script>";
                       
                     
               }
          else
          {
             echo
                  "<script>if(confirm('Invalid Username And Password'))
                       {
                       document.location.replace('AdminLogin.php')};</script>";
                       
             
          }
   
}
?>
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
          
           
           
            var password=document.getElementById('password');
            
              
            if(fname.checkValidity)
            {
                document.getElementById("err1").innerHTML=fname.validationMessage;
            }
            
           
            if(password.checkValidity){
                 document.getElementById("err5").innerHTML=password.validationMessage;
             }
           
        }
    </script>
</html>