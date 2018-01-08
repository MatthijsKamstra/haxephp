# Example WebAPI 3

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/03webapi/code) for more comments.

So far we've been only using the Haxe Generic API, available for all platforms. Now let's look at the ServerSide specific API, which is located in the package php. Modify your Index.hx file with the following content :



*Read more about this [here](about.md)*

_The code used in this example can be found [here](https://github.com/MatthijsKamstra/haxephp/tree/master/03webapi/code)._


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


# View classes

And create `HomeView.hx`, `AboutView.hx` and `ContactView.hx` in a folder called `view`.
The class will look simular like this `HomeView` (check the example [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/03webapi/code))

```
package view;

class HomeView
{
	public function new()
	{
		// http://haxe.org/doc/cross/template

		var str 	= haxe.Resource.getString("bootstrap_basic");
		var t 		= new haxe.Template(str);
		var output 	= t.execute({ title : "About" });

		php.Lib.print(output);
	}
}

```

The interesting stuff is happing in the [template](https://github.com/MatthijsKamstra/haxephp/tree/master/03webapi/code/src/assets/bootstrap_basic.mtt):

```
	<title>::title::</title>
```

The `::title::` is replace with "About" from the example above

And the more powerfull features of Template:

```
<li class="::if (title == "About")::active::else::inactive::end::"><a href="?state=about">About</a></li>
```
This is used to set the class of the `<li>` on `active` or `inactive`


Check for more Template examples: <http://haxe.org/manual/std-template.html>


## The Haxe build file, build.hxml

There are a lot of different arguments that you are able to pass to the Haxe compiler.
These arguments can also be placed into a text file of one per line with the extension hxml. This file can then be passed directly to the Haxe compiler as a build script.

```
# // build.hxml
-cp src
-main Main
-php bin/www
-resource src/assets/bootstrap_basic.mtt@bootstrap_basic
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
haxe -cp src -main Main -php bin/www -dce full -resource src/assets/bootstrap_basic.mtt@bootstrap_basic
```

It will have the same result



And visit <http://localhost/> (assuming that your webserver is pointing at the generated folder `www`). It will display the request parameters for the URL that were sent by the browser.

