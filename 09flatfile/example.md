#Example flat file

We are going to read and write a json file as if it was a database.
You could call it a flat-file database.

Check the [code folder](https://github.com/MatthijsKamstra/haxephp/tree/master/09flatfile/code) for more comments.

In this example we are going to read and use a `.json` file.



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

This example is getting to big to post here, so if you want to check out the complete file go and check out [Main.hx](https://github.com/MatthijsKamstra/haxephp/tree/master/09flatfile/code/Main.hx) 


The next code wil do that following

- load the data
- `if` the data == null
	- generate a json with current date
- `else` use the loaded data to 
	- keep the created date the same
	- change the update
	- and `+1` the counter
- and write it down
- output the json

```
	var json : CounterData = utils.Read.json('_data','test');
	if(json == null){
		json = {update: Date.now(), created: Date.now(), counter: 0};
	} else {
		var _counter = json.counter + 1;
		var _created : Date = json.created;
		json = {update: Date.now(), created: _created, counter: _counter};
	}
	utils.Write.json('_data','test',json);
	Lib.print(json);
```

In the folder `utils` you will find a `Read.hx`
It has a static function `json` that will read the file (if it exists)

- it will check `if` the file exists
	- get the content of that file 
	- parse it to json
- `else` if will return null

```
public static function json(folderName:String, fileName:String) : Dynamic
{
	var _path = Sys.getCwd() + '/$folderName/';
	var _filePath = _path + "" + fileName + ".json";
	var json:Dynamic;
	if(sys.FileSystem.exists(_filePath)){
		json = haxe.Json.parse(sys.io.File.getContent(_filePath));
	} else {
		json = null;
	}
	return json;
}	
```

In that same folder folder `utils` you will find a `Write.hx`
It has a static function `json` which writes the file to the system

- it will check `if` the folder exists
	- if not create the folder 
- check if the creation of the folder worked
- write the file

```
public static function json(folderName:String, fileName:String, data:Dynamic) : Void
{
	var _path = Sys.getCwd() + '/$folderName/';
	if(! sys.FileSystem.exists( _path ) ){
		sys.FileSystem.createDirectory( _path );
	}

	if(!sys.FileSystem.exists(_path)){
	 	try {
			throw "Error";
		} catch( msg : String ) {
			trace("Error occurred: " + msg);
		}
	}
	var _fileName = fileName + ".json" ;
	var _filePath = _path + "" + _fileName;
    var f:FileOutput = File.write(_filePath,false);
    f.writeString(haxe.Json.stringify(data));
    f.close();
}	
```

To make that easier I use [`typedef`](http://haxe.org/manual/type-system-typedef.html)

We convert the json data to `CounterData` so when we use a IDE it will use autocompletion

```
typedef CounterData = 
{
	var update : Date;
	var created : Date;
	var counter : Int;
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
3. type `haxe php.hxml`
4. press enter


You could build everything directly in the terminal.

```
haxe -cp src -main Main -php bin/www -dce full
```

It will have the same result



