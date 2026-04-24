<?php
$nameList = [
    'jinx',
    'yasuo',
    'thresh',
    'lux'
];
$userList = [
    ['name' => 'jinx',   'email' => 'jinx@gmail.com'],
    ['name' => 'yasuo',  'email' => 'yasuo@gmail.com'],
    ['name' => 'thresh', 'email' => 'thresh@gmail.com'],
    ['name' => 'lux',    'email' => 'lux@gmail.com']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP Arrays Part 2</title>
</head>
<body class="bg-emerald-50">
    <header class="bg-emerald-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <h3 class="text-xl font-semibold mb-2 text-emerald-700">Using a for loop</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php for ($i = 0; $i < count($nameList); $i++) : ?>
                    <li><?= $nameList[$i] ?></li>
                <?php endfor; ?>
            </ul>
            <h3 class="text-xl font-semibold mb-2 text-emerald-700">Using a foreach loop</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($nameList as $fullName) : ?>
                    <li><?= $fullName ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="text-xl font-semibold mb-2 text-emerald-700">Using a foreach loop with index</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($nameList as $index => $name) : ?>
                    <li><?= $index . ' : ' . $name ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="text-xl font-semibold mb-2 text-emerald-700">Using a foreach loop with associative array</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($userList as $userEntry) : ?>
                    <li><?= $userEntry['name'] . ' : ' . $userEntry['email'] ?></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="text-xl font-semibold mb-2 text-emerald-700">Getting key names and values</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($userList as $userEntry) : ?>
                    <?php foreach ($userEntry as $key => $value) : ?>
                        <li><?= $key . ' : ' . $value ?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
