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
                font-family: fantasy;
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
 .heading{
                font-size: 15px;
                font-family:monospace;
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
            .foot {
  color:white;
                font-family:sans-serif;
                font-size:12;
                background-color:crimson;
            }
            .dic
            {
                font-family:serif;
                font-size: 68;
                color:white;
                
            }
        </style>
    </head>
    <body>
        <header align="center" class="dic"> ___________DICTIONARY___________</header>
         <aside>
            <br>
            <br>
           
         <input type="button" name="About" value="Dictionary Page" class="link" onclick="window.open('Admin.php','_self');"><br><br>
            <input type="button" name="Home" value="Translation Page" class="link" onclick="window.open('Translation.php','_self');"><br><br>
             <input type="button" name="DictionarySearch" value="Grammatical Page" class="link"  onclick="window.open('grammer.php','_self');" ><br>
              <br>
            <input type="button" name="DictionarySearch" value="Suggestion Page" class="link" onclick="window.open('adminsug.php','_self');" ><br><br>
           <input type="button" name="DictionarySearch" value="User's Detail Page" class="link" onclick="window.open('userd.php','_self'); "><br><br>
           <input type="button" name="DictionarySearch" value="User's Request Page" class="link" onclick="window.open('adminnw.php','_self'); "><br><br>
         
             <input type="button" name="Logout" value="Logout" class="link"   onclick="window.open('AdminLogin.php','_self');"><br><br>
        </aside>
        <section>
            <h2 class="heading">GRAMMATICAL-PAGE</h2>
            <form id="f">
               <div class="container">
                   <br>
                   <br>
                   <br>
                   <br>
                     <label for="fname" class="font">Word</label><br>
    <input type="text" id="fname" name="word" placeholder="Enter the word" id="fname" required><p id="err1"></p><br>
 <label for="fname" class="font">First Letter</label><br>
    <input type="text"  name="first" placeholder="Enter the First Letter" id="lname" required><p id="err2"></p><br>

    <label for="lname"  class="font">Vowels</label><br>
     <select id="country" name="vowels">
      <option value="A">A</option>
      <option value="E">E</option>
      <option value="I">I</option>
         <option value="O">O</option>
         <option value="U">U</option>
    </select><br>
                   <label for="lname"  class="font">Article</label><br>
     <select id="country" name="article">
      <option value="A">A</option>
      <option value="AN">AN</option>
      <option value="THE">THE</option>
      
    </select><br>
                   
                   <label for="fname" class="font">Sentence</label><br>
    <textarea id="subject" name="sentence" placeholder="Write something.." style="height:200px" id="subject"  required></textarea><p id="err3">
<br>
                   <br>

         <input type="submit" value="Submit" id="submit" name="submit">
                    <input type="submit" value="Delete Data" id="submit" name="delete" onclick="window.open('grammerdel.php','_self');">
                    <input type="submit" value="Update Data" id="submit" name="update">
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
           
            check_validation();
        }
        
        function check_validation(){
           
            var fname=document.getElementById('word');
            var lname=document.getElementById('first');
            var email=document.getElementById('vowel');
             var phone=document.getElementById('article');
             
             var pass=document.getElementById('sentence');
            
           
            if(fname.checkValidity)
            {
                document.getElementById("err1").innerHTML=fname.validationMessage;
            }
              if(lname.checkValidity)
            {
                document.getElementById("err2").innerHTML=lname.validationMessage;
            }
            if(email.checkValidity)
            {
                document.getElementById("err3").innerHTML=email.validationMessage;
            }
             if(phone.checkValidity)
            {
                document.getElementById("err4").innerHTML=phone.validationMessage;
            }
             if(pass.checkValidity)
            {
                document.getElementById("err5").innerHTML=pass.validationMessage;
            }
             if(cpass.checkValidity)
            {
                document.getElementById("err6").innerHTML=cpass.validationMessage;
            }
            
        }
    </script>
    <?php
    if(isset($_GET['submit']))
    {
    $conn = mysqli_connect("localhost","root","","dict");
    $WORD=$_GET['word'];
    $FIRST=$_GET['first'];
    $VOWELS=$_GET['vowels'];
    $ARTICLE=$_GET['article'];
    $SENTENCE=$_GET['sentence'];
  
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO grammer ( WORD ,  FIRST , VOWELS, ARTICLE, SENTENCE) VALUES ('$WORD','$FIRST','$VOWELS','$ARTICLE','$SENTENCE')";
    mysqli_query($conn,$query);
     echo "<table align=center border=1 cellpadding=1 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"DATA RECORDED SUCCESSFULLY";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
    }
?>
      <?php
    if(isset($_GET['delete']))
    {      
    $conn =mysqli_connect("localhost","root","","dict");
$WORD=$_GET['word'];
       
    $query="DELETE FROM grammer WHERE WORD='$WORD'";
mysqli_query($conn, $query); 
echo "<table align=center border=1 cellpadding=1 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"DATA DELETED SUCCESSFULLY";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
        mysqli_close($conn);
     
   }
    ?>
     <?php
    if(isset($_GET['update']))
    {      
    $conn =mysqli_connect("localhost","root","","dict");
        
$WORD=$_GET['word'];
    $FIRST=$_GET['first'];
    $VOWELS=$_GET['vowels'];
    $ARTICLE=$_GET['article'];
    $SENTENCE=$_GET['sentence'];
 
    $query="UPDATE grammer SET FIRST='$FIRST',VOWELS='$VOWELS',ARTICLE='$ARTICLE',SENTENCE='$SENTENCE' WHERE WORD='$WORD'";
mysqli_query($conn, $query); 
echo "<table align=center border=1 cellpadding=1 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"DATA UPDATED SUCCESSFULLY";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
        mysqli_close($conn);
     
   }
    ?>


</html>