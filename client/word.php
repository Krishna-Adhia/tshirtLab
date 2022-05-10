<?php
$longString = "This is a really really long string that exceeds 20 characters";
$longString = wordwrap($longString, 20, "\n");
?>