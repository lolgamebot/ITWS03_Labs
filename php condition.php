<?php
$isLoggedin = true;
$name = "Ernest Win";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP Condition</title>
</head>
<body class="bg-purple-50">
    <header class="bg-purple-900 text-purple-100 p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP Condition</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6 border border-purple-100">
            <?php if ($isLoggedin && isset($name)) : ?>
                <h2 class="text-2xl font-semibold mb-4 text-purple-900">
                    Welcome, <?= $name ?>!
                </h2>
            <?php elseif ($isLoggedin) : ?>
                <h2 class="text-2xl font-semibold mb-4 text-fuchsia-700">
                    Welcome Guest
                </h2>
            <?php else : ?>
                <h2 class="text-2xl font-semibold mb-4 text-purple-400">
                    Please log in
                </h2>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
