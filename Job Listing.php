<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Full Stack Web Developer',
        'description' => 'Design, develop, and maintain scalable web applications using modern frameworks and REST APIs. Collaborate with cross-functional teams to deliver high-quality software solutions.',
        'salary' => 65000,
        'location' => 'Taguig, Metro Manila',
        'tags' => ['React', 'Laravel', 'MySQL', 'REST API']
    ],
    [
        'id' => 2,
        'title' => 'UI/UX Designer',
        'description' => 'Create wireframes, prototypes, and high-fidelity designs for web and mobile applications. Conduct user research and usability testing to improve product experience.',
        'salary' => 55000,
        'location' => 'Makati, Metro Manila',
        'tags' => ['Figma', 'Adobe XD', 'User Research', 'Prototyping']
    ],
    [
        'id' => 3,
        'title' => 'Data Analyst',
        'description' => 'Collect, process, and analyze large datasets to generate actionable business insights. Build dashboards and automated reports to support strategic decision-making.',
        'salary' => 60000,
        'location' => 'Ortigas, Pasig City',
        'tags' => ['SQL', 'Python']
    ],
    [
        'id' => 4,
        'title' => 'DevOps Engineer',
        'description' => 'Build and maintain CI/CD pipelines, manage cloud infrastructure on AWS, and ensure high availability and system reliability across production environments.',
        'salary' => 80000,
        'location' => 'Quezon City, Metro Manila',
        'tags' => ['Docker', 'AWS']
    ],
    [
        'id' => 5,
        'title' => 'Backend Developer',
        'description' => 'Develop robust server-side logic, manage relational databases, and integrate third-party services via APIs. Optimize application performance and maintain code quality.',
        'salary' => 70000,
        'location' => 'Mandaluyong, Metro Manila',
        'tags' => ['PHP', 'Node.js', 'PostgreSQL', 'Redis']
    ],
    [
        'id' => 6,
        'title' => 'Cybersecurity Analyst',
        'description' => 'Monitor network traffic for threats, conduct vulnerability assessments, and implement security protocols to protect company infrastructure and sensitive data.',
        'salary' => 75000,
        'location' => 'Bonifacio Global City, Taguig',
        'tags' => ['Penetration Testing']
    ],
    [
        'id' => 7,
        'title' => 'Mobile App Developer',
        'description' => 'Build and deploy cross-platform mobile applications with clean UI and optimized performance. Integrate backend services and ensure compatibility across iOS and Android devices.',
        'salary' => 68000,
        'location' => 'Cebu City, Cebu',
        'tags' => ['Flutter', 'Firebase', 'REST API']
    ],
    [
        'id' => 8,
        'title' => 'IT Support Specialist',
        'description' => 'Provide Tier 1 and Tier 2 technical support to end users, troubleshoot hardware and software issues, and maintain internal systems and network infrastructure.',
        'salary' => 35000,
        'location' => 'Alabang, Muntinlupa',
        'tags' => ['Help Desk', 'Windows Server', 'Active Directory']
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

    <title>IT Job Listings</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    h2 {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body class="bg-purple-50">

    <header class="bg-purple-900 text-purple-100 p-4 shadow">
        <h1 class="text-2xl font-semibold">IT Job Listings</h1>
    </header>

    <div class="p-4">
        <?php foreach ($listings as $index => $job) : ?>
            <div class="mb-4">
                <div class="
                    <?php if ($job['id'] % 2 == 0) : ?>
                        bg-fuchsia-50 border border-fuchsia-200
                    <?php else : ?>
                        bg-purple-100 border border-purple-200
                    <?php endif; ?>
                    rounded-xl shadow-sm p-5 transition-all duration-300 hover:shadow-md hover:-translate-y-[2px]">

                    <h2 class="text-xl font-semibold text-purple-900">
                        <?= $job['title'] ?>
                    </h2>

                    <p class="text-purple-700 mt-2">
                        <?= $job['description'] ?>
                    </p>

                    <ul class="mt-4 space-y-1 text-purple-800">
                        <li>
                            <strong class="text-purple-900">Salary:</strong>
                            ₱<?= $formatSalary($job['salary']) ?> / month
                        </li>

                        <li>
                            <strong class="text-purple-900">Location:</strong>
                            <?= $job['location'] ?>
                            <?php if ($job['location'] === 'Quezon City, Metro Manila'): ?>
                                <span class="text-xs text-white bg-fuchsia-600 rounded-full px-2 py-1 ml-2">
                                    Local
                                </span>
                            <?php endif; ?>
                        </li>

                        <?php if (!empty($job['tags'])): ?>
                            <li class="mt-2">
                                <strong class="text-purple-900">Tags:</strong>
                                <?php foreach ($job['tags'] as $tag): ?>
                                    <span class="inline-block text-xs bg-purple-200 text-purple-800 rounded-full px-2 py-1 mr-1 mt-1">
                                        <?= $tag ?>
                                    </span>
                                <?php endforeach; ?>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>
