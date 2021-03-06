CREATE TABLE "categorias" (
	"id" SERIAL NOT NULL,
	"categoria" VARCHAR(50) NOT NULL,
	CONSTRAINT categorias_pk PRIMARY KEY ("id")

);

CREATE TABLE "lugares" (
	"id" SERIAL NOT NULL,
	"lugar" VARCHAR(50) NOT NULL,
	CONSTRAINT lugares_pk PRIMARY KEY ("id")
);

CREATE TABLE "problemas" (
	"id" SERIAL NOT NULL,
	"id_categoria" INTEGER NOT NULL,
	"id_lugar" INTEGER NOT NULL,
	"id_usuario" INTEGER NOT NULL,
	"descricao" VARCHAR(300) NOT NULL,
	"foto" BYTEA NOT NULL,
	"data_submissao" DATE NOT NULL,
	"status" INTEGER NOT NULL,
	CONSTRAINT problemas_pk PRIMARY KEY ("id")
);

CREATE TABLE "usuarios" (
	"id" SERIAL NOT NULL,
	"matricula" INTEGER,
	"siape" INTEGER,
	"usuario" VARCHAR(50) NOT NULL,
	"senha" INTEGER NOT NULL,
	CONSTRAINT usuarios_pk PRIMARY KEY ("id")
);


CREATE TABLE "comentarios" (
	"id" SERIAL NOT NULL,
	"id_problema" INTEGER NOT NULL,
	"comentario" VARCHAR(300) NOT NULL,
	"id_usuario" INTEGER NOT NULL,
	"data" SERIAL NOT NULL,
	CONSTRAINT comentarios_pk PRIMARY KEY ("id")
);

ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk0" FOREIGN KEY ("id_categoria") REFERENCES "categorias"("id");
ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk1" FOREIGN KEY ("id_lugar") REFERENCES "lugares"("id");
ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk2" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id");


ALTER TABLE "comentarios" ADD CONSTRAINT "comentarios_fk0" FOREIGN KEY ("id_problema") REFERENCES "problemas"("id");
ALTER TABLE "comentarios" ADD CONSTRAINT "comentarios_fk1" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id");

