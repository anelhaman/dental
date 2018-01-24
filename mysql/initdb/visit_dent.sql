/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50637
Source Host           : localhost:3306
Source Database       : Chalalalala

Target Server Type    : MYSQL
Target Server Version : 50637
File Encoding         : 65001

Date: 2018-01-05 18:07:13
*/

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for visit_dent
-- ----------------------------
DROP TABLE IF EXISTS  visit_dent ;
CREATE TABLE  visit_dent  (
   id  int(10) NOT NULL,
   DENTTYPE  varchar(255) DEFAULT NULL,
   SERVPLACE  varchar(255) DEFAULT NULL,
   PTEETH  varchar(255) DEFAULT NULL,
   PCARIES  varchar(255) DEFAULT NULL,
   PFILLING  varchar(255) DEFAULT NULL,
   PEXTRACT  varchar(255) DEFAULT NULL,
   DTEETH  varchar(255) DEFAULT NULL,
   DCARIES  varchar(255) DEFAULT NULL,
   DFILLING  varchar(255) DEFAULT NULL,
   DEXTRACT  varchar(255) DEFAULT NULL,
   NEED_FLUORIDE  varchar(255) DEFAULT NULL,
   NEED_SCALING  varchar(255) DEFAULT NULL,
   NEED_SEALANT  varchar(255) DEFAULT NULL,
   NEED_PFILLING  varchar(255) DEFAULT NULL,
   NEED_DFILLING  varchar(255) DEFAULT NULL,
   NEED_PEXTRACT  varchar(255) DEFAULT NULL,
   NEED_DEXTRACT  varchar(255) DEFAULT NULL,
   NPROSTHESIS  varchar(255) DEFAULT NULL,
   PERMANENT_PERMANENT  varchar(255) DEFAULT NULL,
   PERMANENT_PROSTHESIS  varchar(255) DEFAULT NULL,
   PROSTHESIS_PROSTHESIS  varchar(255) DEFAULT NULL,
   GUM1  varchar(255) DEFAULT NULL,
   GUM2  varchar(255) DEFAULT NULL,
   GUM3  varchar(255) DEFAULT NULL,
   GUM4  varchar(255) DEFAULT NULL,
   GUM5  varchar(255) DEFAULT NULL,
   GUM6  varchar(255) DEFAULT NULL,
   SCHOOLTYPE  varchar(255) DEFAULT NULL,
   CLASS  varchar(255) DEFAULT NULL,
   PROVIDER  varchar(255) DEFAULT NULL,
   D_UPDATE  datetime DEFAULT NULL,
  PRIMARY KEY ( id )
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of visit_dent
-- ----------------------------
INSERT INTO  visit_dent  VALUES ('1539361', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
