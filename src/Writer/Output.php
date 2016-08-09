<?php
namespace Foo\Writer;

use Foo\PluginManager;

class Output implements WriterInterface
{
    private $plugins;

    public function __construct()
    {
        $this->plugins = new PluginManager();
    }

    public function __invoke()
    {
        printf("Plugin Manager class: %s\n", get_class($this->plugins));
    }
}
