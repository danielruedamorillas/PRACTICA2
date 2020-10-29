create database bd_GestionDeNotas;
	use bd_GestionDeNotas;
	create table tbl_administrador(
		id_administrador int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		email_admin varchar(255) NOT NULL,
		pass_admin varchar(50) NOT NULL
		);
	create table tbl_alumnos(
		id_alumno int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nombre_alu varchar(100) NOT NULL,
		apellido_pat varchar(100) NOT NULL,
		apellido_mat varchar(100) NOT NULL,
		grupo_alu char(1) NOT NULL,
		email_alu varchar(150) NOT NULL,
		pass_alu varchar(50) NOT NULL
		);
	create table tbl_notas(
		id_nota int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		nombre_asignatura enum('Programacion','Mates','Fisica') NOT NULL,
		nota int(2) NOT NULL,
		id_alumno int(11)
		);

  	ALTER TABLE tbl_notas ADD CONSTRAINT fk_notas_alu FOREIGN KEY (id_alumno) REFERENCES tbl_alumnos(id_alumno);

	  
	INSERT INTO tbl_administrador(email_admin,pass_admin) VALUES 
	("ejemplo@ejemplo.com","1234"),
	("admin@admin.com","1234");

	INSERT INTO tbl_alumnos(nombre_alu,apellido_pat,apellido_mat,grupo_alu,email_alu,pass_alu) VALUES 
	("Dani","Rueda","Morillas","A","danirueda@gmail.com","1234"),
	("Alex","Pinzano","Torre","A","Alex@gmail.com","1234"),
	("Carlos","Piedras","Jimenez","B","carlospiedras@gmail.com","1234");

	INSERT INTO tbl_notas(nombre_asignatura,nota,id_alumno) VALUES 
	("Mates","0",1),
	("Programacion","0",1),
	("Fisica","0",1),
	("Mates","0",2),
	("Programacion","0",2),
	("Fisica","0",2),
	("Mates","0",3),
	("Programacion","0",3),
	("Fisica","0",3);

