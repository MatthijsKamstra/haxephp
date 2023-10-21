package view;

class AboutView {
	public function new() {
		var output = '<h1>About</h1>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="about">About</a></li>
		<li><a href="contact">Contact</a></li>
	</ul>';
		Lib.print(output);
	}
}
