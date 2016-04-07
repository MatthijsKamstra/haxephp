package utils;

class Read
{

	public static function json(folderName:String, fileName:String) : Dynamic
	{
		var _path = Sys.getCwd() + '/$folderName/';
		var _filePath = _path + "" + fileName + ".json";

		// trace(_filePath);

		var json:Dynamic;
		if(sys.FileSystem.exists(_filePath)){
			json = haxe.Json.parse(sys.io.File.getContent(_filePath));
		} else {
			json = null;
		}
		return json;
	}	

}