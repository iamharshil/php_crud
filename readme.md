# Process
- name of db = php_demo
- table name = demo_table
- id primary int
- name varchar 50
- score int
- by terminal:
	```mysql
	mysql -u tony -p
	create database php_demo;
	use php_demo;
	create table demo_table(id int not null auto_increment primary key, name varchar(50) not null, score int);
	select * from demo_table;
	exit
	```
