 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    <link rel="stylesheet" href="../css/style.css">
    <style>
      body{
        background-image: url(../images/sea2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        
      }
      
      </style>
	</head> 
  
<body>
    <h2>Danh Sách Các Tầng</h2>
    <table>
        <thead>
            <tr>
                <th colspan="6">Thông Tin Tầng</th>
            </tr>
            <tr>
                <th>Số Tầng</th>
                <th>Khối</th>
                <th>Số Nhà Bếp</th>
                <th>Số Phòng</th>
                <th>Số Phòng Tắm</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'connection.php'; // Kết nối cơ sở dữ liệu
                $sql = "SELECT * FROM floor"; // Câu truy vấn SQL
                $query = mysqli_query($conn, $sql); // Thực thi câu truy vấn

                // Duyệt qua tất cả các bản ghi trong cơ sở dữ liệu
                while ($row1 = mysqli_fetch_array($query)) { 
            ?>
            <tr>
                <td><?php echo $row1['Floor_Number']; ?></td> <!-- Hiển thị số tầng -->
                <td><?php echo $row1['Block']; ?></td> <!-- Hiển thị khối -->
                <td><?php echo $row1['Num_of_Kitchen']; ?></td> <!-- Hiển thị số nhà bếp -->
                <td><?php echo $row1['Num_of_Room']; ?></td> <!-- Hiển thị số phòng -->
                <td><?php echo $row1['Num_of_Washroom']; ?></td> <!-- Hiển thị số phòng tắm -->
                <td>
                    <button id="delete" ><a href="Delete.php?Floor_Number=<?php echo $row1['Floor_Number']; ?>">Xóa</a></button>
                    <button id ="update"><a href="Update.php?Floor_Number=<?php echo $row1['Floor_Number']; ?>">Cập nhật</a></button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="center-buttons" >
        <button class="button">
          <a href="Floor.html">Thêm Mới</a>
        </button> 
        <button class="button">
          <a href="index.html">Tìm Kiếm</a>
        </button>
        <button class="button">
          <a href="../dashboard/home.php">Trang Chủ</a>
        </button>
    </div>




</body>
	</html>