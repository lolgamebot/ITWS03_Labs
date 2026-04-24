<?php
$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === 0) {
        $result = "File Size: " . $_FILES['myFile']['size'];
    } else {
        $result = "No file selected (Error)";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FILES Demo</title>
</head>
<body class="bg-purple-50 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-96 border border-purple-100">
        <h1 class="text-2xl font-bold mb-4 text-purple-700">$_FILES Demo</h1>
        <!-- enctype is REQUIRED for file uploads -->
        <form method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="file" name="myFile" class="w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-lg file:border-0
                file:bg-fuchsia-50 file:text-fuchsia-700
                hover:file:bg-fuchsia-100 transition" />
            <button class="bg-purple-600 text-white w-full py-2 rounded-lg hover:bg-purple-700 transition">
                Upload
            </button>
        </form>
        <!-- php below -->
        <?php if ($result !== ""): ?>
            <p class="mt-4 text-fuchsia-600 font-semibold">
                <?= $result; ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
