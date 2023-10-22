package;

import view.*;

class ViewManager {
	public function new(state:String) {
		switch (state.toLowerCase()) {
			case "home":
				new HomeView();
			case "/about":
				new AboutView();
			case "/contact":
				new ContactView();
			default:
				new HomeView();
		}
	}
}
