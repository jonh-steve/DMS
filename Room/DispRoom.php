<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông tin phòng</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-image: url(../images/sea.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    div a {
      text-decoration: none;
      color: black;
    }
  </style>
</head>

<body>

  <h2>Dữ liệu phòng</h2>

  <table>
    <thead>
      <tr>
        <th>Số phòng</th>
        <th>Số lượng bảng</th>
        <th>Số lượng giường</th>
        <th>Số tầng</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'connection.php';
      $sql = "SELECT * FROM room";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row1['Room_Number']; ?></td>
          <td><?php echo $row1['Num_of_Table']; ?></td>
          <td><?php echo $row1['Num_of_Bed']; ?></td>
          <td><?php echo $row1['Floor_Number']; ?></td>
          <td>
            <button id="delete"><a href="Delete.php?Room_Number=<?php echo $row1['Room_Number']; ?>" id="link1">Xóa</a></button>
            <button id="update"><a href="Update.php?Room_Number=<?php echo $row1['Room_Number']; ?>" id="link1">Cập nhật</a></button>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <div class="center-container">
    <button>
    <a href="Room.html" class="button" >Thêm phòng mới</a>
    </button>
    <button>
    <a href="index.html" class="button">Tìm kiếm</a>
    </button>
    <button>
    <a href="../dashboard/home.php" class="button">Trang chủ</a>
    </button>
  </div>

</body>

</html>
