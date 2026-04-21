<?php
$title = "";
$description = "";
$submittedData = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title'] ?? "");
    $description = htmlspecialchars($_POST['description'] ?? "");
    $submittedData = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>

        <form method="post">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input 
                    type="text"
                    id="title"
                    name="title"
                    value="<?= $title ?>"
                    class="w-full px-4 py-2 border rounded"
                >
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea
                    id="description"
                    name="description"
                    class="w-full px-4 py-2 border rounded"
                ><?= $description ?></textarea>
            </div>

            <button type="submit" name="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">
                Create Listing
            </button>
        </form>

        <?php if ($submittedData): ?>
        <div class="mt-6 p-4 border rounded bg-gray-200">
            <h2 class="text-xl font-semibold mb-2">Submitted Job Listing</h2>
            <p><strong>Title:</strong> <?= $title ?></p>
            <p><strong>Description:</strong> <?= $description ?></p>
        </div>
        <?php endif; ?>

    </div>
</div>
</body>
</html>
