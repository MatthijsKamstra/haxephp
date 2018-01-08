#About SQLite

In a previous example we used a simple flat-file 'database'.
An SQLite database is a database but the lite version. It's the local database for a lot of (mobile)apps.

## What is SQLite?

> SQLite is a software library that implements a self-contained, serverless, zero-configuration, transactional SQL database engine. SQLite is the most widely deployed database engine in the world. The source code for SQLite is in the public domain.

__source: <https://www.sqlite.org/>__


Or (because it's the first place you look for information):

> SQLite is a relational database management system contained in a C programming library. In contrast to many other database management systems, SQLite is not a client–server database engine. Rather, it is embedded into the end program.
>
> SQLite is ACID-compliant and implements most of the SQL standard, using a dynamically and weakly typed SQL syntax that does not guarantee the domain integrity.[5]
>
> SQLite is a popular choice as embedded database software for local/client storage in application software such as web browsers. It is arguably the most widely deployed database engine, as it is used today by several widespread browsers, operating systems, and embedded systems, among others.[6] SQLite has bindings to many programming languages.


__Source: <https://en.wikipedia.org/wiki/SQLite>__


## SPOD Macros

The Simple Persistent Objects Database Library (SPOD) is part of the standard Haxe distribution. It needs two classes neko.db.Object and neko.db.Manager. This Tutorial will explain how to use this library.

Starting from Haxe 2.08 , a new version of SPOD called SPOD Macros is available. The principles are similar but SPOD Macros is more type safe and require less manual SQL writing. Please read the SPOD Macros documentation.
But first, let's explain what SPOD is doing. With SPOD, you can define some Classes that will map to your database tables. You can then manipulate tables like objects, by simply modifying the table fields and calling a method to update the datas or delete the entry. For most of the standard stuff, you only need to provide some basic declarations and you don't have to write one single SQL statement. You can later extend SPOD by adding your own SQL requests for some application-specific stuff.

> The new SPOD Macros library is a replacement of the previous neko/php SPOD. The major enhancement in this version is that it is based on Macros, making it possible to write Haxe expressions directly instead of SQL, while keeping type-safety.


<http://old.haxe.org/manual/spod>

<https://github.com/HaxeFoundation/record-macros>