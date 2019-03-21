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
               .f{
                font-size: 12px;
                font-family: monospace;
            }
        </style>
    </head>
    <body> <header align="center" class="dic"> ___________DICTIONARY___________</header>
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
          <h1 class="heading">UPLOADING AUDIO</h1>
        <form  action="upload.php" method="post" enctype="multipart/form-data" id="f">
            
           
       
       
        
             <table cellpadding="15px" border="1" class="font8" width="800" class="font">
                   <tr>
                    
                          <td class="font">  Enter The Word </td>
                        <td><input type="text" name="word" required ></td>
                    </tr>
                      
                     <tr>
                    
                          <td class="font"> Upload the audio </td>
                        <td> <input type="file" name="audioFile"/></td>
                         <td>
                          <input type="submit" value="Upload Audio" name="save_audio" id="submit"/>
                         </td>
                    </tr>
                      
                     
                  
                 
                 
                 
                  
                </table>
         
    
    
    <?php
  if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
  {
      $dir='uploads/';
      $audio_path=$dir.basename($_FILES['audioFile']['name']);
      if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
         {
             echo 'Uploaded Successfully';
          saveAudio($audio_path);
          displayAudios();
         }
  }
function displayAudios()
{
      $conn = mysqli_connect("localhost","root","","dict");
   
   
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="select * from audioss";
    mysqli_query($conn,$query);
     $r=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($r))
    {
        echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
         echo '<a href="play.php?name='.$row['word'].'">'.$row['word'].'</a>';
        echo "<br/>";
    }
mysqli_close($conn);
}
    function saveAudio($fileName)
    {
        $word=$_GET['word'];
    $conn = mysqli_connect("localhost","root","","dict");
   
   
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO audioss (word,filename) VALUES ('$word','{$fileName}')";
    mysqli_query($conn,$query);
        
        if(mysqli_affected_rows($conn)>0)
        {
            echo "audio file path saved in the database";
        }
mysqli_close($conn);

    }
?>
        
               </form>
        </body>
</html>