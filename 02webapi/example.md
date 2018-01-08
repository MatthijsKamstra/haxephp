# Example WebAPI 2

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/02webapi/code) for more comments.

So far we've been only using the Haxe Generic API, available for all platforms. Now let's look at the ServerSide specific API, which is located in the package `php`.


*Read more about this [here](about.md)*

_The code used in this example can be found [here](https://github.com/MatthijsKamstra/haxephp/tree/master/02webapi/code)._


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


```
package ;

import php.Lib;
import php.Web;

class Main
{
	function new()
	{
		var params 	= php.Web.getParams();
		var state 	= params.exists('state') ? params.get('state') : 'home';
		new ViewManager(state);
	}

	static public function main()
	{
		var main = new Main();
	}
}

```

Create a class with the name `ViewManager.hx` beside the `Main.hx`


```
package ;

import view.*;

class ViewManager
{
	public function new (state:String)
	{
		switch (state.toLowerCase()) {
			case "home":
				new HomeView();
			case "about":
				new AboutView();
			case "contact":
				new ContactView();
			default:
				new HomeView();
		}
	}
}
```

And create `HomeView.hx`, `AboutView.hx` and `ContactView.hx` in a folder called `view`.
The class will look simular like this `HomeView` (check the example [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/02webapi/code))

```
package view;

class HomeView
{
	public function new()
	{
		var output = '<h1>Home</h1>
	<ul>
		<li><a href="?state=home">Home</a></li>
		<li><a href="?state=about">About</a></li>
		<li><a href="?state=contact">Contact</a></li>
	</ul>';
		php.Lib.print(output);
	}
}

```


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


## Build js with Haxe

To finish and see what we have, build the file and see the result

1. Open your terminal
2. `cd ` to the correct folder where you have saved the `build.hxml`
3. type `haxe build.hxml`
4. press enter


You could build everything directly in the terminal.

```
haxe -cp src -main Main -php bin/www -dce full
```

It will have the same result



And visit <http://localhost/> (assuming that your webserver is pointing at the generated folder `www`). It will display the request parameters for the URL that were sent by the browser.

