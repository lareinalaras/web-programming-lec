<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div style="width:70%;margin: 20px 15%;">
        <h1 class="text-center" style="font-size: 26px;">Book Loan Table</h1>
        <a href='./index.php'>Insert Book Here</a>
        <table class="table table-dark" style="margin-top: 3%;">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">ID Card Number</th>
                    <th scope="col">Name of Book</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM perpustakaan";
                $result = mysqli_query($conn, $sql);



                if (mysqli_num_rows($result) > 0) {
                    var_dump(mysqli_num_rows($result) > 0);
                    while ($row = mysqli_fetch_array($result)) {
                        // echo "test";
                        echo "<tr>";
                        echo "<th scope='col'>{$row['name_student']}</th>";   
                        echo "<th scope='col'>{$row['borrow_date']}</th>";
                        echo "<th scope='col'>{$row['id_card']}</th>";
                        echo "<th scope='col'>{$row['book_title']}</th>";
                        echo "<td scope='col'><a href='edit.php?name_student=$row[name_student]'>Edit</a> | <a href='delete.php?name_student=$row[name_student]'>Delete</a></th>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='5'>No data inputted, Click <a href='./index.php'>Here</a> to Input Data</td>";
                    echo "</tr>";
                }


                ?>
            </tbody>
        </table>
    </div>

</body>

</html>