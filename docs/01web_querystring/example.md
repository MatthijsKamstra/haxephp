# Example WebAPI 1

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/01web_querystring/code) for more comments.

So far we've been using the Haxe Generic API, available for all platforms. Now let's look at the ServerSide specific API, which is located in the package php. Change your Index.hx file with the following content :

_Read more about this [here](about.md)_

_The code used in this example can be found [here](https://github.com/MatthijsKamstra/haxephp/tree/master/01web_querystring/code)._

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

Open your favorite editor, copy/paste the code and save it in the `src` folder.

```haxe
package ;

import php.Lib;
import php.Web;

class Main
{
	function new()
	{
		var params = Web.getParams();
		var name = params.exists('name') ? params.get('name') : 'world';
		Lib.print('Hello ' + name + '!');
	}

    static public function main()
    {
        var main = new Main();
	}
}

```

## The Haxe build file, build.hxml

There are a lot of different arguments that you are able to pass to the Haxe compiler.
These arguments can also be placed into a text file of one per line with the extension hxml. This file can then be passed directly to the Haxe compiler as a build script.

```bash
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

Visit <http://localhost/?name=Haxe> (assuming that your webserver is pointing at the generated folder `www`). It will display the request parameters for the URL that were sent by the browser. So you must try <http://localhost/> just to see the difference!
