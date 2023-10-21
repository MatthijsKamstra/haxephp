package view;

#if php
import php.Lib;
import php.Web;
#elseif neko
import neko.Lib;
import neko.Web;
#end

class HomeView {
	public function new() {
		var output = '<h1>Home</h1>
	<ul>
		<li><a href="?state=home">Home</a></li>
		<li><a href="?state=about">About</a></li>
		<li><a href="?state=contact">Contact</a></li>
	</ul>';
		Lib.print(output);
	}
}
