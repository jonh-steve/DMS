<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hồ Sơ Sinh Viên</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-color: lightblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
  </style>
</head>

<body>

  <div class="table-container">
    <h2>Hồ Sơ Sinh Viên</h2>

    <table>
      <thead>
        <tr>
          <th>ID Sinh Viên</th>
          <th>Tên</th>
          <th>Khoa</th>
          <th>Học Kỳ</th>
          <th>Ký Túc Xá</th>
          <th>Số Phòng</th>
          <th>Số Tầng</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM Student";
        $query = mysqli_query($conn, $sql);
        while ($row1 = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $row1['Stu_id']; ?></td>
            <td><?php echo $row1['Name']; ?></td>
            <td><?php echo $row1['Department']; ?></td>
            <td><?php echo $row1['Session']; ?></td>
            <td><?php echo $row1['hall']; ?></td>
            <td><?php echo $row1['Room_Number']; ?></td>
            <td><?php echo $row1['Floor_Number']; ?></td>
            <td class="actions">
              <button id="delete">
                <a href="Delete.php?Stu_id=<?php echo $row1['Stu_id']; ?>">Xóa</a>
              </button>
              <button id="update">
                <a href="Update.php?Stu_id=<?php echo $row1['Stu_id']; ?>">Cập Nhật</a>
              </button>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="center-buttons">
    <a href="student.html" class="button">Thêm Mới</a>
    <a href="index.html" class="button">Tìm Kiếm</a>
    <a href="../dashboard/home.php" class="button">Trang Chủ</a>
  </div>

</body>

</html>
