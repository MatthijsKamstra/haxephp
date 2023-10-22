# About flatfile

A common way of loading data in your web-app is the use of `json` files.

But you can also use it as a flat-file database:

> In databases a flat file refers to data files that contain records with no structured relationships. Flat files may contain basic formatting, have a small fixed number of fields, and it may or may not have a file format.

So in this example we read and write a json file asif it was a database.

Haxe can handle [json](http://api.haxe.org/haxe/Json.html) crossplatform

> Crossplatform JSON API : it will automatically use the optimized native API if available. Use -D haxeJSON to force usage of the Haxe implementation even if a native API is found : this will provide extra encoding features such as enums (replaced by their index) and StringMaps.
