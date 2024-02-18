
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $sql = "insert into student (name, address, phone, age, gender) values ($name, $address, $phone, $age, $gender);";
    $con = mysqli_connect('localhost', 'root', '', 'student_data');
    mysqli_query($con, $sql);
    if($con->affected_rows > 0){
        echo "success";
    }else{
        echo "failed";
    }
}
?>

<html>
    <body>
        <form action="">
            <input type="text" name="name" placeholder="Enter name"> <br>
            <input type="text" name="address" placeholder="Enter address"> <br>
            <input type="number" name="phone" placeholder="Enter phone"> <br>
            <input type="text" name="age" placeholder="Enter age"> <br>
            <label for="Gender">Gender: </label>
            <input type="radio" value="male" name="gender" > Male 
            <input type="radio" value="female" name="gender"> Female<br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>