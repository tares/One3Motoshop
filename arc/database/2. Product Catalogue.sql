CREATE TABLE data_motor_brand(
	ID_motoBrand INT(11) NOT NULL auto_increment,
	name_motoBrand VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	pic_motoBrand VARCHAR(30) NOT NULL DEFAULT 'no_picture',
	activeStatus BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(ID_motoBrand),
	)ENGINE=InnoDB;
	
CREATE TABLE data_motor_type(
	ID_motoType INT(11) NOT NULL auto_increment,
	ID_motoBrand INT(11) NOT NULL DEFAULT '1',
	name_motoType VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	pic_motoType VARCHAR(30) NOT NULL DEFAULT 'no_picture',
	activeStatus BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(ID_motoType),
	FOREIGN KEY(ID_motoBrand) REFERENCES data_motor_brand(ID_motoBrand)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	
INSERT INTO data_motor_brand VALUES
	('','Ducati','logo_ducati','1'), 
	('','Honda','logo_honda','1'),
	('','Kawasaki','logo_kawasaki','1'),
	('','KTM','logo_ktm','1'),
	('','Suzuki','logo_suzuki','1'),
	('','Yamaha','logo_yamaha','1');
	
INSERT INTO data_motor_type VALUES
	('','1','Monster','pic_ducati_monster','1'),
	('','1','848','pic_ducati_848','1'),
	('','1','SF 848','pic_ducati_sf848','1'),
	('','1','SF 1098','pic_ducati_sf1098','1'),
	('','1','1199 Panigale','pic_ducati_1199panigale','1'),
	('','2','CBR 150','pic_honda_cbr150','1'),
	('','2','CBR 250','pic_honda_cbr250','1'),
	('','2','CBR 600','pic_honda_cbr600','1'),
	('','2','CBR 1000','pic_honda_cbr1000','1'),
	('','2','CB 600','pic_honda_cb600','1'),
	('','2','CB 1000','pic_honda_cb1000','1'),
	('','3','Ninja 250','pic_kawasaki_ninja250','1'),
	('','3','Ninja 250 Fi','pic_kawasaki_ninja250fi','1'),
	('','3','Ninja 650','pic_kawasaki_ninja650','1'),
	('','3','ER6N','pic_kawasaki_er6n','1'),
	('','3','ZX6R','pic_kawasaki_zx6r','1'),
	('','3','ZX10R','pic_kawasaki_zx10r','1'),
	('','3','Z1000','pic_kawasaki_z1000','1'),
	('','4','Duke 200','pic_ktm_duke','1'),
	('','5','GZX600','pic_suzuki_gzx600','1'),
	('','5','GZX750','pic_suzuki_gzx750','1'),
	('','5','GSX 1000','pic_suzuki_gsx1000','1'),
	('','6','YZF R6','pic_yamaha_yzfr6','1'),
	('','6','YZF R1','pic_yamaha_yzfr1','1');