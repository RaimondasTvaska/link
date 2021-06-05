<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<?php
session_start();
echo "<script>";
    if(isset($_SESSION['result'])){
    
           echo" const data = ".$_SESSION['result'];
       
    }else{
        echo" const data = 0";
    }
    echo  "</script>";

?>
    <form action="./link.php" method="get">
        <input name="query" type="hidden"  value="SELECT * from `sales` where 1">
        <button type="submit">uzkrauti duomenis</button>
    </form>
    <br>
    <br>
    <form action="./link.php" method="get">
    <textarea id="w3review" name="query" rows="4" cols="50"  ></textarea>
        <button type="submit">siusti uzklausa</button>
    </form>
    


    <script>
        console.log(data);
    </script>
</body>

</html>