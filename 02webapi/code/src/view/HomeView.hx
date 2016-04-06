package view;

class HomeView 
{
	public function new() 
	{
		var output = '<h1>Home</h1>
	<ul>
		<li><a href="?state=home">Home</a></li>
		<li><a href="?state=about">About</a></li>
		<li><a href="?state=contact">Contact</a></li>
	</ul>';
		php.Lib.print(output);
	}
}