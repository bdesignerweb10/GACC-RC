create database gacc;
use gacc;

/* Usuários */

CREATE TABLE tbl_usuarios
(
	id 			int primary key auto_increment NOT NULL,
	usuario     VARCHAR(120) NOT NULL,
	senha       VARCHAR(120) NOT NULL,
	nivel       int(1) NOT NULL
);


/* Slides */
CREATE TABLE tbl_slides
(
	id 		int primary key auto_increment not null,
	nome 	VARCHAR(120) NOT NULL,
	link 	VARCHAR(255) NULL,
	img 	VARCHAR(255) NOT NULL,
	ativo 	int(1) NOT NULL
);


/* Noticias */
CREATE TABLE tbl_noticias
(
	id_noticia		int primary key auto_increment NOT NULL,
	titulo        VARCHAR(255) NOT NULL,
	img 	VARCHAR(255) NOT NULL,
	descricao   TEXT NOT NULL,
	ativo       int(1) NOT NULL,	
	data_publicacao     DATE NOT NULL	
);

/* Blog */

CREATE TABLE tbl_blog_cat
(
	id_cat	int primary key auto_increment NOT NULL,
	nome    VARCHAR(255) NOT NULL,
	ativo   int(1) NOT NULL
);

CREATE TABLE tbl_blog
(
	id_blog		int primary key auto_increment NOT NULL,
	nome        VARCHAR(255) NOT NULL,
	img 	VARCHAR(255) NOT NULL,
	descricao   TEXT NOT NULL,
	ativo       int(1) NOT NULL,
	destaque    int(1) NOT NULL,
	data_publicacao     DATE NOT NULL,
	id_cat      int NULL
);

ALTER TABLE tbl_blog
ADD FOREIGN KEY R_5 (id_cat) REFERENCES tbl_blog_cat (id_cat);


/* Inserts Usuários */
insert into tbl_usuarios values (null,'admin',md5('#rl11br01'),1);
insert into tbl_usuarios values (null,'bruno',md5('#rl11br01'),1);