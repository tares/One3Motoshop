SELECT * 
FROM data_motor_brand
WHERE activeStatus = '1';

SELECT * 
FROM data_motor_type
WHERE ID_motoBrand = '2' AND activeStatus = '1';