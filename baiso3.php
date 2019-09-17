<?php include_once("header.php") ?>
<?php include_once("nav.php") ?>
<?php
$maSinhVien = $ho = $ten = $ngaySinh = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maSinhVien = $_REQUEST["txtMaSinhVien"];
    $ho = $_REQUEST["txtHo"];
    $ten = $_REQUEST["txtTen"];
    $ngaySinh = $_REQUEST["datNgaySinh"];
    $email = $_REQUEST["txtEmail"];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Bạn đã nhập email đúng định dạng";
    } else
        echo "Bạn đã nhập email không đúng định dạng";
    //var_dump($_FILES);
    if ($_FILES["fileAnhDaiDien"]["name"] != "")
        move_uploaded_file(
            $_FILES["fileAnhDaiDien"]["tmp_name"],
            "uploads/avatar.jpg"
        );
}
?>

<form method="post" enctype="multipart/form-data">
    <div>
        <div>
            <label>Mã sinh viên</label>
        </div>
        <div>
            <input required type="text" name="txtMaSinhVien" value="<?php echo $maSinhVien; ?>">
        </div>
        <div>
            <label>Họ</label>
        </div>
        <div>
            <input required type="text" name="txtHo" value="<?php echo $ho; ?>">
        </div>
        <div>
            <label>Tên</label>
        </div>
        <div>
            <input required type="text" name="txtTen" value="<?php echo $ten; ?>">
        </div>
        <div>
            <label>Ngày sinh</label>
        </div>
        <div>
            <input required type="date" name="datNgaySinh" value="<?php echo $ngaySinh; ?>">
        </div>
        <div>
            <label>Email</label>
        </div>
        <div>
            <input required type="email" name="txtEmail" value="<?php echo $email; ?>">
        </div>
        <div>
            <label>Ảnh đại diện</label>
        </div>
        <div>
            <input type="file" name="fileAnhDaiDien" value="">
        </div>


        <div>

        </div>
        <div>
            <input type="submit" name="btnSave" value="Lưu">
        </div>
    </div>
</form>

<?php include_once("footer.php") ?>