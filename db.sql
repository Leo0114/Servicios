CREATE TABLE usuarios (
  us_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  us_usuario VARCHAR(50),
  us_contraseña VARCHAR(50),
  us_nombre VARCHAR(50),
  us_status TINYINT,
  us_fechacreación DATETIME,
  us_fechamodif DATETIME
);

INSERT INTO usuarios(us_usuario,us_contraseña,us_nombre) VALUES("Leo1", "123456", "Leonel Elizarraraz");


/* modificar las tablas de fecha
 */ALTER TABLE usuarios
 MODIFY us_fechacreación datetime DEFAULT CURRENT_TIMESTAMP;
 ALTER TABLE usuarios
 MODIFY us_fechamodif datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


 /*Modificar datos de las tablas*/
 ALTER Table usuarios MODIFY COLUMN us_status VARCHAR(10)
 