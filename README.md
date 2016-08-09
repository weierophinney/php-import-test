# Test for zendframework/zend-log#56

This is a repository designed to test how PHP resolves imports when the
imported name might conflict with a class name from the current namespace.

My hypothesis was that the imported name takes precedence.

This repository proves that hypothesis.

## Testing

Clone the repository:

```bash
$ git clone https://github.com/weierophinney/php-import-test.git
```

Descend into it:

```bash
$ cd php-import-test
```

Dump the autoloader:

```bash
$ composer dump-autoload
```

Run the code:

```bash
$ php test.php
```

You should see:

```text
In Foo\Command:
Plugin Manager class: Foo\PluginManager
```

## Observations

Both the namespaces `Foo` and `Foo\Writer` contain a class named
`PluginManager`. `Foo\Writer\Output` imports the former (`Foo\PluginManager`),
and instantiates it during initialization.

We can observe that this is what happens when we invoke the command. No errors
are emitted.

I observed the exact same behavior in both PHP 5.6 and 7.0.
