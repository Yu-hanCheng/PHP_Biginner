`php -S localhost:8888`
`localhost:8888/?name=<a href="http://google.com">sarahLink<a/>`

* mysql
`create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);`
`create table todos_test (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL DEFAULT true);`