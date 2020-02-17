/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/02/2020 11:30:31                          */
/*==============================================================*/


drop table if exists TBL_ROLE;

drop table if exists TBL_STATUS;

drop table if exists TBL_SURAT_KELUAR;

drop table if exists TBL_SURAT_MASUK;

drop table if exists TBL_USER;

/*==============================================================*/
/* Table: TBL_ROLE                                              */
/*==============================================================*/
create table TBL_ROLE
(
   ID_ROLE              int not null,
   ROLE                 varchar(1024),
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table: TBL_STATUS                                            */
/*==============================================================*/
create table TBL_STATUS
(
   ID_STATUS            int not null,
   STATUS               varchar(1024),
   primary key (ID_STATUS)
);

/*==============================================================*/
/* Table: TBL_SURAT_KELUAR                                      */
/*==============================================================*/
create table TBL_SURAT_KELUAR
(
   NO_URUT_SURAT_KELUAR int not null,
   ID_STATUS            int not null,
   ID_USER_             int,
   LAMPIRAN_SURAT_KELUAR varchar(1024),
   ALAMAT_TUJUAN        varchar(1024),
   TANGGAL_SURAT_KELUAR date,
   NOMOR_SURAT_KELUAR   varchar(1024),
   PERIHAL_SURAT_KELUAR varchar(1024),
   DISPOSISI_SURAT_KELUAR varchar(1024),
   primary key (NO_URUT_SURAT_KELUAR)
);

/*==============================================================*/
/* Table: TBL_SURAT_MASUK                                       */
/*==============================================================*/
create table TBL_SURAT_MASUK
(
   NO_URUT_SURAT_MASUK  int not null,
   ID_USER_             int,
   ID_STATUS            int not null,
   LAMPIRAN_SURAT_MASUK varchar(1024),
   ALAMAT_PENGIRIM      varchar(1024),
   TANGGAL              date,
   NOMOR_SURAT_MASUK    varchar(1024),
   PERIHAL_SURAT_MASUK  varchar(1024),
   DISPOSISI_SURAT_MASUK varchar(1024),
   primary key (NO_URUT_SURAT_MASUK)
);

/*==============================================================*/
/* Table: TBL_USER                                              */
/*==============================================================*/
create table TBL_USER
(
   NIP                  int,
   NAMA                 varchar(1024),
   PASSWORD             varchar(1024),
   JABATAN              varchar(1024),
   ID_USER_             int not null,
   ID_ROLE              int not null,
   primary key (ID_USER_)
);

alter table TBL_SURAT_KELUAR add constraint FK_MEMPUNYAI foreign key (ID_USER_)
      references TBL_USER (ID_USER_) on delete restrict on update cascade;

alter table TBL_SURAT_KELUAR add constraint FK_STATUS_SURAT_KELUAR foreign key (ID_STATUS)
      references TBL_STATUS (ID_STATUS) on delete restrict on update cascade;

alter table TBL_SURAT_MASUK add constraint FK_MEMILIKI foreign key (ID_USER_)
      references TBL_USER (ID_USER_) on delete restrict on update cascade;

alter table TBL_SURAT_MASUK add constraint FK_STATUS_SURAT_MASUK foreign key (ID_STATUS)
      references TBL_STATUS (ID_STATUS) on delete restrict on update cascade;

alter table TBL_USER add constraint FK_MEMERANI foreign key (ID_ROLE)
      references TBL_ROLE (ID_ROLE) on delete restrict on update cascade;

