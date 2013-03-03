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