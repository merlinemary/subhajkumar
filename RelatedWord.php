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
                font-family: monospace;
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
                font-size: 19px;
                font-family: fantasy;
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
            <h3 id="heading">RELATED WORD SEARCH</h3>
            <form id="f">
                <table cellpadding="15px" border="1" class="font">
                   
                      
                      <tr>
                          <td>
                              <label for="country"  class="font">Select The Letter</label></td>
   <td> <select      name="letter" width="40%">
        <option value="_____SELECT____">____SELECT______</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
        <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
         <option value="G">G</option>
      <option value="H">H</option>
      <option value="I">I</option>
        <option value="J">J</option>
      <option value="K">K</option>
      <option value="L">L</option>
        <option value="M">M</option>
      <option value="N">N</option>
      <option value="O">O</option>
         <option value="P">P</option>
      <option value="Q">Q</option>
      <option value="R">R</option>
        <option value="S">S</option>
      <option value="T">T</option>
      <option value="U">U</option>
        <option value="V">V</option>
      <option value="W">W</option>
      <option value="X">X</option>
         <option value="Y">Y</option>
      <option value="Z">Z</option>
      
    </select></td>
                    </tr>
                    
                </table>
                <input type="submit" name="submit" id="submit1" value="RELATED WORD SEARCH"> 
                <br>
                <br>
                <br>
                <br>
                <?php
      if(isset($_GET['submit']))
    {      
      $letter=$_GET['letter'];    
     
    $conn =mysqli_connect("localhost","root","","dict");
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
   // $sql ="SELECT LETTER,WORD,SYNONYMS,ANTONYMS,VERB,ADVERB,ADJECTIVE,NOUN FROM meaning WHERE LETTER='$letter'";
  // $result= mysqli_query($conn,$sql);
                      
               $query="SELECT LETTER,WORD,SYNONYMS,ANTONYMS,VERB,ADVERB,ADJECTIVE,NOUN FROM meaning WHERE LETTER='$letter'";
                if($queryres=mysqli_query($conn,$query))
                     { 
                        $count=1;
                      echo "<table border=1>
                        <tr>
                        <th>Word</th>
                        <th>First Letter</th>
                        <th>Synonyms</th>
                        <th>Antonyms</th>
                        <th>Address</th>
                        <th>Verb</th>
                        <th>Adverb</th>
                        <th>Adjective</th>
                       
                        <th>Noun</th>
                                            
                         </tr>";
                       $row=mysqli_fetch_row($queryres);
          do{
            echo "<tr><td>".$count."</td>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
             echo "<td>$row[3]</td>";
               echo "<td>$row[4]</td>";
               echo "<td>$row[5]</td>";
               echo "<td>$row[6]</td>";
               echo "<td>$row[7]</td>";
                
                
            
            
            "</tr>";
            $row=mysqli_fetch_row($queryres);
            $count++;
          }while($row);
          echo "</table>";
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
                  <h1 class="foot" align="left">____CopyRight 2018-2019,Stella Maris College(Autonomous)
                   All rights reserved.Developed by SUBHALAXMIJAYAKUMAR___</h1> 
                
            </form>
            
        </section>
    </body>
    <script>
        var btn=document.getElementById('submit1');
       
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