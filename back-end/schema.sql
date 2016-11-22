CREATE TABLE "categorias" (
	"id" serial NOT NULL,
	"categoria" varchar(50) NOT NULL,
	CONSTRAINT categorias_pk PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "lugares" (
	"id" serial NOT NULL,
	"lugar" varchar(50) NOT NULL,
	CONSTRAINT lugares_pk PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "problemas" (
	"id" serial NOT NULL,
	"id_categoria" integer NOT NULL,
	"id_lugar" integer NOT NULL,
	"id_usuario" integer NOT NULL,
	"descricao" varchar(300) NOT NULL,
	"foto" bytea NOT NULL,
	"data_submissao" DATE NOT NULL,
	"status" integer NOT NULL,
	CONSTRAINT problemas_pk PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "usuarios" (
	"id" serial NOT NULL,
	"matricula" integer,
	"siape" integer,
	"usuario" varchar(50) NOT NULL,
	"senha" integer NOT NULL,
	CONSTRAINT usuarios_pk PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "comentarios" (
	"id" serial NOT NULL,
	"id_problema" integer NOT NULL,
	"comentario" varchar(300) NOT NULL,
	"id_usuario" integer NOT NULL,
	"data" serial NOT NULL,
	CONSTRAINT comentarios_pk PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);





ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk0" FOREIGN KEY ("id_categoria") REFERENCES "categorias"("id");
ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk1" FOREIGN KEY ("id_lugar") REFERENCES "lugares"("id");
ALTER TABLE "problemas" ADD CONSTRAINT "problemas_fk2" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id");


ALTER TABLE "comentarios" ADD CONSTRAINT "comentarios_fk0" FOREIGN KEY ("id_problema") REFERENCES "problemas"("id");
ALTER TABLE "comentarios" ADD CONSTRAINT "comentarios_fk1" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id");

