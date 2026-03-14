<!DOCTYPE html>
<html>

<head>
    <title>Register Student</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f4f4;
        }

        .navbar {
            background: #333;
            padding: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
        }

        .container {
            width: 40%;
            margin: auto;
            padding: 40px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            background: #333;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
        }

        button:hover {
            background: #555;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="students.php">Students</a>
    </div>

    <div class="container">

        <div class="card">

            <h2>Register Student</h2>

            <form method="POST">

                <label>Name</label>
                <input type="text" name="name" required>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Age</label>
                <input type="number" name="age" required>

                <button name="submit">Register</button>

            </form>

            <?php

            if (isset($_POST['submit'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $age = $_POST['age'];

                $file = fopen("students.txt", "a");

                fwrite($file, $name . "|" . $email . "|" . $age . "\n");

                fclose($file);

                echo "<p style='color:green;'>Student Registered Successfully</p>";
            }

            ?>

        </div>
    </div>

</body>

</html>