<?php
$base = __DIR__;
$entries = scandir($base);
$weeks = [];

foreach ($entries as $e) {
    if ($e === '.' || $e === '..') continue;
    $path = $base . DIRECTORY_SEPARATOR . $e;
    if (!is_dir($path)) continue;
    if (!preg_match('/^week/i', $e)) continue;
    if (preg_match('/^week\D*(\d+)/i', $e, $m)) {
        $num = intval($m[1]);
    } else {
        $num = 0;
    }
    $weeks[$num][] = $e;
}

ksort($weeks, SORT_NUMERIC);

function listFilesForFolder($folder) {
    // Recursively collect files with allowed extensions. Returned paths are
    // relative to the supplied $folder, using "/" as the separator so they can
    // be appended to the folder name when generating links.
    $allowed = ['php','html','htm','js','css','py','txt','md'];
    $files = [];

    $items = @scandir($folder);
    if (!$items) {
        return $files;
    }

    foreach ($items as $it) {
        if ($it === '.' || $it === '..') {
            continue;
        }

        $full = $folder . DIRECTORY_SEPARATOR . $it;

        if (is_dir($full)) {
            // dive into subdirectory and prefix returned paths with the
            // subdirectory name
            $subfiles = listFilesForFolder($full);
            foreach ($subfiles as $sub) {
                $files[] = $it . '/' . $sub;
            }
            continue;
        }

        $ext = pathinfo($it, PATHINFO_EXTENSION);
        if ($ext && in_array(strtolower($ext), $allowed, true)) {
            $files[] = $it;
        }
    }

    sort($files, SORT_NATURAL | SORT_FLAG_CASE);
    return $files;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Homepage — Weeks Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Homepage — Weeks Index</h1>
        <p>Automatically lists folders starting with <strong>week</strong>, grouped by the numeric value after "week".</p>
    </header>

    <main>
        <?php if (empty($weeks)): ?>
            <p>No folders starting with "week" were found in this directory.</p>
        <?php else: ?>
            <?php foreach ($weeks as $num => $folders): ?>
                <section>
                    <h2>Week <?php echo ($num === 0 ? 'Misc' : htmlspecialchars($num, ENT_QUOTES, 'UTF-8')); ?></h2>
                    <ul>
                        <?php sort($folders, SORT_NATURAL | SORT_FLAG_CASE); foreach ($folders as $f): ?>
                            <li>
                                <span class="folder"><a href="<?php echo rawurlencode($f); ?>/"><?php echo htmlspecialchars($f, ENT_QUOTES, 'UTF-8'); ?></a></span>
                                <?php $files = listFilesForFolder($base . DIRECTORY_SEPARATOR . $f); if (!empty($files)): ?>
                                    <ul class="files">
                                        <?php foreach ($files as $file): ?>
                                            <li><a href="<?php echo rawurlencode($f) . '/' . rawurlencode($file); ?>"><?php echo htmlspecialchars($file, ENT_QUOTES, 'UTF-8'); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
</body>
</html>
