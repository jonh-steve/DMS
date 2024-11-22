<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh Sách Vấn Đề Cơ Sở Vật Chất</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    /* Thiết lập chung */
    body {
      background-color: lightskyblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

   
  </style>
</head>

<body>
  <!-- Container cho bảng -->
  <div class="table-container">
    <table>
      <tr>
        <th colspan="9">
          <h2>Danh Sách Vấn Đề Cơ Sở Vật Chất</h2>
        </th>
      </tr>
      <tr>
        <th>Số Phòng</th>
        <th>Quạt Hỏng (Chưa Xử Lý)</th>
        <th>Quạt Hỏng (Đang Xử Lý)</th>
        <th>Quạt Hỏng (Đã Xử Lý)</th>
        <th>Đèn Hỏng (Chưa Xử Lý)</th>
        <th>Đèn Hỏng (Đang Xử Lý)</th>
        <th>Đèn Hỏng (Đã Xử Lý)</th>
        <th>Ngày Chỉnh Sửa Cuối</th>
        <th>Thao Tác</th>
      </tr>
      <?php
      include 'connection.php';
      $sql = "SELECT * FROM Facility_Problem";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row1['Room_Number']; ?></td>
          <td><?php echo $row1['Damaged_Fan_Un']; ?></td>
          <td><?php echo $row1['Damaged_Fan_Pro']; ?></td>
          <td><?php echo $row1['Damaged_Fan_Sol']; ?></td>
          <td><?php echo $row1['Damaged_Light_Un']; ?></td>
          <td><?php echo $row1['Damaged_Light_Pro']; ?></td>
          <td><?php echo $row1['Damaged_Light_Sol']; ?></td>
          <td><?php echo $row1['Modified_Date']; ?></td>
          <td class="action-button">
            <a id="delete" class="button" href="Delete.php?Room_Number=<?php echo $row1['Room_Number']; ?>">Xóa</a>
            <a id="update" class="button" href="Update.php?Room_Number=<?php echo $row1['Room_Number']; ?>">Cập Nhật</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>

  <!-- Các nút hành động -->
  <div class="center-buttons">
    <a href="FP.html" class="button">Thêm Mới</a>
    <a href="index.html" class="button">Tìm Theo Ngày</a>
    <a href="search_update.html" class="button">Tìm Theo Phòng</a>
    <a href="../dashboard/home.php" class="button">Trang Chủ</a>
  </div>
</body>

</html>
