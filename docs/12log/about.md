# About logging

the default method for loging is `trace`. It's possible to create your own login system by overwriting this.

But with php you don't want to output to the "screen", because if some data have been printed, the headers have already been sent so this will raise an exception.

So an logging system that outputs to a file is what we are making for PHP/Neko

Appending data to a file.
