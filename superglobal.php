<?php
// SUPERGLOBALS LAB
// Fill in the blanks using ONLY these:
// $_SERVER, $_GET, $_POST, $_FILES, $_SESSION

session_start(); // needed for $_SESSION

// 1) SERVER: request method
$requestMethod = $_SERVER['REQUEST_METHOD']; // GET or POST

// 2) GET or POST: theme from URL or form
$theme = $_GET['theme'] ?? ($_POST['theme'] ?? "light");

// Theme classes
$bodyClass = "bg-purple-50 text-purple-900";
$cardClass = "bg-white border-purple-200";
$mutedText = "text-purple-500";
$softBg    = "bg-purple-100";

if ($theme === "dark") {
    $bodyClass = "bg-purple-950 text-purple-100";
    $cardClass = "bg-purple-900 border-purple-700";
    $mutedText = "text-purple-300";
    $softBg    = "bg-purple-900";
}

// Default outputs
$notice       = "";
$uploadedInfo = "";

// 3) POST + FILES handling
if ($requestMethod === "POST") {

    // POST: read name
    $name = $_POST['studentName'] ?? "";

    // SESSION: remember name
    $_SESSION['savedName'] = $name;

    // FILES: safe check first
    if (isset($_FILES['studentFile']) && $_FILES['studentFile']['error'] === 0) {

        $fileName = $_FILES['studentFile']['name'];
        $fileSize = $_FILES['studentFile']['size'];

        $uploadedInfo = "Uploaded file: $fileName ($fileSize bytes)";
    } else {
        $uploadedInfo = "No file selected (or upload error).";
    }

    $notice = "Saved! Refresh the page and your SESSION name should stay.";
}

// 4) SESSION: read remembered value
$savedName = $_SESSION['savedName'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Superglobals Lab</title>
</head>

<body class="<?= $bodyClass; ?> min-h-screen p-6">
    <div class="max-w-3xl mx-auto">
        <div class="<?= $cardClass; ?> border rounded-2xl shadow p-6">

            <h1 class="text-2xl font-bold">Superglobals Lab</h1>
            <p class="mt-1 <?= $mutedText; ?>">
                FORM → $_SERVER → $_GET → $_POST → $_FILES → $_SESSION
            </p>

            <?php if ($notice !== ""): ?>
                <div class="mt-4 <?= $softBg; ?> border <?= ($theme === "dark" ? "border-purple-700" : "border-purple-200"); ?> rounded-xl p-4">
                    <p class="font-semibold"><?= $notice; ?></p>
                </div>
            <?php endif; ?>

            <div class="grid md:grid-cols-2 gap-4 mt-6">

                <!-- SERVER -->
                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-purple-700" : "border-purple-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_SERVER</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">Shows the request method.</p>
                    <p class="mt-3 font-mono">REQUEST_METHOD: <?= $requestMethod; ?></p>
                </div>

                <!-- GET -->
                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-purple-700" : "border-purple-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_GET</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">Reads data from the URL.</p>
                    <p class="mt-3 font-mono">theme: <?= $theme; ?></p>

                    <div class="mt-3 flex gap-2">
                        <a class="px-3 py-2 rounded-lg <?= ($theme === "dark" ? "bg-purple-700" : "bg-purple-200"); ?>" href="?theme=light">Light</a>
                        <a class="px-3 py-2 rounded-lg <?= ($theme === "dark" ? "bg-purple-700" : "bg-purple-200"); ?>" href="?theme=dark">Dark</a>
                    </div>
                </div>

                <!-- POST + FILES -->
                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-purple-700" : "border-purple-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">FORM → $_POST + $_FILES</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">
                        Submit a name (POST) and choose a file (FILES).
                    </p>

                    <form method="POST" enctype="multipart/form-data" class="mt-4 space-y-3">

                        <!-- Keep theme during POST -->
                        <input type="hidden" name="theme" value="<?= $theme; ?>">

                        <input type="text"
                            name="studentName"
                            placeholder="Enter your name"
                            class="w-full rounded-xl border px-4 py-2 <?= ($theme === "dark" ? "bg-purple-800 border-purple-700" : "bg-white border-purple-200"); ?>" />

                        <input type="file" name="studentFile" class="w-full text-sm" />

                        <button class="w-full rounded-xl px-4 py-2 font-semibold <?= ($theme === "dark" ? "bg-fuchsia-600 text-white" : "bg-purple-900 text-white"); ?>">
                            Save (POST)
                        </button>
                    </form>

                    <?php if ($uploadedInfo !== ""): ?>
                        <p class="mt-3 text-sm font-mono"><?= $uploadedInfo; ?></p>
                    <?php endif; ?>

                </div>

                <!-- SESSION -->
                <div class="<?= $softBg; ?> border <?= ($theme === "dark" ? "border-purple-700" : "border-purple-200"); ?> rounded-xl p-4">
                    <h2 class="font-bold text-lg">$_SESSION</h2>
                    <p class="mt-2 text-sm <?= $mutedText; ?>">
                        Remembers data even after refresh.
                    </p>

                    <p class="mt-3">
                        <span class="font-semibold">Saved Name:</span>
                        <span class="font-mono"><?= $savedName; ?></span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
