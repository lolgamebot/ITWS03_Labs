<?php
$result = null;
$currentUser = [
    'name' => 'Basty',
    'email' => 'basty@gmail.com',
    'password' => '123456',
    'hobbies' => ['Video Games', 'Tennis'],
];

$fruitList = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];

$userList = [
    ['name' => 'Basty',   'email' => 'basty@gmail.com',   'password' => '123456'],
    ['name' => 'Nateman', 'email' => 'nateman@gmail.com', 'password' => 'nathane'],
    ['name' => 'Portugal', 'email' => 'Speed@gmail.com', 'password' => 'iwshowspeed']
];

$tempUserEntry = [
    ['name' => 'Erlinda', 'email' => 'Erlinda@gmail.com', 'password' => 'Erlinda']
];
unset($tempUserEntry[2]);
$result = count($tempUserEntry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP Arrays and Multidimensional</title>
</head>
<body class="bg-emerald-50">
    <header class="bg-emerald-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP Arrays</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl font-semibold mb-4 text-emerald-700">
                Output: <?= $result ?>
            </p>
            <pre class="bg-emerald-100 p-3 rounded text-emerald-900">
<?php print_r($tempUserEntry); ?>
            </pre>
        </div>
    </div>
</body>
</html>
