package utils;

import sys.io.File;
import sys.io.FileOutput;
import sys.FileSystem; 

class Write
{

	public static function json(folderName:String, fileName:String, data:Dynamic) : Void
	{
		var _path = Sys.getCwd() + '/$folderName/';

		if(! sys.FileSystem.exists( _path ) ){
			sys.FileSystem.createDirectory( _path );
		}

		// check if it worked
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
        // var f:FileOutput = File.append(_filePath,false);
        f.writeString(haxe.Json.stringify(data));
        f.close();
	}


}