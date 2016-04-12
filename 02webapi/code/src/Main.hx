package ; 

#if php
import php.Lib;
import php.Web;
#elseif neko
import neko.Lib;
import neko.Web;
#end


/**
 * @author Matthijs Kamstra aka [mck]
 */
class Main
{
	function new()
	{
		var params 	= php.Web.getParams();
		var state 	= params.exists('state') ? params.get('state') : 'home';

		new ViewManager(state);		
	}

	static public function main()
	{
		var main = new Main();
	}
}