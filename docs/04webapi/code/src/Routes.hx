package;

import haxe.web.Dispatch;
import view.*;

// http://haxe.org/manual/dispatch
// https://gist.github.com/jasononeil/5667079

class Routes {

	public function new() {}

	function doDefault( d:Dispatch )
	{ 
		new HomeView();
	}
	
	private function doHome(d:Dispatch)
	{
		doDefault(d);
	}

	private function doContact(d:Dispatch)
	{
		new ContactView();
	}

	private function doAbout(d:Dispatch)
	{
		new AboutView();
	}

}

