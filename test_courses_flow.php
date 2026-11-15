<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$urls = [
    '/',
    '/all_course',
    '/course_category_details/1',
    '/course_category_details/3',
    '/course_category_details/4',
    '/course_details/1',
];

$allPassed = true;
foreach ($urls as $url) {
    $request = Illuminate\Http\Request::create($url, 'GET');
    $response = $app->handle($request);
    $status = $response->getStatusCode();
    echo "$url -> Status: $status\n";
    if ($status !== 200) {
        $allPassed = false;
        echo "Error body: " . substr($response->getContent(), 0, 400) . "\n";
    }
}

if ($allPassed) {
    echo "\n>>> ALL TESTED URLS RETURNED 200 OK! <<<\n";
}
