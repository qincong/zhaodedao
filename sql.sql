create database zhaodedao;


create table goods_message(
	gid int not null auto_increment ,
	is_lost int,y
	goods_name varchar(50) not null,
	photodir varchar(50),
	location varchar(100),
	gettime varchar(50),
	description text,
	user_email varchar(50),
	user_phone varchar(50),
	primary key(gid)
);