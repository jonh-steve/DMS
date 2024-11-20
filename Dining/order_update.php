<?php
include_once 'connection.php';
if (count($_POST) > 0) {
  mysqli_query($conn, "UPDATE orders SET order_id='" . $_POST['order_id'] . "', name='" . $_POST['name'] . "', id='" . $_POST['id'] . "', type='" . $_POST['type'] . "', quantity='" . $_POST['quantity'] . "' WHERE order_id='" . $_POST['order_id'] . "'");
}
$result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id='" . $_GET['order_id'] . "'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cập nhật thông tin đơn hàng</title>
  <style>
    /* Thiết lập chung cho giao diện */
    body {
      background-image: url(../images/sea2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }

    /* Thiết lập vùng chứa form */
    .form-container {
      width: 50%;
      margin: 80px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .form-container h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    /* Thiết lập trường nhập liệu */
    .form-container .form-group {
      margin-bottom: 20px;
    }

    .form-container label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container input[type="number"] {
      width: 96%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    /* Thiết lập nút gửi form */
    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-container input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Thiết lập hiển thị trên các thiết bị nhỏ hơn */
    @media (max-width: 768px) {
      .form-container {
        width: 80%;
      }
    }
  </style>
</head>

<body>
  <!-- Form cập nhật thông tin đơn hàng -->
  <form name="frmUser" method="post" action="">
    <div class="form-container">
      <h2>Cập nhật thông tin đơn hàng</h2>
      <!-- Mã đơn hàng (trường ẩn và trường hiển thị) -->
      <div class="form-group">
        <label for="order_id">Mã đơn hàng:</label>
        <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
        <input type="text" name="order_id" value="<?php echo $row['order_id']; ?>" readonly>
      </div>
      <!-- Tên người dùng -->
      <div class="form-group">
        <label for="name">Tên sinh viên:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
      </div>
      <!-- Mã sinh viên -->
      <div class="form-group">
        <label for="id">Mã sinh viên:</label>
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
      </div>
      <!-- Loại đơn hàng -->
      <div class="form-group">
        <label for="type">Loại đơn hàng:</label>
        <select name="type" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
          <option value="breakfast" <?php if ($row['type'] == 'breakfast') echo 'selected'; ?>>Bữa sáng</option>
          <option value="lunch" <?php if ($row['type'] == 'lunch') echo 'selected'; ?>>Bữa trưa</option>
          <option value="dinner" <?php if ($row['type'] == 'dinner') echo 'selected'; ?>>Bữa tối</option>
        </select>
      </div>
      <!-- Số lượng -->
      <div class="form-group">
        <label for="quantity">Số lượng:</label>
        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>">
      </div>
      <!-- Nút gửi -->
      <input type="submit" name="submit" value="Cập nhật">
    </div>
  </form>
</body>

</html>
