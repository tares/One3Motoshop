CREATE TABLE data_gallery_group(
	ID_galleryGroup INT(11) NOT NULL auto_increment,
	name_galleryGroup VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	pic_coverPhoto VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	flag BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(ID_galleryGroup)
	)ENGINE=InnoDB;
	
CREATE TABLE data_gallery_motoType(
	ID_motoTypeGroup INT(11) NOT NULL auto_increment,
	ID_galleryGroup INT(11) NOT NULL,
	name_motoTypeGroup VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	pic_coverPhoto VARCHAR(30) NOT NULL DEFAULT 'NO NAME',
	flag BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(ID_motoTypeGroup),
	FOREIGN KEY(ID_galleryGroup) REFERENCES data_gallery_group(ID_galleryGroup)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	
CREATE TABLE data_picTable(
	ID_photo INT(11) NOT NULL auto_increment,
	ID_motoTypeGroup INT(11) NOT NULL,
	addedDate DATETIME NOT NULL DEFAULT '2009-01-01 00:00:00',
	captions TEXT NOT NULL,
	urlThumb TEXT NOT NULL,
	urlPic TEXT NOT NULL,
	flag BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(ID_photo),
	FOREIGN KEY(ID_motoTypeGroup) REFERENCES data_gallery_motoType(ID_motoTypeGroup)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	

INSERT INTO data_gallery_group VALUES 
	('','Aprilia Project','aprilia.png','1'),
	('','Ducati Project','ducati.png','1'),
	('','Honda Project','honda.png','1'),
	('','Kawasaki Project','kawasaki.png','1'),
	('','KTM Project','ktm.png','1'),
	('','Suzuki Project','suzuki.png','1'),
	('','Yamaha Project','yamaha.png','1');
	
INSERT INTO data_gallery_group VALUES
	('','1','RS 125','aprilia-rs125.png','1'),
	('','2','1100 Evo','ducati-1100-evo.png','1'),
	('','2','Diavel Carbon','ducati-diavel-carbon.png','1'),
	('','2','Monster','ducati-monster.png','1'),
	('','2','Panigale 1199S','ducati-panigale-1199s.png','1'),
	('','2','SBK 848','ducati-sbk-848.png','1'),
	('','2','SF 848','ducati-sf-848.png','1'),
	('','2','SF 1098','ducati-sf-1098.png','1'),
	('','3','CB 600','honda-cb-600.png','1'),
	('','3','CB 1000','honda-cb-1000.png','1'),
	('','3','CBR 150R','honda-cbr-150r.png','1'),
	('','3','CBR 250R','honda-cbr-250r.png','1'),
	('','3','CBR 600R','honda-cbr-600r.png','1'),
	('','3','CBR 1000RR','honda-cbr-1000rr.png','1'),
	('','4','D-Tracker 250','kawasaki-d-tracker-250.png','1'),
	('','4','ER6-N','kawasaki-er6-n.png','1'),
	('','4','KLX 150','kawasaki-klx-150.png','1'),
	('','4','Ninja 250Fi','kawasaki-ninja-250fi.png','1'),
	('','4','Ninja 250R','kawasaki-ninja-250r.png','1'),
	('','4','Ninja 650','kawasaki-ninja-650.png','1'),
	('','4','Z1000','kawasaki-z1000.png','1'),
	('','4','ZX6R','kawasaki-zx6r.png','1'),
	('','5','DUKE 200','ktm-duke-200.png','1'),
	('','6','GSXR 600','suzuki-gsxr-600.png','1'),
	('','7','YZF-R6','yamaha-yzf-r6.png','1');