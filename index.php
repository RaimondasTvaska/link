<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
</style>


<body>
<?php
session_start();
echo "<script>";
if (isset($_SESSION['result'])) {
    echo " const data = " . $_SESSION['result'];
} else {
    echo " const data = 0";
}
if(isset( $_SESSION['query'])){
    $q = $_SESSION['query'];
}else{
    $q = "";
}
echo "</script>";
?>
    <form action="./link.php" method="get">
        <input name="query" type="hidden"  value="SELECT * from  `sales` where 1">
        <button type="submit">uzkrauti duomenis</button>
    </form>
    <br>
    <br>
    <form action="./link.php" method="get">
    <textarea id="w3review" name="query" rows="10" cols="50"  ><?php echo $q ?></textarea>
        <button type="submit">siusti uzklausa</button>
    </form>
    
<table id="table">

</table>

    <script src="./render.js"></script>
</body>

</html>