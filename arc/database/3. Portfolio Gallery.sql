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
	
CREATE TABLE data_gallery_picTable(
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
	('','Aprilia Project','aprilia','1'),
	('','Ducati Project','ducati','1'),
	('','Honda Project','honda','1'),
	('','Kawasaki Project','kawasaki','1'),
	('','KTM Project','ktm','1'),
	('','Suzuki Project','suzuki','1'),
	('','Yamaha Project','yamaha','1');
	
INSERT INTO data_gallery_motoType VALUES
	('','1','RS 125','aprilia-rs125','1'),
	('','2','1100 Evo','ducati-1100-evo','1'),
	('','2','Diavel Carbon','ducati-diavel-carbon','1'),
	('','2','Monster','ducati-monster','1'),
	('','2','Panigale 1199S','ducati-panigale-1199s','1'),
	('','2','SBK 848','ducati-sbk-848','1'),
	('','2','SF 848','ducati-sf-848','1'),
	('','2','SF 1098','ducati-sf-1098','1'),
	('','3','CB 600','honda-cb-600','1'),
	('','3','CB 1000','honda-cb-1000','1'),
	('','3','CBR 150R','honda-cbr-150r','1'),
	('','3','CBR 250R','honda-cbr-250r','1'),
	('','3','CBR 600R','honda-cbr-600rr','1'),
	('','3','CBR 1000RR','honda-cbr-1000rr','1'),
	('','4','D-Tracker 250','kawasaki-d-tracker-250','1'),
	('','4','ER6-N','kawasaki-er6-n','1'),
	('','4','KLX 150','kawasaki-klx-150','1'),
	('','4','Ninja 250Fi','kawasaki-ninja-250fi','1'),
	('','4','Ninja 250R','kawasaki-ninja-250r','1'),
	('','4','Ninja 650','kawasaki-ninja-650','1'),
	('','4','Z1000','kawasaki-z1000','1'),
	('','4','ZX6R','kawasaki-zx6r','1'),
	('','5','DUKE 200','ktm-duke-200','1'),
	('','6','GSXR 600','suzuki-gsxr-600','1'),
	('','7','YZF-R6','yamaha-yzf-r6','1');
	
INSERT INTO data_gallery_picTable VALUES
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_1','Aprilia_RS125_1','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_2','Aprilia_RS125_2','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_3','Aprilia_RS125_3','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_4','Aprilia_RS125_4','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_5','Aprilia_RS125_5','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_6','Aprilia_RS125_6','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_7','Aprilia_RS125_7','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_8','Aprilia_RS125_8','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_9','Aprilia_RS125_9','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_10','Aprilia_RS125_10','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_11','Aprilia_RS125_11','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_12','Aprilia_RS125_12','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_13','Aprilia_RS125_13','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_14','Aprilia_RS125_14','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_15','Aprilia_RS125_15','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_16','Aprilia_RS125_16','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_17','Aprilia_RS125_17','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_18','Aprilia_RS125_18','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_19','Aprilia_RS125_19','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_20','Aprilia_RS125_20','1'),
	('','1','2012-03-14','Aprilia RS 125 Project','Aprilia_RS125_21','Aprilia_RS125_21','1'),
	
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),
	('','','2012-03-14','','','',''),