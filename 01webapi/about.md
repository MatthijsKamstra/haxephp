#About

So far we've been only using the Haxe Generic API, available for all platforms. Now let's look at the ServerSide specific API, which is located in the package php. 


This will use the php.Lib.print function that prints some raw string (without adding debug information). It will print the parameters sent by the browser.

There is also a lot of useful functionality available in the Web class.

Note that the php package tries to mimic as far as possible the neko one. This allows for easy switching between the two platforms


source: <http://old.haxe.org/doc/start/php#web-api>