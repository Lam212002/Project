<?php
require './config/database.php';
$sql_danhmuc = "SELECT * FROM tbl_categry ORDER BY id_danhmuc ASC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="menu-loai-san-pham">
        <h3>Phụ kiện quần áo</h3>
        <ul>
            <?php
             while($row=mysqli_fetch_array($query_danhmuc)){
            ?>
            <li><a href="?mod=shop&act=main&id=<?php echo$row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            
            <?php
             }
            ?>
        </ul>
    </div>
</body>

</html>