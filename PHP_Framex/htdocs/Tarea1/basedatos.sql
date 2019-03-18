Create Table "user" (
	"id" INTEGER PRIMARY KEY AUTOINCREMENT, 
	"name" TEXT,
	"apellidos" TEXT,
	"email" TEXT,
	"telefono" TEXT,
	"age" INTEGER	
)

CREATE TABLE "log" (
	"log_id" INTEGER PRIMARY KEY AUTOINCREMENT,
	"fecha" DATE,
	"hora" TIME,
	"sistole" INTEGER,
	"diastole" INTEGER,
	"pulso" INTEGER,
	"usuario_id" INTEGER,
    FOREIGN KEY (usuario_id) REFERENCES user ("id")
)

ALTER TABLE "user"
  ADD age INTEGER;

--Adding data
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Jose","Monge Alvarez","jose.alvarez@user.com",83234581,35);
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Manuel","Castro Rodriguez","manuel.castro@user.com",73233571,55);
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Claudia","Torres Mora","claudia.torres@user.com",83233551,38);
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Maria","Perez Castillo","maria.perez@user.com",63233586,65);
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Monica","Gonzalez Mora","monica.gonzalez@user.com",73234531,48);
INSERT INTO "user" ("name","apellidos","email","telefono","age") 
	VALUES ("Juan","Chavez Carrillo","juan.chavez@user.com",84331583,25);	

