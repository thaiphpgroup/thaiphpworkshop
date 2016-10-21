<?php
require_once 'twig.php';

$template = $twig->loadTemplate('expire.twig');
echo $template->render(array());