<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>Thêm mới khách hàng</tr>
            <tr>
                <td>MAKH</td>
                <td><input type="text" name="txtMakh" ></td>
            </tr>
            <tr>
                <td>HỌ TÊN</td>
                <td><input type="text" name="txtHt" ></td>
            </tr>
            <tr>
                <td>ĐỊA CHỈ</td>
                <td><input type="text" name="txtDc" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Thêm mới">
                    <input type="reset" name="reset" value="Hủy">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if ($_POST) {
        $MAKH = $_POST['txtMakh'];
        $HOTEN = $_POST['txtHt'];
        $DC = $_POST['txtDc'];
        $sql = "insert into khachhang(MAKH,HOTEN,DC) values('$MAKH','$HOTEN','$DC')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Thêm thông tin khách hàng thành công";
        } else {
            echo "Thêm thông tin khách hàng thất bại";
        }
    }
    ?>
</body>

</html>