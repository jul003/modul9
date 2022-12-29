<?php
header("Content-Type:application/zip");
header("Content-Length:".filesize($file));
header("Content-Disposition: attachment;filename=$file");
readfile($file);
?>