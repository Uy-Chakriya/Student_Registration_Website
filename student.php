<!DOCTYPE html>
<html>

<head>
    <title>Students List</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f4f4;
        }

        .navbar {
            flex-direction: row;
            justify-items: center;
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
            width: 80%;
            margin: auto;
            padding: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #333;
            color: white;
        }

        tr:hover {
            background: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="student.php">Students</a>
    </div>

    <div class="container">

        <h2>Registered Students</h2>

        <table>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>

            <?php

            $file = fopen("students.txt", "r");

            while (!feof($file)) {

                $line = fgets($file);

                $data = explode("|", $line);

                if (count($data) == 3) {

                    echo "<tr>";
                    echo "<td>" . $data[0] . "</td>";
                    echo "<td>" . $data[1] . "</td>";
                    echo "<td>" . $data[2] . "</td>";
                    echo "</tr>";
                }
            }

            fclose($file);

            ?>

        </table>

    </div>

</body>

</html>