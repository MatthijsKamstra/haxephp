package ;

#if php
import php.Lib;
#elseif neko
import neko.Lib;
#end


class Main 
{

	private var json : Dynamic;

	public function new() 
	{
		//trace ("json example");

		var path = Sys.getCwd() + '/assets/users.json';

		if(sys.FileSystem.exists(path)){
			var str : String = sys.io.File.getContent(path);
			json = haxe.Json.parse(str);
			//trace ("number of users: " + json.length);
			createList();
		} else {
			trace ('ERROR: there is not file: $path');
		}
	}

	private function createList():Void
	{
		var html = '';
		html += '<table style="width:100%">';
		html += '<tr><th>id</th><th>name</th><th>username</th><th>email</th><th>phone</th><th>website</th></tr>';
		for (i in 0 ... json.length)
		{
			var _user : User = json[i];
			html += '<tr>';
			html += '<td>${_user.id}</td>';
			html += '<td>${_user.name}</td>';
			html += '<td>${_user.username}</td>';
			html += '<td>${_user.email}</td>';
			html += '<td>${_user.phone}</td>';
			html += '<td>${_user.website}</td>';
			html += '</tr>';
		}
		html += '</table>';

		Lib.print(html);
	}


	static public function main() : Void
	{
		var main = new Main();
	}
}


typedef User = 
{
	var id : Int; // 1,
	var name : String;//Leanne Graham",
	var username : String;//Bret",
	var email : String;//Sincere@april.biz",
	var address : {
	  	var street : String;//Kulas Light",
	  	var suite : String;//Apt. 556",
	  	var city : String;//Gwenborough",
	  	var zipcode : String;//92998-3874",
	  	var geo : {
	    	var lat : String;//-37.3159",
	    	var lng : String;//81.1496"
	      };
	};
	var phone : String;//1-770-736-8031 x56442",
	var website : String;//hildegard.org",
	var company : {
	  	var name : String;//Romaguera-Crona",
	  	var catchPhrase : String;//Multi-layered client-server neural-net",
	  	var bs : String;//harness real-time e-markets"
    };
}