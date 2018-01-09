package;

import sys.db.*;

class DBStart
{
	public function new(useMysql = true)
	{

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

		// Create the "user" table
		if ( !sys.db.TableCreate.exists(User.manager) ) {
			sys.db.TableCreate.create(User.manager);
		}

		// Fill database with users
		for (i in 0 ... 10) {
			var user = createRandomUser();
			user.insert();
		}

		// close the connection and do some cleanup
		sys.db.Manager.cleanup();

		// Close the connection
		cnx.close();
	}

	// Dutch names
	public static var FIRST_NAMES:Array<String> = ["Elina","Martin","Lowell","Corazon","Diedre","Slyvia","Latrice","Chantell","Jeff","Zulma","Deonna","Kortney","Sunshine","Alysa","Zane","Shaina","Queenie","Ingeborg","Jarrod","Angle" ];
	public static var SUR_NAMES:Array<String> = ["De Jong","Jansen","De Vries","Van den Berg ","Van Dijk","Bakker","Janssen","Visser","Smit","Meijer","De Boer","Mulder","De Groot","Bos","Vos","Peters","Hendriks","Van Leeuwen","Dekker","Brouwer","De Wit","Dijkstra","Smits","De Graaf","Van der Meer"];

	function createRandomUser():User
	{
		var _name = FIRST_NAMES[Std.random(FIRST_NAMES.length)] + ' ' + SUR_NAMES[Std.random(SUR_NAMES.length)];
		var _phone = "020 - " + Std.random(10) + Std.random(10) + Std.random(10) + " " + Std.random(10) + Std.random(10) +" " + Std.random(10) + Std.random(10);
		var _birthday = new Date((Std.random(100) + 1900), Std.random(12), Std.random(30), 0,0,0);
		var user = new User();
		user.name = _name;
		user.phoneNumber = _phone;
		user.birthday = _birthday;
		return user;

	}
}