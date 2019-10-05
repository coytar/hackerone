<?php
$file = fopen("hello.php", "w");
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
