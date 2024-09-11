<?php
    $id=$_GET["id"];
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

        nav {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #f4d03f;
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
        require_once "nav.php";
    ?>
    
    

    <div class="form-container">
        <h2>Update Student</h2>
        <form action="../controller/update_student_back.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" aria-label="First Name" placeholder="Enter First Name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" aria-label="Last Name" placeholder="Enter Last Name" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" aria-label="Phone Number" placeholder="Enter Phone Number" required>

            <label for="image">Profile Image</label>
            <input type="file" id="image" name="image" aria-label="Profile Image" accept="image/*">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
