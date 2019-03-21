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
              .heading{
                font-size: 19px;
                font-family:monospace;
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
  color:white;
                font-family:fantasy;
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
                font-family: monospace;
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
            <h1 class="heading">ADMINISTRATOR PAGE</h1>
             <form id="f">
               <div class="container">
                     <label for="fname" class="font">Enter The Word</label><br>
    <input type="text" id="word" name="word" placeholder="Word" id="fname" required pattern="[A-Za-z]{1,20}{""}"><p id="err1"></p><br>
                   <label for="fname" class="font">Enter The First Letter</label><br>
    <input type="text"  name="first" placeholder="First Letter" id="first" required pattern="[A-Za-z]{1,20}{""}"><p id="err11"></p><br>
 <label for="fname" class="font">Enter The Synonyms</label><br>
    <input type="text"  name="synonyms" placeholder="Synonyms" id="synonyms" required pattern="[A-Za-z]{1,20}{""}"><p id="err2"></p><br>

    <label for="lname"  class="font">Enter The Antonyms</label><br>
    <input type="text"  name="antonyms" placeholder="Antonyms" id="antonyms" required pattern="[A-Za-z]{1,20}{""}"><p id="err3"></p><br>
                   <label for="fname" class="font"> Enter The Verb</label><br>
    <input type="text" name="verb" placeholder="Verb" id="verb" required pattern="[A-Za-z]{1,20}{""}"><p id="err4"></p><br>

<label for="lname"  class="font">Enter The Adverb</label><br>
    <input type="text"  name="adverb" placeholder="Adverb" id="adverb" required pattern="[A-Za-z]{1,20}{""}"><p id="err5"></p><br>
                   <label for="fname" class="font">Enter The Adjective</label><br>
    <input type="text" name="adjective" placeholder="Adjective" id="adjective" required pattern="[A-Za-z]{1,20}{""}"><p id="err6"></p><br>

  <label for="fname" class="font">Enter The Noun</label><br>
    <input type="text" name="noun" placeholder="Noun" id="noun" required pattern="[A-Za-z]{1,20}{""}"><p id="err7"></p><br>

   

    <input type="submit" value="Submit" id="submit" name="submit">
                    <input type="submit" value="Delete" id="submit" name="delete"   onclick="window.open('meaningdel.php','_self');">
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
            var word=document.getElementById('word');
             var first=document.getElementById('first');
            var synonyms=document.getElementById('synonyms');
            var antonyms=document.getElementById('antonyms');
            var verb=document.getElementById('verb');
            var adverb=document.getElementById('adverb');
             var adjective=document.getElementById('adjective');
             var noun=document.getElementById('noun');
               
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
            if(word.validity.patternMismatch)
                
                {
                  document.getElementById("err1").innerHTML=word.validationMessage;  
                }
             if(first.checkValidity)
            {
                document.getElementById("err11").innerHTML=first.validationMessage;
            }
            if(first.validity.patternMismatch)
                
                {
                  document.getElementById("err11").innerHTML=first.validationMessage;  
                }
            if(synonyms.checkValidity)
            {
                document.getElementById("err2").innerHTML=synonyms.validationMessage;
            } 
             if(synonyms.validity.patternMismatch)
                
                {
                  document.getElementById("err2").innerHTML=synonyms.validationMessage;  
                }
            if(antonyms.checkValidity)
            {
            	console.log("required");
                document.getElementById("err3").innerHTML=antonyms.validationMessage;
            }
            
            else{
            	console.log("right");
            	document.getElementById("err3").innerHTML=" ";   
            }
             if(antonyms.validity.patternMismatch)
                
                {
                  document.getElementById("err3").innerHTML=antonyms.validationMessage;  
                }
            if(verb.checkValidity){
            	
                document.getElementById("err4").innerHTML=verb.validationMessage;
            }
             if(verb.validity.patternMismatch)
                
                {
                  document.getElementById("err4").innerHTML=verb.validationMessage;  
                }
            if(adverb.checkValidity){
            	
             document.getElementById("err5").innerHTML=adverb.validationMessage;  
            }
            else{
            	
            	 document.getElementById("err4").innerHTML=" ";   
            }
             if(adverb.validity.patternMismatch)
                
                {
                  document.getElementById("err5").innerHTML=adverb.validationMessage;  
                }
            if(adjective.checkValidity){
                 document.getElementById("err6").innerHTML=adjective.validationMessage;
             }
             if(adjective.validity.patternMismatch)
                
                {
                  document.getElementById("err6").innerHTML=adjective.validationMessage;  
                }
            if(noun.checkValidity){
                 document.getElementById("err7").innerHTML=noun.validationMessage;
             }
             if(noun.validity.patternMismatch)
                
                {
                  document.getElementById("err7").innerHTML=noun.validationMessage;  
                }
            
        }
    </script>
     <?php
    if(isset($_GET['submit']))
    {
    $conn = mysqli_connect("localhost","root","","dict");
    $WORD=$_GET['word'];
    $LETTER=$_GET['first'];
    $SYNONYMS=$_GET['synonyms'];
    $ANTONYMS=$_GET['antonyms'];
    $VERB=$_GET['verb'];
    $ADVERB=$_GET['adverb'];
    $ADJECTIVE=$_GET['adjective'];
    $NOUN=$_GET['noun'];
  
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO meaning ( WORD,LETTER,SYNONYMS,ANTONYMS,VERB,ADVERB,ADJECTIVE,NOUN) VALUES ('$WORD','$LETTER','$SYNONYMS','$ANTONYMS','$VERB','$ADVERB','$ADJECTIVE','$NOUN')";
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
    if(isset($_GET['update']))
    {      
    $conn =mysqli_connect("localhost","root","","dict");
        
 $WORD=$_GET['word'];
    $LETTER=$_GET['first'];
    $SYNONYMS=$_GET['synonyms'];
    $ANTONYMS=$_GET['antonyms'];
    $VERB=$_GET['verb'];
    $ADVERB=$_GET['adverb'];
    $ADJECTIVE=$_GET['adjective'];
    $NOUN=$_GET['noun'];
       
    $query="UPDATE meaning SET LETTER='$LETTER',SYNONYMS='$SYNONYMS',ANTONYMS='$ANTONYMS',VERB='$VERB',ADVERB='$ADVERB',ADJECTIVE='$ADJECTIVE',NOUN='$NOUN' WHERE WORD='$WORD'";
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