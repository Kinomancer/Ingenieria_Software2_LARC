/* si la base de datos ya existe se elimina */
DROP SCHEMA IF EXISTS `fes_ico`;

/*Creacion de nuestra base de datos y ponemos la codificacion para los caracteres raros */
CREATE SCHEMA IF NOT EXISTS `fes_ico` default character set utf8 collate utf8_spanish2_ci;

USE `fes_ico`;

/*crear nuestra tabla*/

CREATE TABLE `ALUMNO`(
    `nombre_usuario` text not null,
    `carrera` text not null,
    `no_cuenta` int (10) not null,
    `direccion` text not null,
    `telefono` varchar (8) not null,
    `email` text not null,
    `password` varchar (8) not null,
    `fecha_registro` datetime not null default current_timestamp,
    `permisos` int (11) not null default '1' 
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*agregando un registro*/
/*
error es que estavamos poniendo el values pero no insertamos ningun dato
*/
insert into `ALUMNO`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`, `fecha_registro`)values
    ('Aaron Velasco', 'ico', '413112576','gloria 15 xochimilco','56412165','aaronvelasco@outlook.com','123456','2021-03-16 18:42:34');

/*definir una PK*/

/*para el PK es con `` esas comillas y estas no ''*/

alter table `ALUMNO`
    add primary key (`no_cuenta`);

commit;