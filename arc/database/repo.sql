CREATE TABLE data_product_category(
	ID_productCategory,
	name_productCategory,
	activeStatus
	)ENGINE=InnoDB;

CREATE TABLE data_product_brand(
	ID_productBrand,
	name_productBrand,
	activeStatus
	)ENGINE=InnoDB;

CREATE TABLE data_product_info(
	ID_product,
	ID_productBrand,
	ID_productCategory,
	name_product,
	desc_product,
	price_product,
	qty_product,
	available_product,
	activeStatus
	)ENGINE=InnoDB;
	
CREATE TABLE data_product_motorType(
	ID_product,
	ID_motoType,
	activeStatus
	)ENGINE=InnoDB;