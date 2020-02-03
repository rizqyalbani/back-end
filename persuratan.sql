/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     02/02/2020 18:44:25                          */
/*==============================================================*/


drop table if exists _TBLSTATUS;

drop table if exists _TBLSURAT_KELUAR;

drop table if exists _TBLSURAT_MASUK;

drop table if exists _TBLUSER;

/*==============================================================*/
/* Table: _TBLSTATUS                                            */
/*==============================================================*/
create table _TBLSTATUS
(
   ID_STATUS            int not null,
   STATUS               varchar(1024),
   primary key (ID_STATUS)
);

/*==============================================================*/
/* Table: _TBLSURAT_KELUAR                                      */
/*==============================================================*/
create table _TBLSURAT_KELUAR
(
   NO_URUT_SURAT_KELUAR int not null,
   ID_STATUS            int,
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
/* Table: _TBLSURAT_MASUK                                       */
/*==============================================================*/
create table _TBLSURAT_MASUK
(
   NO_URUT_SURAT_MASUK  int not null,
   ID_USER_             int,
   ID_STATUS            int,
   LAMPIRAN_SURAT_MASUK varchar(1024),
   ALAMAT_PENGIRIM      varchar(1024),
   TANGGAL              date,
   NOMOR_SURAT_MASUK    varchar(1024),
   PERIHAL_SURAT_MASUK  varchar(1024),
   DISPOSISI_SURAT_MASUK varchar(1024),
   primary key (NO_URUT_SURAT_MASUK)
);

/*==============================================================*/
/* Table: _TBLUSER                                              */
/*==============================================================*/
create table _TBLUSER
(
   NIP                  int,
   NAMA                 varchar(1024),
   PASSWORD             varchar(1024),
   JABATAN              varchar(1024),
   ID_USER_             int not null,
   primary key (ID_USER_)
);

alter table _TBLSURAT_KELUAR add constraint FK_MEMPUNYAI foreign key (ID_USER_)
      references _TBLUSER (ID_USER_) on delete restrict on update cascade;

alter table _TBLSURAT_KELUAR add constraint FK_STATUS_SURAT_KELUAR foreign key (ID_STATUS)
      references _TBLSTATUS (ID_STATUS) on delete restrict on update cascade;

alter table _TBLSURAT_MASUK add constraint FK_MEMILIKI foreign key (ID_USER_)
      references _TBLUSER (ID_USER_) on delete restrict on update cascade;

alter table _TBLSURAT_MASUK add constraint FK_STATUS_SURAT_MASUK foreign key (ID_STATUS)
      references _TBLSTATUS (ID_STATUS) on delete restrict on update cascade;

