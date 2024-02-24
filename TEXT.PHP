<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    
   button{
        border-radius:5px;
        padding:5px;
        
    }
    .btna{
        background-color:green;
    }
    .btnb{
        background-color:orange;
        
    }
    .btnc{
        background-color:red;
    }
    .btnd{
        background-color:yellow;
    }
    .Save{
        background-color:skyblue;}
    
    body{
        text-align:center;
        margin-top:100px;
    }
   
    
   
    </style>

</head>
<body>
    <form action="TEXT.PHP" method="GET">
 <h1>Text Edit<i class="fa-regular fa-face-smile"></i>r</h1>
<b>Type</b> <input type="text" placeholder="Text here" name="input" id="u"><br><br>
<button type="submit" class="btna" name="btna"><B>BOLD</B></button>
<button type="submit" class="btnb"name="btnb"><em>Italic</em></button>
<button type="submit" class="btnc"name="btnc">UPPERCASE</button>
<button type="submit" class="btnd"name="btnd">lowercase</button>
</form>
<?php
if(isset($_GET['btna'])){
    $input=$_GET['input'];
    echo"<br><h3><b>$input</h3></b>";
    }
    elseif(isset($_GET['btnb'])){
        $input=$_GET['input'];
        echo"<br><H3><em>$input</em></H3>";
        }
        elseif(isset($_GET['btnc'])){
            $input=$_GET['input'];
            $input=strtoupper($input);
            echo "<br><H3>$input</H3>";
        }
    elseif(isset($_GET['btnd'])){
        $input=$_GET['input'];
        $input=strtolower($input);
        echo "<br><H3>$input</H3>";
    }
?>
</body>

</html>