/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     18/04/2023 7:35:26 p. m.                     */
/*==============================================================*/


drop table if exists LOTE;

drop table if exists PRODUCTO;

drop table if exists PROVEEDOR;

/*==============================================================*/
/* Table: LOTE                                                  */
/*==============================================================*/
create table LOTE
(
   LT_CODIGO            int not null,
   PRD_CODIGO           int not null,
   LT_FECHA_FABRICACION date not null,
   LT_FECHA_VENCIMIENTO date,
   primary key (LT_CODIGO)
);

/*==============================================================*/
/* Table: PRODUCTO                                              */
/*==============================================================*/
create table PRODUCTO
(
   PRD_CODIGO           int not null,
   PROV_CODE            int not null,
   PRD_NOMBRE           varchar(255) not null,
   PRD_UNIDAD           numeric(8,0) not null,
   PRD_CANTIDAD         int not null,
   PRD_PRECIO           numeric(8,0) not null,
   PRD_PRECIO_UNITARIO  numeric(8,0),
   PRD_COSTO            numeric(8,0) not null,
   PRD_IVA              bool not null,
   primary key (PRD_CODIGO)
);

/*==============================================================*/
/* Table: PROVEEDOR                                             */
/*==============================================================*/
create table PROVEEDOR
(
   PROV_CODE            int not null,
   PROV_NOMBRE          varchar(255) not null,
   PROV_DIRECCION       varchar(255) not null,
   PROV_TELEFONO        text not null,
   primary key (PROV_CODE)
);

alter table LOTE add constraint FK_TIENE foreign key (PRD_CODIGO)
      references PRODUCTO (PRD_CODIGO) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_PROVEE foreign key (PROV_CODE)
      references PROVEEDOR (PROV_CODE) on delete restrict on update restrict;

