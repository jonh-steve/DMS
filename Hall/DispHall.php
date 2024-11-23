<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm nạp dữ liệu từ cơ sở dữ liệu</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    /* Thiết lập chung */


    /* Container cho bảng */
    .table-container {
      max-width: 1200px;
      margin: 40px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Bảng */
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    th, td {
      padding: 10px 15px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
      text-transform: uppercase;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    td.actions {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    td.actions a {
      text-decoration: none;
      color: white;
    }

    td.actions button {
      background-color: #f44336;
      border: none;
      color: white;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    td.actions button:hover {
      background-color: #d32f2f;
    }

    /* Nút hành động */
    .center-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }

    .center-buttons .button {
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      display: inline-block;
    }

    .center-buttons .button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>

  <div class="table-container">
    <h2>Danh Sách Phòng Học</h2>
    <table>
      <thead>
        <tr>
          <th>Mã Phòng học</th>
          <th>Tên Phòng học</th>
          <th>Tổng số chỗ ngồi</th>
          <th>Số chỗ ngồi còn trống</th>
          <th>Số sinh viên</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM hall";
        $query = mysqli_query($conn, $sql);

        if ($query && mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
              <td><?php echo $row['H_ID']; ?></td>
              <td><?php echo $row['H_Name']; ?></td>
              <td><?php echo $row['T_Seat']; ?></td>
              <td><?php echo $row['A_Seat']; ?></td>
              <td><?php echo $row['N_Student']; ?></td>
              <td class="actions">
                <button><a href="Delete.php?H_ID=<?php echo $row['H_ID']; ?>">Xóa</a></button>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='6'>Không tìm thấy bản ghi nào.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="center-buttons">
    <a href="Hall.html" class="button">Thêm</a>
    <a href="../dashboard/home.php" class="button">Trang chủ</a>
  </div>

</body>

</html>
