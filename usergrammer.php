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
         
            <input type="button" name="Home" value="Home" class="link" onclick="window.open('DICTIONARY.php','_self');"><br><br>
            <input type="button" name="DictionarySearch" value="Dictionary Search" class="link"  onclick="window.open('view.php','_self');"><br><br>
            <input type="button" name="TranslationSearch" value="Translation Search" class="link"  onclick="window.open('Translationview.php','_self');"><br><br>
            <input type="button" name="Grammatical WordSearch" value="Grammatical Word Search" class="link"  onclick="window.open('usergrammer.php','_self');"><br><br>
            <input type="button" name="Related WordSearch" value="Related Word Search" class="link"  onclick="window.open('RelatedWord.php','_self');"><br><br>
             
           
             
            <input type="button" name="Administrator" value="Post Your Request" class="link" onclick="window.open('nw.php','_self');"><br><br>
             <input type="button" name="Logout" value="Logout" class="link"   onclick="window.open('Login.php','_self');"><br><br>
        </aside>
        
        <section>
            <h2 class="heading">GRAMMATICAL-PAGE</h2>
            <form id="f">
               <div class="container">
                   <br>
                   <br>
                   
                     <label for="fname" class="font">Word</label><br>
    <input type="text" id="fname" name="word" placeholder="Enter the word that you want to search" id="fname" required><p id="err1"></p><br>
 <label for="fname" class="font">First Letter</label><br>
    <input type="text"  name="first" placeholder="Enter the First Letter of the word that you want to search" id="lname" required><p id="err2"></p><br>

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
                   
                  


         <input type="submit" value="Submit" id="submit" name="submit">
                   
                   
                      <?php
      if(isset($_GET['submit']))
    {      
          $WORD=$_GET['word'];
          $VOWELS=$_GET['vowels'];
          $ARTICLE=$_GET['article'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT WORD,FIRST,VOWELS,ARTICLE,SENTENCE FROM grammer WHERE WORD='$WORD',VOWELS='$VOWELS',ARTICLE='$ARTICLE'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Vowel";
               echo"</td>";
                echo"<td>";
                echo "Article";
               echo"</td>";
                echo"<td>";
                echo "Sentence";
               echo"</td>";
                
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['FIRST'];
               echo"</td>";
               echo"<td>";
                echo $row['VOWELS'];
               echo"</td>";
               echo"<td>";
                echo $row['ARTICLE'];
               echo"</td>";
               echo"<td>";
                echo $row['SENTENCE'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
          else
          {
              echo "<table align=center border=1 cellpadding=20 bgcolor=grey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"NO DATA FOUND";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
          }
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
        
        btn.onclick=function(e){
         
            check_validation();
        }
        
        function check_validation(){
          
            var word=document.getElementById('word');
            var first=document.getElementById('first');
            
             
             
            
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              if(first.checkValidity)
            {
                document.getElementById("err2").innerHTML=first.validationMessage;
            }
           
           
        }
    </script>
  
</html>