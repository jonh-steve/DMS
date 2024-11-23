<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hồ Sơ Sinh Viên</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    /* Định dạng cơ bản */
    body {
      background-color: lightblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    .table-container {
      max-width: 1200px;
      margin: 0 auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .actions a {
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
      color: white;
    }

    .actions a#delete {
      background-color: #f44336;
    }

    .actions a#delete:hover {
      background-color: #d32f2f;
    }

    .actions a#update {
      background-color: #2196F3;
    }

    .actions a#update:hover {
      background-color: #1976D2;
    }

    .center-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }

    .center-buttons a {
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
    }

    .center-buttons a:hover {
      background-color: #45a049;
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
        if (mysqli_num_rows($query) > 0) {
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
                <a id="delete" href="Delete.php?Stu_id=<?php echo $row1['Stu_id']; ?>" aria-label="Xóa sinh viên <?php echo $row1['Name']; ?>">Xóa</a>
                <a id="update" href="Update.php?Stu_id=<?php echo $row1['Stu_id']; ?>" aria-label="Cập nhật thông tin <?php echo $row1['Name']; ?>">Cập Nhật</a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='8'>Không tìm thấy bản ghi nào.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="center-buttons">
    <a href="student.html">Thêm Mới</a>
    <a href="index.html">Tìm Kiếm</a>
    <a href="../dashboard/home.php">Trang Chủ</a>
  </div>

</body>

</html>
