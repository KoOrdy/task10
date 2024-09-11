<?php
    require_once "../controller/connect.php";
    session_start();
    $sql=mysqli_query($connect,"SELECT * FROM `students`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list students</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #007bff, #f4d03f);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            margin-top: 80px ;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4d03f;
            color: #333;
        }

        img {
            max-width: 60px;
            max-height: 60px;
        }

        .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn.update {
            background-color: #28a745;
        }

        .btn.delete {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.8;
        }
        .success-message {
            background-color: rgba(0, 128, 0, 0.8);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
            text-align: center;
            width: 100%;
            max-width: 450px;
        }
    </style>
</head>
<body>
    <?php
    require_once "../view/nav.php";
    ?>

    <?php 
       
       if(isset($_SESSION['update'])) {
        echo '<p class="success-message">'.$_SESSION['update']. '</p>';
    
        unset($_SESSION['update']);
        } 
    ?>
    <?php
        if(isset($_SESSION['delete'])) {
            echo '<p class="success-message">'.$_SESSION['delete']. '</p>';
        
            unset($_SESSION['delete']);
        }
    ?>
 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($sql)>0){
            while($row=mysqli_fetch_assoc($sql)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td><img src='". $row['image']."' alt='Profile Image'></td>";
                echo "<td>
                        <a href='update_student.php?id=".$row['id']."' class='btn update'>Update</a>
                        <a href='../controller/delete_student_back.php?id=".$row['id']."' class='btn delete'>Delete</a>
                    </td>";
                echo "</tr>";
            }
        }

    ?>
</body>

</html>
