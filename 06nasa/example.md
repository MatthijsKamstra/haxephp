#Example Nasa

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/06nasa/code) for more comments.

This is an NASA api example.
You can get an api key if you plan to use it a lot and that is without a price.
But it also works without one.

_The code used in this example can be found [here](https://github.com/MatthijsKamstra/haxephp/tree/master/06nasa/code)._

## How to start

Create a folder named **foobar** (please use a better name; any name will do) and create folders **bin** and **src**.
See example below:

```
+ foobar
	+ bin
	+ src
		- Main.hx
	- php.hxml
```

## The Main.hx

Open your favorite editor, copy/paste the code and save it in the `src` folder. 
Check the complete [Main.hx](https://github.com/MatthijsKamstra/haxephp/tree/master/06nasa/code/src/Main.hx).

This is the most interesting part:

```
var req = new haxe.Http( 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY' );

req.onData = function (data : String)
{
	try {
		var json haxe.Json.parse(data);
		trace(json);
	} catch (e:Dynamic){
		trace(e);
	}
}

req.onError = function (error : String)
{
	trace('error: $error');
}

req.onStatus = function (status : Int)
{
	// trace('status: $status');
}

req.request( false ); // false=GET, true=POST

```



## The Haxe build file, php.hxml

There are a lot of different arguments that you are able to pass to the Haxe compiler.
These arguments can also be placed into a text file of one per line with the extension hxml. This file can then be passed directly to the Haxe compiler as a build script.

```
# // php.hxml
-cp src
-main Main
-php bin/www
-dce full
```


## Build js with Haxe

To finish and see what we have, build the file and see the result

1. Open your terminal
2. `cd ` to the correct folder where you have saved the `php.hxml` 
3. type `haxe php.hxml`
4. press enter


You could build everything directly in the terminal.

```
haxe -cp src -main Main -js bin/www -dce full
```

It will have the same result

