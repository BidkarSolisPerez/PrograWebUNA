Create Table "paciente" (
	"id" INTEGER PRIMARY KEY, 
	"name" TEXT,
	"apellidos" TEXT,
	"email" TEXT,
	"telefono" TEXT,
	"edad" INTEGER
);

CREATE TABLE "valor_presion" (
	"id" INTEGER PRIMARY KEY,
	"sistole" INTEGER,
	"diastole" INTEGER,
	"pulso" INTEGER
);

CREATE TABLE "log_presion" (
	"log_id" INTEGER PRIMARY KEY,
	"fecha" DATE,
	"hora" TIME,
	"id_usuario" INTEGER,
	"id_presion" INTEGER,
  FOREIGN KEY (id_usuario) REFERENCES paciente ("id"),
	FOREIGN KEY (id_presion) REFERENCES valor_presion ("id")
);




ALTER TABLE "user"
  ADD edad INTEGER;

--Adding data
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Jose","Monge Alvarez","jose.alvarez@user.com",83234581,35);
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Manuel","Castro Rodriguez","manuel.castro@user.com",73233571,55);
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Claudia","Torres Mora","claudia.torres@user.com",83233551,38);
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Maria","Perez Castillo","maria.perez@user.com",63233586,65);
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Monica","Gonzalez Mora","monica.gonzalez@user.com",73234531,48);
INSERT INTO "paciente" ("name","apellidos","email","telefono","edad") 
	VALUES ("Juan","Chavez Carrillo","juan.chavez@paciente.com",84331583,25);	

