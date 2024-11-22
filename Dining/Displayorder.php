<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách đơn hàng</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url(../images/sea2.jpg) no-repeat center center fixed;
      background-size: cover;
      color: #333;
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="table-container">
    <h2>Chi tiết đơn hàng</h2>
    <table>
      <thead>
        <tr>
          <th>Mã đơn hàng</th>
          <th>Tên sinh viên</th>
          <th>Mã sinh viên</th>
          <th>Loại đơn hàng</th>
          <th>Số lượng</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM orders";
        $query = mysqli_query($conn, $sql);
        while ($row1 = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $row1['order_id']; ?></td>
            <td><?php echo $row1['name']; ?></td>
            <td><?php echo $row1['id']; ?></td>
            <td><?php echo $row1['type']; ?></td>
            <td><?php echo $row1['quantity']; ?></td>
            <td class="action-button">
              <button id="delete">
                <a href="delete.php?order_id=<?php echo $row1['order_id']; ?>">Xóa</a>
              </button>
              <button id="update">
                <a href="order_update.php?order_id=<?php echo $row1['order_id']; ?>">Cập nhật</a>
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
    <a href="../index.php" class="button">Trang chủ</a>
  </div>
</body>

</html>
