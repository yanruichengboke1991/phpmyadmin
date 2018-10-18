
<?php

$fh = fopen('test.html', 'a');

fwrite($fh, '<h1>hello world!<h1>');

fclose($fh);

unlink('test.html');

echo 'test';