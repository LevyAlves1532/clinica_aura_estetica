<?php

$folderComponents = './components/';

$components = [
    'cButton' => 'button.php',
    'cMetric' => 'metric.php',
];

foreach ($components as $compName => $compPath) {
    ${$compName} = function ($props = []) use ($folderComponents, $compPath) {
        include($folderComponents . $compPath);
    };
}
