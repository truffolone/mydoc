<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=prova.doc");

echo file_get_contents("./html/provadoc.html");