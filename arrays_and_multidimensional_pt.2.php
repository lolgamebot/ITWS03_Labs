<?php
$names = [
    'harold valdez',
    'jarvis pineda',
    'mackie pogi',
    'jusip adenip'
];

$users = [
    ['name' => 'harold', 'email' => 'harold@gmail.com'],
    ['name' => 'jarvis', 'email' => 'jarvis@gmail.com'],
    ['name' => 'mackie', 'email' => 'mackie@gmail.com'],
    ['name' => 'jusip', 'email' => 'jusip@gmail.com']
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

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">

            <h3 class="text-xl font-semibold mb-2">Using a for loop</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php for ($i = 0; $i < count($names); $i++) : ?>
                    <li><?= $names[$i] ?></li>
                <?php endfor; ?>
            </ul>


            <h3 class="text-xl font-semibold mb-2">Using a foreach loop</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($names as $pangalan) : ?>
                    <li><?= $pangalan ?></li>
                <?php endforeach; ?>
            </ul>


            <h3 class="text-xl font-semibold mb-2">Using a foreach loop with index</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($names as $index => $name) : ?>
                    <li><?= $index . ' : ' . $name ?></li>
                <?php endforeach; ?>
            </ul>


            <h3 class="text-xl font-semibold mb-2">Using a foreach loop with associative array</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($users as $user) : ?>
                    <li><?= $user['name'] . ' : ' . $user['email'] ?></li>
                <?php endforeach; ?>
            </ul>


            <h3 class="text-xl font-semibold mb-2">Getting key names and values</h3>
            <ul class="list-disc pl-6 mb-6">
                <?php foreach ($users as $user) : ?>
                    <?php foreach ($user as $key => $value) : ?>
                        <li><?= $key . ' : ' . $value ?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</body>

</html>