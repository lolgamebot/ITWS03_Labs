<?php
$title = "PHP WS03";
$header = "Welcome to PHP";
$header1 = "WS03";
$body = "In this subject, you will learn the fundamentals of the PHP language.";

$firstName = "Harold";
$lastName = "Valdez";

$fullName = $firstName . " " . $lastName;

echo $firstName . " " . $lastName;
echo "<br>";

echo "$firstName $lastName";
echo "<br><br>";

$number1 = 5;
$number2 = 10;
$number3 = '20';

$result = $number1 + $number3;

var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>


    <title><?= "$title" ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">

            <h1 class="text-3xl font-semibold"><?= "$header1" ?></h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">

            <h2 class="text-2xl font-semibold mb-4"><?= "$header" ?></h2>

            <p><?= "Course Info: " . $body ?></p>
            <br>

            <p><?= "Hello, my name is $fullName" ?></p>
            <p><?= "Full Name: " . $firstName . " " . $lastName ?></p>

        </div>
    </div>
</body>

</html>