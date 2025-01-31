<?php
include "connection.php";
 if(isset($_POST['btnthem'])){
    $tensp = $_POST['tensp'];

    $anhsp = $_FILES['anhsp']['name'];//chi hien ten hhinh anh
    $anhsp_tmp_name = $_FILES['anhsp']['tmp_name'];

    $giasp = $_POST['giasp'];


    $sql =""
 }
?>


<form action="themsanpham.php" method="post" enctype="multipart/form-data">
    <p>Tên sản phẩm</p>
    <input type="text" name="tensp">

    <p>Anh san pham</p>
    <input type="file" name="anhsp">

    <p> Gia san pham</p>
    <input type="text" name="giasp">


    <button name="btnthem">them san pham</button>

</form>