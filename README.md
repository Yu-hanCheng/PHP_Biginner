`php -S localhost:8888`
`localhost:8888/?name=<a href="http://google.com">sarahLink<a/>`

* mysql
`create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);`
`create table todos_test (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL DEFAULT true);`
* fetchAll()
```
array(1) { [0]=> array(6) { ["id"]=> string(1) "1" [0]=> string(1) "1" ["description"]=> string(15) "Go to the store" [1]=> string(15) "Go to the store" ["completed"]=> string(1) "0" [2]=> string(1) "0" } }
```
* fetchAll(PDO::FETCH_OBJ)
```
array(1) { [0]=> object(stdClass)#6 (3) { ["id"]=> string(1) "1" ["description"]=> string(15) "Go to the store" ["completed"]=> string(1) "0" } }
```