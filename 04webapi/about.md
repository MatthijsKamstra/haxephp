#About Webapi 4

Already the fourth example in the webapi series!

I try to build upon the previous webapi examples. If the [`example.md`](example.md) misses something, make sure to check out the previous webapi examples 


Now we will use `.htaccess` on the server to get 'pritty print url'
And use the [Web Dispatcher](http://haxe.org/manual/dispatch), read more [Haxe api](http://api.haxe.org/haxe/web/Dispatch.html)


This example will look exactly the same as the previous example, with a little deference: the url!

<http://localhost/home> instead of <http://localhost/?state=home>

## About 

In any website, it is necessary to be able to transform a given URL (such as /user/view) and GET/POST parameters (such as userId=10&edit=1) into the corresponding function call that will process the request and its parameters.

A typical website application will do (for each request) :

- connect to the database, fetch user/session credentials, initialize everything
- resolve the class/method which we need to call based on the URL
- dispatch the request (call the method)
- print result
- cleanup



# more info

This example is a simplified example from the the example written down by Jason O'Neil

- <https://gist.github.com/jasononeil/5667079>
- <http://jasono.co/2013/05/29/creating-complex-url-routing-schemes-with-haxe-web-dispatch/>
- <http://haxe.org/manual/dispatch>
- <http://api.haxe.org/haxe/web/Dispatch.html>