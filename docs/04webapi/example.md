# Example WebAPI 4

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/03web_templates/code) for more comments.

Now we will use `.htaccess` on the server to get 'pritty print url'
And use the [Web Dispatcher](http://haxe.org/manual/dispatch), read more [Haxe api](http://api.haxe.org/haxe/web/Dispatch.html)

_Read more about this [here](about.md)_

_The code used in this example can be found [here](https://github.com/MatthijsKamstra/haxephp/tree/master/03web_templates/code)._

## How to start

Create a folder named **foobar** (please use a better name; any name will do) and create folders **bin** and **src**.
See example below:

```
+ foobar
	+ bin
	+ src
		- Main.hx
	- build.hxml
```

## The Main.hx

The views don't change in this example, the interesting stuff in happening in the `Main.hx`

```
package ;

import haxe.web.Dispatch;
import haxe.web.Dispatch.DispatchError;
import php.Web;

class Main
{
	function new()
	{
		try {
			var _webURI = Web.getURI();
			Dispatch.run( _webURI, Web.getParams(), new Routes() );
		}
		catch (e:DispatchError) {
			Dispatch.run("/", Web.getParams(), new Routes() );
		}
	}

	static public function main()
	{
		var main = new Main();
	}
}

```

The `Routes.hx` files is the Web Dispatcher class:
This example shows what will happen when the url is <http://localhost/> and <http://localhost/home/>

```
	function doDefault( d:Dispatch )
	{
		new HomeView();
	}

	private function doHome(d:Dispatch)
	{
		doDefault(d);
	}


```

And a little adjustment in the Template:

```
<li class="::if (title == "About")::active::else::inactive::end::"><a href="/about">About</a></li>
```

This is used to set the class of the `<li>` on `active` or `inactive`

Check for more Template examples: <http://haxe.org/manual/std-template.html>

The `build.hxml` also gets a little addition:

```
# htaccess file
-cmd cp -R src/assets/.htaccess bin/www
```

This way you can change the assets, and use the build file to update the export folder!

## The Haxe build file, build.hxml

There are a lot of different arguments that you are able to pass to the Haxe compiler.
These arguments can also be placed into a text file of one per line with the extension hxml. This file can then be passed directly to the Haxe compiler as a build script.

```
# // build.hxml
-cp src
-main Main
-php bin/www
-dce full
```

## Build PHP with Haxe

To finish and see what we have, build the file and see the result

1. Open your terminal
2. `cd ` to the correct folder where you have saved the `build.hxml`
3. type `haxe build.hxml`
4. press enter

You could build everything directly in the terminal.

```
haxe -cp src -main Main -php bin/www -dce full
```

Visit <http://localhost/> (assuming that your webserver is pointing at the generated folder `www`). It will display the request parameters for the URL that were sent by the browser.
