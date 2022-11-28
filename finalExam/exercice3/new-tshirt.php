<?php
session_start();

require_once 'database.php';

$name = '';
$price = '';
$color = '';
$size = '';
$description = '';

$errors = array();

if (!isset($_POST['name']) or empty($_POST['name']))
    $errors['name'] = 'Name is mandatory';
else
    $name = $_POST['name'];

if (!isset($_POST['price']) or empty($_POST['price']))
    $errors['price'] = 'Price is mandatory';
else
    $price = $_POST['price'];

if (!isset($_POST['color']) or empty($_POST['color']))
    $errors['color'] = 'Color is mandatory';
else
    $color = $_POST['color'];

if (!isset($_POST['size']) or empty($_POST['size']))
    $errors['size'] = 'Size is mandatory';
else
    $size = $_POST['size'];

if (!isset($_POST['description']) or empty($_POST['description']))
    $errors['description'] = 'Description is mandatory';
else
    $description = $_POST['description'];


if (empty($errors)) {
    $prep = $pdo->prepare('INSERT INTO tshirt(name, price, color, size, description)
        VALUES(:name, :price, :color, :size, :description)');
    $prep->bindValue(':name', $name);
    $prep->bindValue(':price', $price);
    $prep->bindValue(':color', $color);
    $prep->bindValue(':size', $size);
    $prep->bindValue(':description', $description);
    $result = $prep->execute();
    // $pdo = null;


    if ($prep->execute())
        echo "<span style='color:green'>Successfully inserted !</span>";
    else
        echo '<span class="error">Problem inserting in the database.</span>';
} else {
    foreach ($errors as $key => $msg) {
        echo "<span class='error' style='color:red'>$key : $msg</span><br>";
    }
}

$pdo = null;
