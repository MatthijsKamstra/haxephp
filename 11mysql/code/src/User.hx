import sys.db.Types;
import sys.db.*;

class User extends sys.db.Object {
	public var id : SId;
	public var name : SString<32>;
	public var birthday : SDate;
	public var phoneNumber : SNull<SText>;
}