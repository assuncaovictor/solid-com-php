<?php

namespace Assuncaovictor;

use Assuncaovictor\Alura\Solid\Model\AluraMais;
use Assuncaovictor\Alura\Solid\Model\Video;

require_once "./vendor/autoload.php";

$video = new AluraMais('Git e Github', 'Formação git');
echo $video->recuperarUrl();
