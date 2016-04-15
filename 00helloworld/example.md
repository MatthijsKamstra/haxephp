#Hello World Example

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/00helloworld/code) for more comments.

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

```
package ;

class Main
{
	function new()
	{
		trace("Example");
	}

    static public function main()
    {
        var main = new Main();
	}
}
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
3. Type `haxe php.hxml`
4. press enter


It will output PHP files in the `bin/www` folder
You can configure your webserver to point at the www folder to see the PHP code in action.


You could build everything directly in the terminal.

```
haxe -cp src -main Main -php bin/www -dce full
```

It will have the same result

