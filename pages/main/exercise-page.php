<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

.exercise-body {
    font-family: Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
    background-color: #f0f0f0;
}

.exercise-form {
    max-width: 400px;
    width: 100%;
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.exercise-container {
    text-align: center;
}

.exercise-h2 {
    color: blue;
    margin-bottom: 20px;
}

.exercise-search-container {
    position: relative;
}

#myInput {
    background-image: url('/css/searchicon.png');
    background-position: 95% center;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-20%);
    cursor: pointer;
}
#myUL {
    list-style-type: none;
    padding: 0;
}

#myUL li {
    margin: 5px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#myUL li a {
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
    width: 100%;
}
</style>
</head>
<body>
<form class="exercise-form" method="post">
  <div class="container">
    <h2 align="center" class="exercise-h2">Exercise list</h2>
    </div>
    <ul id="myUL">
      <?php
        // Define an array with exercise names
        $exerciseNames = array(
            "Array_String_Function" => "Ngô Trung Kiên",
            "Form_Php" => "Nguyễn Thị Diễm Kiều",
            "string" => "Phùng Thị Phượng",
            "Crup_app" => "Hồ Hoàng Kha",
            "phpMyAdmin" => "Phan Minh Tiến"
        );
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            foreach ($exerciseNames as $link => $name) {
                if (stripos($name, $search) !== false) {
                    echo "<li><a href='$link'>$name</a></li>";
                }
            }
        } else {
            foreach ($exerciseNames as $link => $name) {
                echo "<li><a href='$link'>$name</a></li>";
            }
        }
      ?>
    </ul>
  </div>
</form>
</body>
</html>