<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa dữ liệu</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>Thêm mới khách hàng</tr>
            <tr>
                <td>MAKH</td>
                <td><input type="text" name="txtMakh" ></td>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Xóa">
                    <input type="reset" name="reset" value="Hủy">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if ($_POST) {
        $MAKH = $_POST['txtMakh'];
        $sql = "delete from khachhang where MAKH='$MAKH'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Xóa thông tin khách hàng thành công";
        } else {
            echo "Xóa thông tin khách hàng thất bại";
        }
    }
    ?>
</body>

</html>