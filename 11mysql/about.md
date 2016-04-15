#About MySQL

The previous example is a lite databases. We now move over to MySQL, the PHP database mother load.

## What is MySQL?

> MySQL is the world's most popular open source database. Whether you are a fast growing web property, technology ISV or large enterprise, MySQL can cost-effectively help you deliver high performance, scalable database applications. 

__Source: <https://www.mysql.com/>__


Or (because it's the first place you look for information):

> MySQL is an open-source relational database management system (RDBMS);[6] in July 2013, it was the world's second most[a] widely used RDBMS, and the most widely used open-source client–server model RDBMS.[9] 


__Source: <https://en.wikipedia.org/wiki/MySQL>__


## SPOD Macros


**We use SPOD Macros for this, same as for SQLite **

The Simple Persistent Objects Database Library (SPOD) is part of the standard Haxe distribution. It needs two classes `neko.db.Object` and `neko.db.Manager`. This Tutorial will explain how to use this library.

Starting from Haxe 2.08 , a new version of SPOD called SPOD Macros is available. The principles are similar but SPOD Macros is more type safe and require less manual SQL writing. Please read the SPOD Macros documentation.
But first, let's explain what SPOD is doing. With SPOD, you can define some Classes that will map to your database tables. You can then manipulate tables like objects, by simply modifying the table fields and calling a method to update the datas or delete the entry. For most of the standard stuff, you only need to provide some basic declarations and you don't have to write one single SQL statement. You can later extend SPOD by adding your own SQL requests for some application-specific stuff.

> The new SPOD Macros library is a replacement of the previous neko/php SPOD. The major enhancement in this version is that it is based on Macros, making it possible to write Haxe expressions directly instead of SQL, while keeping type-safety.


<http://old.haxe.org/manual/spod>