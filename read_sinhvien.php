<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinhvien</title>
</head>
<body>
    <?php
    $connect = new mysqli('localhost', 'root', '', 'k22cnt3_day08');
    $sql = "SELECT * FROM `sinhvien` WHERE 1=1;";
    $resultset = $connect->query($sql);
    //print_r($resultset);
    //while($row = $resultset->fetch_array()){
        //echo "<P>" .$row[0] ."---" .$row["tensinhvien"];
    //}
    ?>
    <h1>Danh sách sinhvien</h1>
    <hr>
    <table witdh="80% align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sv</th>
                <th>Họ sv</th>
                <th>Tên sv</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Mã Khoa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($resultset->num_rows){
                $stt =0;
                while($row = $resultset->fetch_array()){
                    $stt++;
                    ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $row["makh"]; ?></td>
                <td><?php echo $row["hosv"]; ?></td>
                <td><?php echo $row["tensv"]; ?></td>
                <td><?php echo $row["ngaysinh"]; ?></td>
                <td><?php echo $row["trangthai"]; ?></td>
                <td><?php echo $row["diachi"]; ?></td>
                <td><?php echo $row["dienthoai"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["gioitinh"]; ?></td>
                <td><?php echo $row["makh"]; ?></td>
            </tr>
            <?php
            }
        }else{
            ?>
            <tr>
                <td colspan="10">Chưa có sinh viên nào</td>
            </tr>
            <?php
        }
            ?>
        </tbody>
</table>
</body>
</html>