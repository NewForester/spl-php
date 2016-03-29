<!-- spl-php by NewForester:  programming examples in PHP 5 -->

# Script Programming Language - PHP

Programming examples written in [PHP 5](https://en.wikipedia.org/wiki/PHP).

The examples are implemented as scripts and so can be run directly from the shell:

```bash
    $ ./hello.php NewForester "Big Bad World"
    Hello NewForester
    Hello Big Bad World
```

Each example comes with a [phpunit](https://phpunit.de/) unit test module.

```bash
    $ phpunit TestHello.php             # run unit test for hello.php
```

All modules are documented for use with [phpDocumentor](https://phpdoc.org/docs/latest/welcome.html).

```bash
    $ phpdoc -f hello.php               # generate documentation for hello.php
    $ phpdoc -f TestHello.php           # generate documentation for TestHello.php
```

<!--
All modules will be put through [phplint](http://www.icosaedro.it/phplint/) with default configuration
just as soon as I get it installed.

```bash
    $ phplint hello.php                 # check hello.php for code smells
    $ phplint TestHello.php             # check TestHello.php for code smells
```
-->

---

Module          | Contents
------          | --------
hello           | a simple routine inspired by the K&R Hello World program
fib_exponential | a recursive Fibonacci function with exponential time complexity
fib_linear      | a recursive Fibonacci function with linear time complexity

---

Caveat:  phpDocumentor is overkill for simple scripts.
I am unable to generate documentation for functions without wrapping them in a class.

Note:  phpDocumentor seems incapable of generating man page style documentation.
The HTML DocBook style documentation starts with "./output/index.html".

---

*spl-php* by NewForester licensed under the MIT Licence.

<!-- EOF -->
