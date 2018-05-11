<?php

return [
    'enabled' => env('PROFILER_ENABLED', true),
    'force_disable_on' => [
        'production',
//        'testing',
//        'local',
    ],
    'trackers' => [
        \JKocik\Laravel\Profiler\Trackers\PathsTracker::class,
        \JKocik\Laravel\Profiler\Trackers\BindingsTracker::class,
    ],
    'processors' => [
        \JKocik\Laravel\Profiler\Processors\BroadcastingProcessor::class,
    ],
    'broadcasting_event' => 'laravel-profiler-broadcasting',
    'broadcasting_address' => 'http://10.0.2.2',
    'broadcasting_port' => '1902',
];
