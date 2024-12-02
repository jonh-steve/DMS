<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data From Database</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-image: url(../images/sea.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      color: white;
      margin: 0;
      padding: 20px;
    }

    table {
      width: 100%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: rgba(255, 255, 255, 0.8);
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

    td {
      background-color: #f2f2f2;
    }

    .button {
      padding: 10px 20px;
      margin: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .button:hover {
      background-color: #45a049;
    }

    .delete-btn {
      background-color: #f44336;
      color: white;
      border-radius: 5px;
      padding: 5px 10px;
    }

    .delete-btn:hover {
      background-color: #d32f2f;
    }

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }
  </style>
</head>

<body>

  <h2>Provost Record</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Số điện thoại</th>
        <th>Họ và Tên</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'connection.php';
      $sql = "SELECT * FROM Provost";
      $query = mysqli_query($conn, $sql);
      while ($row1 = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row1['P_ID']; ?></td>
          <td><?php echo $row1['Phone']; ?></td>
          <td><?php echo $row1['Name']; ?></td>
          <td><?php echo $row1['Address']; ?></td>
          <td><?php echo $row1['Email']; ?></td>
          <td><?php echo $row1['Designation']; ?></td>
          <td>
            <a href="Delete.php?P_ID=<?php echo $row1['P_ID']; ?>" class="delete">Delete</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <div class="center">
    <a href="provost.html" class="button">Thêm </a>
    <a href="../dashboard/home.php" class="button">TRang chính</a>
  </div>

</body>

</html>
