SELECT * 
FROM data_motor_brand
WHERE activeStatus = '1';

SELECT * 
FROM data_motor_type
WHERE ID_motoBrand = '2' AND activeStatus = '1';

SELECT c.ID_motoTypeGroup, addedDate, captions, urlThumb, urlPic, c.flag, name_galleryGroup, name_motoTypeGroup
FROM data_gallery_picTable a, data_gallery_group b, data_gallery_motoType c
WHERE a.ID_motoTypeGroup = c.ID_motoTypeGroup AND b.ID_galleryGroup = c.ID_galleryGroup AND c.ID_motoTypeGroup = '1' AND c.flag = '1';

SELECT DISTINCT name_galleryGroup, name_motoTypeGroup
FROM data_gallery_picTable a, data_gallery_group b, data_gallery_motoType c
WHERE a.ID_motoTypeGroup = c.ID_motoTypeGroup AND b.ID_galleryGroup = c.ID_galleryGroup AND c.ID_motoTypeGroup = '1' AND c.flag = '1';