<?php

namespace App\Http\Package\LaravelTranslation;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use JoeDixon\Translation\Drivers\Database;

class TranslationManager
{
    private $app;

    private $config;

    private $scanner;

    public function __construct($app, $config, $scanner)
    {
        $this->app = $app;
        $this->config = $config;
        $this->scanner = $scanner;
    }

    public function resolve()
    {
        $driver = $this->config['driver'];
        $driverResolver = Str::studly($driver);
        $method = "resolve{$driverResolver}Driver";

        if (! method_exists($this, $method)) {
            throw new \InvalidArgumentException("Invalid driver [$driver]");
        }

        return $this->{$method}();
    }

    protected function resolveFileDriver()
    {
        return new TranslationFile(new Filesystem, $this->app['path.lang'], $this->app->config['app']['locale'], $this->scanner);
    }

    protected function resolveDatabaseDriver()
    {
        return new Database($this->app->config['app']['locale'], $this->scanner);
    }
}
