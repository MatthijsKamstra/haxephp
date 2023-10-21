package view;

class ContactView {
	public function new() {
		// http://haxe.org/doc/cross/template

		var str = haxe.Resource.getString("bootstrap_basic");
		var t = new haxe.Template(str);
		var output = t.execute({title: "Contact"});

		Lib.print(output);
	}
}
