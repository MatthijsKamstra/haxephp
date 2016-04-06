#Hello world

![](../img/helloworld.png)

Developing JavaScript code is really easy with Haxe. Let's see our first HelloWorld example :

	class Test {
		static function main() {
			trace("Hello World !");
		}
	}

Put this class into a file named `Test.hx` and create the file `compile.hxml` in the same directory with the following content :

	-php www
	-main Test

To compile open you terminal and type

	cd 

And drag the folder where you saved the files, into the terminal.
It will look something like this
	
	cd /path/to/folder/

press enter and type

	haxe compile.hxml

If an error occurs, it will be displayed. 

If everything goes well, it should create a directory `www` that contains the generated files. You can configure your webserver to point at the www folder to see the PHP code in action.

Try [MAMP](https://www.mamp.info/en/) of [AMPPS](http://www.ampps.com/)for example