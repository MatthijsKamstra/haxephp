package api;

import haxe.Json;

class JsonApi {
	public function new() {
		var p = Web.getParams();
		Web.setHeader('Content-Type', 'application/json');
		Lib.println(Json.stringify({
			test: 'xx',
			foo: true,
			p: p
		}));
	}
}
