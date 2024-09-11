<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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


    </style>
</head>
<body>
<nav>
        <ul>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="students.php">Students</a></li>
        </ul>
    </nav>
</body>
</html>