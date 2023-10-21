# Example json

I have created the [user.json](https://github.com/MatthijsKamstra/haxephp/tree/master/08json/code/bin/www/assets/users.json) with <http://jsonplaceholder.typicode.com/users>.

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/08json/code) for more comments.

In this example we are going to read and use a `.json` file.

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

This example is getting to big to post here, so if you want to check out the complete file go and check out [Main.hx](https://github.com/MatthijsKamstra/haxejs/tree/master/08json/code/Main.hx)

So the first part of this code is loading the `json` file:

```haxe
var path = Sys.getCwd() + '/users.json';
if(sys.FileSystem.exists(path)){
	var str : String = sys.io.File.getContent(path);
} else {
	trace ('ERROR: there is not file: $path');
}
```

convert data (String) to a `json` file:
<http://api.haxe.org/haxe/Json.html>

```haxe
// trace('str: $str');
json = haxe.Json.parse(str);
```

And then it's possible to convert the `json` to usable input:

```haxe
for (i in 0 ... _json.length)
{
	var _user = json[i];
	trace ( "Name: " + _user.name );
}

```

To make that easier I use [`typedef`](http://haxe.org/manual/type-system-typedef.html)

We convert the json data to `User` so when we use a IDE it will use autocompletion

```haxe
typedef User = {
	var id : Int; // 1
	var name : String; // Leanne Graham
	var username : String; // Bret
	var email : String; // Sincere@april.biz
	var address : {
	  	var street : String; // Kulas Light
	  	var suite : String; // Apt. 556
	  	var city : String; // Gwenborough
	  	var zipcode : String; // 92998-3874
	  	var geo : {
	    	var lat : String; // -37.3159
	    	var lng : String; // 81.1496
	      };
	};
	var phone : String; // 1-770-736-8031 x56442
	var website : String; // hildegard.org
	var company : {
	  	var name : String; // Romaguera-Crona
	  	var catchPhrase : String; // Multi-layered client-server neural-net
	  	var bs : String; // harness real-time e-markets
    };
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
