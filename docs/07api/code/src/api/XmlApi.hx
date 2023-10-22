package api;

class XmlApi {
	var xml = "<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

	public function new() {
		var p = Web.getParams();
		Web.setHeader('Content-Type', 'application/xml');
		Lib.println(xml);
	}
}
