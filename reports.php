<?php

ini_set('date.timezone', 'Europe/Brussels');

$sources = [
    'card' => file_get_contents('reports_card.source'),
    'reports' => file_get_contents('reports.source'),
];

$generated = [
    'cards' => '',
    'reports' => $sources['reports'],
];

$versions = [
    '1.6.1.24',
    '1.7.1.x',
    '1.7.2.x',
    '1.7.3.x',
    '1.7.4.4',
    '1.7.5.2',
    '1.7.6.9',
    '1.7.7.8',
    '1.7.8.9',
    '8.0.4',
    '8.1.0',
    '8.1.3',
    '9.0.0',
];

foreach ($versions as $version) {
    $card = $sources['card'];

    if (file_exists('./reports/'.$version.'.json')) {
        $json = file_get_contents('./reports/'.$version.'.json');
        $json = json_decode($json, true);

        $color = $json['stats']['failures'] > 0 ? 'red' : 'green';
        $result = $json['stats']['failures'] > 0 ? 'Failure' : 'Success';
        $passes = $json['stats']['passes'];
        $failures = $json['stats']['failures'];
        $passes_color = $json['stats']['failures'] > 0 ? 'gray' : 'green';
        $failures_color = $json['stats']['failures'] > 0 ? 'red' : 'gray';
    } else {
        $color = 'gray';
        $result = 'To determinate';
        $passes = '-';
        $failures = '-';
        $passes_color = 'gray';
        $failures_color = 'gray';
    }

    $card = str_replace('[VERSION]', $version, $card);
    $card = str_replace('[COLOR]', $color, $card);
    $card = str_replace('[RESULT]', $result, $card);
    $card = str_replace('[PASSES]', $passes, $card);
    $card = str_replace('[FAILURES]', $failures, $card);
    $card = str_replace('[PASSES_COLOR]', $passes_color, $card);
    $card = str_replace('[FAILURES_COLOR]', $failures_color, $card);

    $generated['cards'] .= $card;
}

$generated['reports'] = str_replace('[CARDS]', $generated['cards'], $generated['reports']);
$generated['reports'] = str_replace('[LATEST_UPDATE]', date('M j, Y - h:i A'), $generated['reports']);


file_put_contents('reports.html', $generated['reports']);

echo 'End';
