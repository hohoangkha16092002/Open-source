<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .exercise-body {
            font-family: sans-serif, Helvetica, sans-serif;
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
            border: 2px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .exercise-container {
            text-align: center;
        }

        .exercise-h2 {
            color: #0000CC;
            font-family: Georgia;
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

        .exercise-icon {
            margin-right: 10px;
        }

        #exercise-myUL {
            list-style-type: none;
            padding: 0;
        }

        #exercise-myUL li {
            display: flex;
            align-items: center;
            margin: 5px 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .exercise-image {
            width: 80px;
            height: 70px;
        }

        #exercise-myUL li a {
            padding: 12px;
            text-decoration: none;
            font-size: 20px;
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

        .list-name {
            color: #0066CC;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="exercise-body">
        <form class="exercise-form" method="post">
            <div class="container">
                <h2 align="center" class="exercise-h2">Exercise list</h2>
                <i class="list-name">List name</i>
            </div>
            <ul id="exercise-myUL">
                <?php
                if (isset($_POST['submit'])) {
                } else {
                    $exerciseData = [
                        "Ngô Trung Kiên" => ["kien_exercises", "img/exercise-ntk.jpg"],
                        "Nguyễn Thị Diễm Kiều" => ["kieu_exercises", "img/exercise-ntdk.jpg"],
                        "Hồ Hoàng Kha" => ["kha_exercises", "img/exercise-hhk.jpg"],
                        "Phùng Thị Phượng" => ["phuong_exercises", "img/exercise-ptp.jpg"],
                        "Phan Minh Tiến" => ["pages/main/tien_exercises", "img/exercise-pmt.jpg"],
                    ];

                    foreach ($exerciseData as $name => $data) {
                        $exerciseDir = $data[0];
                        $imageSrc = $data[1];
                        echo "<li><img class='exercise-image exercise-icon' src='$imageSrc' alt='Icon' width='80px' height='70px'><a class='list-name' href='$exerciseDir'>$name</a></li>";
                    }
                }
                ?>
            </ul>
        </form>
    </div>
</body>
</html>
