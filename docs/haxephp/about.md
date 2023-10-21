# About haxephp (Haxe and PHP)

![Haxe logo](../img/haxe_php_logos.png)

One of the earlier targets added to the Haxe compiler is PHP.
It was create by Franco Ponticelli and added to the Haxe compiler in 2008.

## What is PHP?

> PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994,[3] the PHP reference implementation is now produced by The PHP Group.[4] PHP originally stood for Personal Home Page,[3] but it now stands for the recursive backronym PHP: Hypertext Preprocessor.[5]

Source: [wikipedia](https://en.wikipedia.org/wiki/PHP)

## Spares information about PHP on Haxe.org

<http://haxe.org/manual/target-php-getting-started.html>

## Convert PHP to Haxe

PhpToHaxe - tool for helping use PHP from Haxe

<http://phptohaxe.haqteam.com/code.php>

## Neko?

In the source you will see this `conditional compiler` statement

```
#if php
import php.Lib;
import php.Web;
#elseif neko
import neko.Lib;
import neko.Web;
#end
```

### What is that `neko`?

> Neko is a high-level dynamically typed programming language.

Note that the `php` package tries to mimic as far as possible the `neko` one. This allows for easy switching between the two platforms

[neko api](http://api.haxe.org/neko/)

## An Introduction to Mod_neko

`Mod_neko` is an Apache module for Neko. This means it's possible to run Neko programs on the server side to serve web-pages using Apache. Here's a step-by-step tutorial on how to configure and use Mod_neko.

Read more [Mod_neko](http://nekovm.org/doc/mod_neko).
