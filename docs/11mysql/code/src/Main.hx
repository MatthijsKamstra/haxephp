package ;

#if php
import php.Lib;
#elseif neko
import neko.Lib;
#end

import sys.FileSystem;
import sys.db.*;

class Main
{

	public function new()
	{
		var html = '';

		// initialize the connection
		var useMysql = true;
		var isDummyData = false;

		// check if file exists
		if(!useMysql){
			if ( ! sys.FileSystem.exists ( "mybase.ddb" ) ){
				// init SQlite database
				new DBStart(useMysql);
			}
		} else {
			new DBStart(useMysql);
		}

		var cnx : sys.db.Connection;
		if( !useMysql )
			// Open a connection
			cnx = sys.db.Sqlite.open("mybase.db");
		else {
			// Open a connection
			cnx = sys.db.Mysql.connect({
				host : "localhost",
				port : 3306,
				database : "MyDatabase",
				user : "root",
				pass : "",
				socket : null
			});
		}

		// Set as the connection for our SPOD manager
		sys.db.Manager.cnx = cnx;

		// initialize manager
		sys.db.Manager.initialize();

		// for (i in 0 ... User.manager.all().length) {
		//  var _user = User.manager.get(i);
		//  if(_user != null) trace(_user.name);
		// }

		createList();

		// close the connection and do some cleanup
		sys.db.Manager.cleanup();

		// Close the connection
		cnx.close();

	}

	function createList():Void
	{
		var html = '';
		html += '<table style="width:100%">';
		html += '<tr><th>id</th><th>name</th><th>birthday</th><th>phoneNumber</th></tr>';
		for (i in 0 ... User.manager.all().length)
		{
			var _user : User = User.manager.get(i);
			if(_user == null) continue;
			html += '<tr>';
			html += '<td>${_user.id}</td>';
			html += '<td>${_user.name}</td>';
			html += '<td>${_user.birthday}</td>';
			html += '<td>${_user.phoneNumber}</td>';
			html += '</tr>';
		}
		html += '</table>';

		Lib.print(html);
	}


	static public function main() : Void
	{
		var main = new Main();
	}
}
