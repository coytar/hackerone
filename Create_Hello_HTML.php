<?php
$file = fopen("hello.html", "w");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}
/* Write the data here. */
fwrite ($file, "<html>\n");
fwrite ($file, "<head><title>Hello!</title></head>\n");
fwrite ($file, "<body>\n");
fwrite ($file, "<h1>Hello!</h1>\n");
fwrite ($file, "</body>\n");
fwrite ($file, "</html>\n");
fclose ($file);
?>
