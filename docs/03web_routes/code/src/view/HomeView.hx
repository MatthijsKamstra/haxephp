package view;

class HomeView {
	public function new() {
		var output = '<h1>Home</h1>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="about">About</a></li>
		<li><a href="contact">Contact</a></li>
	</ul>';
		Lib.print(output);
	}
}
