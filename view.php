
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
                height: 100%;
              
           
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
                
            }
            .heading{
                font-size: 19px;
            }
            form{
                position: absolute;
                left:0;
                background-color: #f2f3f5;
                color:#f2f3f5;
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
            }  
             #submit1{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            } 
             #submit2{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            }  
             #submit3{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            }  
             #submit4{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            }  
             #submit5{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
                color: white;
                font-style: bold;
                border:none;
            }  
             #submit6{
                background-color: #e7b44a;
                padding: 10px;
                margin: 10px;
                padding-left:30px;
                padding-right: 30px;
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
  width: 90%;
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
}  .font2 {
  color:black;
                font-family:sans-serif;
                font-size:12;
}
              .font {
  color:white;
                font-family:sans-serif;
                font-size:12;
}
             
              .font8 {
  color:red;
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
                font-family: monospace;
            }
        </style>
    </head>
   <body> <header align="center" class="dic"> ___________DICTIONARY___________</header>
        <aside>
         
            <input type="button" name="Home" value="Home" class="link" onclick="window.open('DICTIONARY.php','_self');"><br><br>
            <input type="button" name="DictionarySearch" value="Dictionary Search" class="link"  onclick="window.open('view.php','_self');"><br><br>
            <input type="button" name="TranslationSearch" value="Translation Search" class="link"  onclick="window.open('Translationview.php','_self');"><br><br>
            <input type="button" name="Grammatical WordSearch" value="Grammatical Word Search" class="link"  onclick="window.open('usergrammer.php','_self');"><br><br>
            <input type="button" name="Related WordSearch" value="Related Word Search" class="link"  onclick="window.open('RelatedWord.php','_self');"><br><br>
             
           
             
            <input type="button" name="Administrator" value="Post Your Request" class="link" onclick="window.open('nw.php','_self');"><br><br>
             <input type="button" name="Logout" value="Logout" class="link"   onclick="window.open('Login.php','_self');"><br><br>
        </aside>
        
       <section >
          
             <h1 class="heading">DICTIONARY SEARCH</h1>
          
            <form id="font">
               
                
               <?php
                session_start();
             
                    
               ?>
                    
                <table cellpadding="15px" border="1" class="font8" width="800">
                   <tr>
                    
                       </tr>
                     <tr>
                        <td>Welcome......
                           
                              <?php
                
                if(isset($_SESSION['fss']))
                {
                    $ss=$_SESSION['fss'];
                     echo $ss;
                }
                
               ?>
                            <br>
                            <br>
                            
                            
                            Enter The Word </td>
                        <td><input type="text" name="word" required id="word" ><p id="err1"></p></td>
                    </tr>
                      
                     
                  
                </table>
                <br>
                <br>
                <br>
               
                <input type="submit" name="submit" id="submit" value="Synonyms" >   <input type="submit" name="antonyms" id="submit1" value="Antonyms" >   <input type="submit" name="verb" id="submit2" value="Verb" >   <input type="submit" name="adverb" id="submit3" value="Adverb" >   <input type="submit" name="adjective" id="submit4" value="Adjective" >   <input type="submit" name="noun" id="submit6" value="Noun" > 
                  <?php
      if(isset($_GET['submit']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT SYNONYMS,WORD,LETTER,filename FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           mysqli_query($conn,$query);
  
       while($row=mysqli_fetch_array($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Synonyms";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['SYNONYMS'];
               echo"</td>";
                echo"<td>";
               echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
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
      
   
   <?php
      if(isset($_GET['antonyms']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT ANTONYMS,WORD,LETTER FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Antonyms";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['ANTONYMS'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
          else
          {
              echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"NO DATA FOUND";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
          }
    }
?>
                  <?php
      if(isset($_GET['verb']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT VERB,WORD,LETTER FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Verb";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['VERB'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
           else
          {
              echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"NO DATA FOUND";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
          }
    }
?>
                      <?php
              
      if(isset($_GET['adverb']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT ADVERB,WORD,LETTER FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Adverb";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['ADVERB'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
          else
          {
              echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"NO DATA FOUND";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
          }
    }
?>
                      <?php
      if(isset($_GET['adjective']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT ADJECTIVE,WORD,LETTER FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Adjective";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['ADJECTIVE'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
           else
          {
              echo "<table align=center border=1 cellpadding=20 bgcolor=lightgrey style=color:black bordercolor=black style=font-family:monospace>";
                   echo"<tr>";
                   echo"<td>";
               echo"NO DATA FOUND";
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
          }
    }
?>
                      <?php
      if(isset($_GET['noun']))
    {      
          $WORD=$_GET['word'];
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $sql ="SELECT NOUN,WORD,LETTER FROM meaning WHERE WORD='$WORD'";
   $result= mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               echo "<table align=center border=1>";
                   echo"<tr>";
                   echo"<td>";
                echo "Word";
               echo"</td>";
                echo"<td>";
                echo "First Letter";
               echo"</td>";
                echo"<td>";
                echo "Noun";
               echo"</td>";
               echo"</tr>";
               echo"<tr>";
                   echo"<td>";
                echo $row['WORD'];
               echo"</td>";
                echo"<td>";
                echo $row['LETTER'];
               echo"</td>";
               echo"<td>";
                echo $row['NOUN'];
               echo"</td>";
               echo"</tr>";
               

                   echo"</table>";
                   
           }
       }
           else
          {
              echo "<table align=center border=1>";
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
                 
            </form>
       </section>
       
    </body>
    <script>
        var btn=document.getElementById("submit");
       
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
        
          var btn1=document.getElementById("submit1");
       
        btn1.onclick=function(e){
          
            check_validation();
        }
        
        function check_validation1(){
           
            var word=document.getElementById('word');
           
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              
        }
         var btn2=document.getElementById("submit2");
       
        btn2.onclick=function(e){
          
            check_validation();
        }
        
        function check_validation2(){
           
            var word=document.getElementById('word');
           
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              
        }
         var btn3=document.getElementById("submit3");
       
        btn3.onclick=function(e){
          
            check_validation();
        }
        
        function check_validation3(){
           
            var word=document.getElementById('word');
           
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              
        }
               var btn4=document.getElementById("submit4");
       
        btn4.onclick=function(e){
          
            check_validation();
        }
        
        function check_validation4(){
           
            var word=document.getElementById('word');
           
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              
        }
          
           var btn6=document.getElementById("submit6");
       
        btn6.onclick=function(e){
          
            check_validation();
        }
        
        function check_validation6(){
           
            var word=document.getElementById('word');
           
           
            if(word.checkValidity)
            {
                document.getElementById("err1").innerHTML=word.validationMessage;
            }
              
        }
              
        
    </script>
  
                                          
</html>