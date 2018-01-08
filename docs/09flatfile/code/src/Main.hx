package ;

#if php
import php.Lib;
#elseif neko
import neko.Lib;
#end


class Main 
{

	public function new() 
	{
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
	}


	static public function main() : Void
	{
		var main = new Main();
	}
}

typedef CounterData = 
{
	var update : Date;
	var created : Date;
	var counter : Int;
}