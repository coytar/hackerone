<?php
$file = fopen("hello.html", "w");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}
/* Write the data here. */
fwrite ($file, "<?php\n");
fwrite ($file, "echo 'Hello!';\n");
fwrite ($file, "?>\n");
fclose ($file);
?>
