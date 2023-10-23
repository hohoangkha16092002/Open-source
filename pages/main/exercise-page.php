<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .exercise-body {
            font-family: Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2% auto;
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

        #exercise-myInput {
            background-image: url('/css/searchicon.png');
            background-position: 95% center;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .exercise-search-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-20%);
            cursor: pointer;
        }

        #exercise-myUL {
            list-style-type: none;
            padding: 0;
        }

        #exercise-myUL li {
            margin: 5px 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #exercise-myUL li a {
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            width: 100%;
            text-align: center;
        }

        #exercise-myUL li:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="exercise-body">
        <form class="exercise-form" method="post">
            <div class="container">
                <h2 align="center" class="exercise-h2">Exercise list</h2>
            </div>
            <ul id="exercise-myUL">
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
    </div>
</body>

</html>