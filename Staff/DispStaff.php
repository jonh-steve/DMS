<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Record</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-image: url(../images/g1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }


    .operation-btns {
      display: flex;
      justify-content: space-around;
      align-items: center;
      gap: 10px;
    }

    .operation-btns a {
      padding: 5px 10px;
      background-color: #f44336;
      color: white;
      border-radius: 5px;
      text-decoration: none;
    }

    .operation-btns a:hover {
      background-color: #d32f2f;
    }

    .center-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }
    div a {
      text-decoration: none;
      color: black;
    }
  </style>
</head>

<body>

  <h2>Staff Record</h2>

  <table>
    <thead>
      <tr>
        <th>ID Nhân Viên</th>
        <th>Họ và Tên</th>
        <th>Địa Chỉ</th>
        <th>Email</th>
        <th>Chức Vụ</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'connection.php';
      $sql = "SELECT * FROM Staff";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row1['S_ID']; ?></td>
          <td><?php echo $row1['Name']; ?></td>
          <td><?php echo $row1['Address']; ?></td>
          <td><?php echo $row1['Email']; ?></td>
          <td><?php echo $row1['Designation']; ?></td>
          <td class="operation-btns">
            <a id="delete" href="Delete.php?S_ID=<?php echo $row1['S_ID']; ?>">Xóa</a>
            <a id="update" href="update.php?S_ID=<?php echo $row1['S_ID']; ?>">Cập Nhật</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <div class="center-container">
    <a href="staff.html" class="button">Thêm Mới</a>
    <a href="index.html" class="button">Tìm Kiếm</a>
    <a href="../dashboard/home.php" class="button">Trang Chủ</a>
  </div>

</body>

</html>
