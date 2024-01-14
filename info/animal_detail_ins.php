<!DOCTYPE html>
<html>
<head>
    <title>Insert Animal Details</title>
</head>
<body>
    <form name="txtProjectInfo" method="post" action="animal_detail_ins.php">
        <h1 style="font-size: 60px"></h1>
        <p style="font-size: 40px">Enter Animal Detail Id </p>
        <input type="number" style="font-size: 25px" name="ADid" placeholder="Animal Detail Id" required>

        <p style="font-size: 40px">Enter Height of Animal </p>
        <input type="text" style="font-size: 25px" name="Height" placeholder="Animal Height" required>

        <p style="font-size: 40px">Enter Weight of Animal </p>
        <input type="text" style="font-size: 25px" name="Weight" placeholder="Animal Weight" required>

        <p style="font-size: 40px">Enter Age of Animal </p>
        <input type="number" style="font-size: 25px" name="Age" placeholder="Age of Animal" required>

        <p style="font-size: 40px">Enter Animal Id </p>
        <input type="number" style="font-size: 25px" name="Aid" placeholder="Animal Id" required>

        <input type="submit" name="submit" style="font-size: 25px">
    </form>

    <?php
    if (isset($_POST["submit"])) {
    
        $Height = $_POST['Height'];
        $Weight = $_POST['Weight'];
        $Age = $_POST['Age'];
        $Aid = $_POST['Aid'];

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'Daman@24';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'zoo');

        if (!$conn) {
            die('Could not connect: ' . mysqli_error());
        }

        $q2 = "INSERT INTO animal_detail ( Height, Weight, Age, Aid) VALUES ('$Height', '$Weight', '$Age', '$Aid')";

        if (mysqli_query($conn, $q2)) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $q2 . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>
