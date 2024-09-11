<?php
    session_start();
    require_once "add_student.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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

       
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            margin-top: 80px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="tel"],
        input[type="file"] {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            width: 100%;
        }

        input[type="file"] {
            border: none;
            font-size: 14px;
            padding: 8px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
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

        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                margin-top: 120px;
            }

            nav ul li a {
                font-size: 14px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>

</head>

<body>
  <?php
  require_once '../view/nav.php';
  ?>
    
    <?php 
       
       if(isset($_SESSION['sucees'])) {
        echo '<p class="success-message">' .$_SESSION['sucees']. '</p>';
    
        unset($_SESSION['sucees']);
    }
    ?>
    

    <div class="form-container">
        <h2>Add Student</h2>
        <form action="../controller/add_student_back.php" method="POST" enctype="multipart/form-data">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" aria-label="First Name" placeholder="Enter First Name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" aria-label="Last Name" placeholder="Enter Last Name" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" aria-label="Phone Number" placeholder="Enter Phone Number" required>

            <label for="image">Profile Image</label>
            <input type="file" id="image" name="image"  accept="image/*">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
