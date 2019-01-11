<?php
require_once __DIR__ . '/vendor/autoload.php';


$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new Phpml\Classification\KNearestNeighbors();
$classifier->train($samples, $labels);

var_dump($classifier->predict([3, 2]));
// return 'b'


$samples = [[12],[14],[17],[19],[22],[28]];
$target = [3.1,3.2,3.5,3.7,4.1,5];

$regression = new Phpml\Regression\LeastSquares();

$regression->train($samples,$target);

$res = $regression->predict([35]);
var_dump ($res);
