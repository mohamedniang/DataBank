/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  15/03/2019 10:54:54                      */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_DOCUMENT_AVOIR_ECOLE') then
    alter table DOCUMENTATION
       delete foreign key FK_DOCUMENT_AVOIR_ECOLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_IMAGES_ETRE_DOCUMENT') then
    alter table IMAGES
       delete foreign key FK_IMAGES_ETRE_DOCUMENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PDF_CONCERNER_DOCUMENT') then
    alter table PDF
       delete foreign key FK_PDF_CONCERNER_DOCUMENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_RECHERCH_PORTER_SU_DOCUMENT') then
    alter table RECHERCHE
       delete foreign key FK_RECHERCH_PORTER_SU_DOCUMENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_SOURCES_ECRIRE_DOCUMENT') then
    alter table SOURCES
       delete foreign key FK_SOURCES_ECRIRE_DOCUMENT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_UTILISAT_APPARTENI_ECOLE') then
    alter table UTILISATERU
       delete foreign key FK_UTILISAT_APPARTENI_ECOLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VIDEOS_CONTENIR_DOCUMENT') then
    alter table VIDEOS
       delete foreign key FK_VIDEOS_CONTENIR_DOCUMENT
end if;

if exists(
   select 1 from sys.systable 
   where table_name='DOCUMENTATION'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table DOCUMENTATION
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ECOLE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ECOLE
end if;

if exists(
   select 1 from sys.systable 
   where table_name='IMAGES'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table IMAGES
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PDF'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PDF
end if;

if exists(
   select 1 from sys.systable 
   where table_name='RECHERCHE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table RECHERCHE
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SOURCES'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SOURCES
end if;

if exists(
   select 1 from sys.systable 
   where table_name='UTILISATERU'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table UTILISATERU
end if;

if exists(
   select 1 from sys.systable 
   where table_name='VIDEOS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table VIDEOS
end if;

/*==============================================================*/
/* Table : DOCUMENTATION                                        */
/*==============================================================*/
create table DOCUMENTATION 
(
   CODEDOC              integer                        not null,
   IDENTIFIANT          integer                        not null,
   TITRE                long varchar                   null,
   "DATE"               timestamp                      null,
   constraint PK_DOCUMENTATION primary key (CODEDOC)
);

comment on table DOCUMENTATION is 
'Données de sauvegarde pour une consultation éventuelle';

/*==============================================================*/
/* Table : ECOLE                                                */
/*==============================================================*/
create table ECOLE 
(
   LIBELLE              long varchar                   null,
   IDENTIFIANT          integer                        not null,
   ANNEE                date                           null,
   constraint PK_ECOLE primary key (IDENTIFIANT)
);

comment on table ECOLE is 
'l''établissement';

/*==============================================================*/
/* Table : IMAGES                                               */
/*==============================================================*/
create table IMAGES 
(
   CODEIMG              integer                        not null,
   CODEDOC              integer                        not null,
   CONTENUIMG           char(10)                       null,
   constraint PK_IMAGES primary key (CODEIMG)
);

/*==============================================================*/
/* Table : PDF                                                  */
/*==============================================================*/
create table PDF 
(
   CODEPDF              integer                        not null,
   CODEDOC              integer                        not null,
   CONTENUPDF           long binary                    null,
   constraint PK_PDF primary key (CODEPDF)
);

/*==============================================================*/
/* Table : RECHERCHE                                            */
/*==============================================================*/
create table RECHERCHE 
(
   CODERHC              integer                        not null,
   CODEDOC              integer                        not null,
   MOTCLE               long varchar                   null,
   CONTENURHC           char(10)                       null,
   constraint PK_RECHERCHE primary key (CODERHC)
);

/*==============================================================*/
/* Table : SOURCES                                              */
/*==============================================================*/
create table SOURCES 
(
   CODESRC              integer                        not null,
   CODEDOC              integer                        not null,
   AUTEUR               long varchar                   null,
   NIVEAU               long varchar                   null,
   constraint PK_SOURCES primary key (CODESRC)
);

comment on table SOURCES is 
'la source du document publié';

/*==============================================================*/
/* Table : UTILISATERU                                          */
/*==============================================================*/
create table UTILISATERU 
(
   CODEU                integer                        not null,
   IDENTIFIANT          integer                        not null,
   PSEUDO               long varchar                   null,
   EMAIL                long varchar                   null,
   MOTDEPASSE           long varchar                   null,
   STATUS               smallint                       null,
   constraint PK_UTILISATERU primary key (CODEU)
);

/*==============================================================*/
/* Table : VIDEOS                                               */
/*==============================================================*/
create table VIDEOS 
(
   CODEVIDEO            integer                        not null,
   CODEDOC              integer                        not null,
   CONTENUVIDEO         varchar                        null,
   constraint PK_VIDEOS primary key (CODEVIDEO)
);

alter table DOCUMENTATION
   add constraint FK_DOCUMENT_AVOIR_ECOLE foreign key (IDENTIFIANT)
      references ECOLE (IDENTIFIANT)
      on update restrict
      on delete restrict;

alter table IMAGES
   add constraint FK_IMAGES_ETRE_DOCUMENT foreign key (CODEDOC)
      references DOCUMENTATION (CODEDOC)
      on update restrict
      on delete restrict;

alter table PDF
   add constraint FK_PDF_CONCERNER_DOCUMENT foreign key (CODEDOC)
      references DOCUMENTATION (CODEDOC)
      on update restrict
      on delete restrict;

alter table RECHERCHE
   add constraint FK_RECHERCH_PORTER_SU_DOCUMENT foreign key (CODEDOC)
      references DOCUMENTATION (CODEDOC)
      on update restrict
      on delete restrict;

alter table SOURCES
   add constraint FK_SOURCES_ECRIRE_DOCUMENT foreign key (CODEDOC)
      references DOCUMENTATION (CODEDOC)
      on update restrict
      on delete restrict;

alter table UTILISATERU
   add constraint FK_UTILISAT_APPARTENI_ECOLE foreign key (IDENTIFIANT)
      references ECOLE (IDENTIFIANT)
      on update restrict
      on delete restrict;

alter table VIDEOS
   add constraint FK_VIDEOS_CONTENIR_DOCUMENT foreign key (CODEDOC)
      references DOCUMENTATION (CODEDOC)
      on update restrict
      on delete restrict;

