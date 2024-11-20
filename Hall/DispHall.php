<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm nạp dữ liệu từ cơ sở dữ liệu</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background-image: url(../images/sea.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th colspan="6">
        <h2>Hall Record</h2>
      </th>
    </tr>
    <tr>
    <th>Mã Phòng học</th>
      <th>Tên Phòng học</th>
      <th>Tổng số chỗ ngồi</th>
      <th>Số chỗ ngồi còn trống</th>
      <th>Số sinh viên</th>
      <th>Thao tác</th>
    </tr>

    <?php
    include 'connection.php';
    $sql = "SELECT * FROM hall";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>{$row['H_ID']}</td>
                <td>{$row['H_Name']}</td>
                <td>{$row['T_Seat']}</td>
                <td>{$row['A_Seat']}</td>
                <td>{$row['N_Student']}</td>
                <td class='actions'>
                  <button id='delete'><a href='Delete.php?H_ID={$row['H_ID']}'>Delete</a></button>
                </td>
              </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found.</td></tr>";
    }
    ?>
  </table>

  <div style="text-align: center;">
    <button class="button"><a href="Hall.html">Thêm </a></button>
    <button class="button"><a href="../dashboard/home.php">TRang chủ</a></button>
  </div>
</body>

</html>
