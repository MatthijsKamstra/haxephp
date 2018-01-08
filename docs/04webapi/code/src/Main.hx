package ; 

import haxe.web.Dispatch;
import haxe.web.Dispatch.DispatchError;

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
		try {
			var _webURI = Web.getURI();
			Dispatch.run( _webURI, Web.getParams(), new Routes() );
		} 
		catch (e:DispatchError) {
			//println("ERROR: " + e);
			Dispatch.run("/", Web.getParams(), new Routes() );
		}
	}

	static public function main()
	{
		var main = new Main();
	}
}