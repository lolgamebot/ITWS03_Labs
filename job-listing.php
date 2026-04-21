<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Web Developer',
        'description' => 'Build and maintain modern websites',
        'salary' => 40000,
        'location' => 'Bahay ni Kuya',
        'tags' => []
    ],
    [
        'id' => 2,
        'title' => 'UI/UX Designer',
        'description' => 'Design clean and user-friendly interfaces',
        'salary' => 35000,
        'location' => 'Bahay ni Harold',
        'tags' => ['Figma', 'UX', 'UI']
    ],
    [
        'id' => 3,
        'title' => 'Data Analyst',
        'description' => 'Analyze and interpret complex data sets',
        'salary' => 45000,
        'location' => 'Bahay ni Nestor',
        'tags' => ['SQL', 'Python', 'Excel']
    ],
    [
        'id' => 4,
        'title' => 'DevOps Engineer',
        'description' => 'Manage and optimize deployment pipelines',
        'salary' => 50000,
        'location' => 'Bahay ni Joseph',
        'tags' => ['SQL', 'Python', 'Excel']
    ],
    [
        'id' => 5,
        'title' => 'Backend Developer',
        'description' => 'Develop and maintain server-side logic',
        'salary' => 48000,
        'location' => 'Bahay ni Juko',
        'tags' => ['PHP', 'Node.js', 'MySQL']
    ]
];

$formatSalary = fn($salary) => number_format($salary);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>

        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Roboto', 'sans-serif']
                    }
                }
            }
        }


    </script>

    <title>Job Listings</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    h2 {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body class="bg-slate-100">

    <header class="bg-slate-800 text-slate-100 p-4 shadow">
        <h1 class="text-2xl font-semibold">Job Listings</h1>
    </header>

    <div class="p-4">
        <?php foreach ($listings as $index => $job) : ?>
            <div class="mb-4">
                <div
                    class="
                    <?php if ($job['id'] % 2 == 0) : ?>
                        bg-blue-50 border border-blue-200
                    <?php else : ?>
                        bg-indigo-50 border border-indigo-200
                    <?php endif; ?>
                    rounded-xl shadow-sm p-5 transition-all duration-300 hover:shadow-md hover:-translate-y-[2px]">

                    <h2 class="text-xl font-semibold text-slate-800">
                        <?= $job['title'] ?>
                    </h2>

                    <p class="text-slate-600 mt-2">
                        <?= $job['description'] ?>
                    </p>

                    <ul class="mt-4 space-y-1 text-slate-700">
                        <li>
                            <strong class="text-slate-900">Salary:</strong>
                            <?= '$' . $formatSalary($job['salary']) ?>
                        </li>

                        <li>
                            <strong class="text-slate-900">Location:</strong>
                            <?= $job['location'] ?>
                            <?php if ($job['location'] === 'Bahay ni Harold'): ?>
                                <span class="text-xs text-white bg-indigo-600 rounded-full px-2 py-1 ml-2">
                                    Local
                                </span>
                            <?php endif; ?>
                        </li>

                        <?php if (!empty($job['tags'])): ?>
                            <li class="mt-2">
                                <strong class="text-slate-900">Tags:</strong>
                                <span class="text-slate-600">
                                    <?= implode(', ', $job['tags']) ?>
                                </span>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>