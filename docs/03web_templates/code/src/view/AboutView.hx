package view;

class AboutView {
	public function new() {
		// http://haxe.org/doc/cross/template

		var str = haxe.Resource.getString("bootstrap_basic");
		var t = new haxe.Template(str);
		var output = t.execute({title: "About"});

		Lib.print(output);
	}
}
