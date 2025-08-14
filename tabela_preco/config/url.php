<?php

//o código combina o protocolo, o nome do servidor e o caminho do diretório do arquivo atual

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';