<?php
namespace Foo;

class Command
{
    private $writer;

    public function __construct(Writer\WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    public function __invoke()
    {
        $writer = $this->writer;
        printf("In %s:\n", get_class($this));
        $writer();
    }
}
