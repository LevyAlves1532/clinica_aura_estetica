<?php

$folderComponents = './components/';

$components = [
    'cButton' => 'button.php',
    'cMetric' => 'metric.php',
    'cFeatureCard' => 'feature-card.php',
    'cFilterButton' => 'filter-button.php',
    'cTreatmentCard' => 'treatment-card.php',
    'cFormationCard' => 'formation-card.php',
    'cRegenerationCard' => 'regeneration-card.php',
    'cTestimonialCard' => 'testimonial-card.php',
];

foreach ($components as $compName => $compPath) {
    ${$compName} = function ($props = []) use ($folderComponents, $compPath) {
        include($folderComponents . $compPath);
    };
}
