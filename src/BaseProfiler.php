<?php

namespace JKocik\Laravel\Profiler;

use Illuminate\Foundation\Application;
use JKocik\Laravel\Profiler\Contracts\Profiler;

abstract class BaseProfiler implements Profiler
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * BaseProfiler constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
