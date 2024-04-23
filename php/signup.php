<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($password) && !empty($email)) {
    // ? проверка действительности почты
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // проверка, существует ли почта уже в базе данных
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}' ");
        if (mysqli_num_rows($sql) > 0) { // ? при существовании аккаунта с такой почтой: 
            echo "Аккаунт с такой почтой уже существует!";
        } else {
            if (isset($_FILES['image'])) { // если файл загружен
                $img_name = $_FILES['image']['name']; // получение изображения
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $extensions = ['png', 'jpeg', 'jpg', 'JPG', 'JPEG', 'PNG'];
                if (in_array($img_ext, $extensions) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, 'images/' . $new_img_name)) {
                        $status = 'Онлайн';
                        $random_id = rand(time(), 1000000000);
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}') ");
                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        } else {
                            echo 'Что-то пошло не так :(';
                        }
                    }
                    ;
                } else {
                    echo 'Пожалуйста выберите фото для профиля - JPEG, PNG, JPG';
                }
            } else {
                echo 'Пожалуйста выберите фото для профиля';
            }
        }
    } else {
        echo "Введите действительный адрес почты!";
    }
} else {
    echo "Все поля обязательны к заполнению!";
}
?>