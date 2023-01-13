create database php_pdo_crud_toets;
use php_pdo_crud_toets;

create table DureAuto (
	`Id` int(11) unsigned not null auto_increment,
    `Merk` varchar(200),
    `Model` varchar(200),
    `Topsnelheid` smallint(4),
    `Prijs` varchar(200),
    primary key (`id`))
    ENGINE=InnoDB;
    
insert into RichestPeople (`Merk`,`Model`,`Topsnelheid`,`Prijs`)
values ('Bugatti','La voiture noire',420,'16500000'), 
		('Rolls-Royce','Swaptail',250,'10960000'), 
		('Bugatti','EB110',390,'7500000'), 
		('Mercedes-Benz','Maybach Exelero',350,'6700000'), 
		('Koenigsegg','CCXR Trevita',401,'4000000');
        