<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .submit-button {
            width: 100%;
        }

        form {
            background-color: beige;
            width: 355px;
            padding: 10px;
            margin: auto;
        }

        input {
            border-radius: 4px;
            height: 20px;
        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    } else {
        //echo "Thành công</br>";
    }

    if (isset($_GET['submit'])) {
        $fullname = $_GET['fullname'];
        $username = $_GET['username'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $password = $_GET['password'];
        $confirmPassword = $_GET['confirmPassword'];
        $gender = $_GET['gender'];

        $options = [
            'cost => 12',
        ];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

        // Kiểm tra tính hợp lệ của dữ liệu và thực hiện thao tác INSERT
        if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W]).{8,}$/", $password)) {
                if ($password === $confirmPassword) {
                    $emailAlready = "SELECT * FROM information WHERE email = '$email'";
                    $result = mysqli_query($conn, $emailAlready);

                    // Kiểm tra kết quả trả về
                    if ($result->num_rows > 0) {
                        $msg = "(*) Email đã tồn tại";
                    } else {
                        $sql = "INSERT INTO information (fullname, username, email, phone, password, gender)
                                VALUES ('$fullname', '$username', '$email', '$phone', '$hashedPassword', '$gender')";
                        if (mysqli_query($conn, $sql)) {
                            $msg = "Đăng ký thành công.<br> Full Name: $fullname, Email: $email";
                            header("Location: form-login.php");
                        } else {
                            $msg = "Lỗi: " . mysqli_error($conn);
                        }
                    }
                } else {
                    $msg = "Xác nhận mật khẩu không khớp";
                }
            } else {
                $msg = "Mật khẩu phải chứa ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, chữ số và ký tự đặc biệt";
            }

        } else {
            $msg = "Email không hợp lệ";
        }
    }

    // Đóng kết nối
    mysqli_close($conn);
    ?>
    <form method="get" name="registration">
        <table align="center">
            <h3 style="text-align: center; color: red">Registration</h3>
            <tr>
                <td>Full Name<br>
                    <input type="text" name="fullname" value="<?php
                    if (isset($fullname))
                        echo $fullname;
                    ?>">
                </td>
                <td>
                    Username<br>
                    <input type="text" name="username" value="<?php
                    if (isset($_GET['submit']))
                        if (!empty($_GET['username']))
                            echo $_GET['username'];
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Email<br>
                    <input type="text" name="email" value="<?php
                    if (isset($_GET['submit']))
                        if (!empty($_GET['email']))
                            echo $_GET['email'];
                    ?>">
                </td>
                <td>
                    Phone Number<br>
                    <input type="text" name="phone" value="<?php
                    if (isset($_GET['submit']))
                        if (!empty($_GET['phone']))
                            echo $_GET['phone'];
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Password<br>
                    <input type="password" name="password" value="<?php
                    if (isset($_GET['submit']))
                        if (!empty($_GET['password']))
                            echo $_GET['password'];
                    ?>" required>
                </td>
                <td>Confirm Password<br>
                    <input type="password" name="confirmPassword" value="<?php
                    if (isset($_GET['submit']))
                        if (!empty($_GET['confirmPassword']))
                            echo $_GET['confirmPassword'];
                    ?>">
                </td>
            <tr>
                <td colspan="3">
                    Gender<br>
                    <input type="radio" name="gender" value="male" <?php
                    if (isset($_GET['submit']) and $_GET['gender'] === "male") {
                        echo "checked";
                    }
                    ?>> Male
                    <input type="radio" name="gender" value="female" <?php
                    if (isset($_GET['submit']) and $_GET['gender'] === "female") {
                        echo "checked";
                    }
                    ?>> Female
                    <input type="radio" name="gender" value="not" <?php
                    if (isset($_GET['submit']) and $_GET['gender'] === "not") {
                        echo "checked";
                    }
                    ?>> Prefer not to say
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input style="background: blue;" type="submit" name="submit" value="Register" class="submit-button">
                </td>
            </tr>
            <tr>
                <td style="text-align: center; color: red" colspan="2">
                    <?php
                    if (isset($msg))
                        echo $msg . "<br>";
                    if (isset($errorEmail))
                        echo $errorEmail . "<br>";
                    if (isset($errorPassword))
                        echo $errorPassword . "<br>";
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>