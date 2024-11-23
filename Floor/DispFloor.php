<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh Sách Các Tầng</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-image: url(../images/sea2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 20px;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <div class="table-container">
    <h2>Danh Sách Các Tầng</h2>

    <table>
      <thead>
        <tr>
          <th>Số Tầng</th>
          <th>Khối</th>
          <th>Số Nhà Bếp</th>
          <th>Số Phòng</th>
          <th>Số Phòng Tắm</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php'; // Kết nối cơ sở dữ liệu
        $sql = "SELECT * FROM floor"; // Câu truy vấn SQL
        $query = mysqli_query($conn, $sql); // Thực thi câu truy vấn

        // Duyệt qua tất cả các bản ghi trong cơ sở dữ liệu
        while ($row1 = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $row1['Floor_Number']; ?></td>
            <td><?php echo $row1['Block']; ?></td>
            <td><?php echo $row1['Num_of_Kitchen']; ?></td>
            <td><?php echo $row1['Num_of_Room']; ?></td>
            <td><?php echo $row1['Num_of_Washroom']; ?></td>
            <td class="action-button">
              <a href="Delete.php?Floor_Number=<?php echo $row1['Floor_Number']; ?>" id="delete">Xóa</a>
              <a href="Update.php?Floor_Number=<?php echo $row1['Floor_Number']; ?>" id="update">Cập Nhật</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="center-buttons">
    <a href="Floor.html" class="button">Thêm Mới</a>
    <a href="index.html" class="button">Tìm Kiếm</a>
    <a href="../dashboard/home.php" class="button">Trang Chủ</a>
  </div>
</body>

</html>
