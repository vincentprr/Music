/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 80030
Source Host           : localhost:3306
Source Database       : ecole

Target Server Type    : MYSQL
Target Server Version : 80030
File Encoding         : 65001

Date: 2023-04-02 11:27:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for album
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `releaseYear` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39986E43F675F31B` (`author_id`),
  CONSTRAINT `FK_39986E43F675F31B` FOREIGN KEY (`author_id`) REFERENCES `artist` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67916 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('10575', '2', '220px-Folklore_hp.jpg', '2002', 'Folklore');
INSERT INTO `album` VALUES ('10637', '8', '220px-RyanAdamsHeartbreaker.jpg', '2000', 'Heartbreaker');
INSERT INTO `album` VALUES ('10644', '8', '220px-Ryanadamsselftitled.jpg', '2014', 'Ryan Adams');
INSERT INTO `album` VALUES ('10660', '9', '220px-WhiskeytownPneumonia.jpg', '2001', 'Pneumonia');
INSERT INTO `album` VALUES ('10668', '3', 'The_Fine_Art_of_Self_Destruction.jpg', '2002', 'The Fine Art of Self Destruction');
INSERT INTO `album` VALUES ('10669', '4', null, '2003', 'We Are Fuck You');
INSERT INTO `album` VALUES ('10675', '8', '220px-Love_Is_Hell.jpg', '2004', 'Love Is Hell');
INSERT INTO `album` VALUES ('10679', '5', '220px-DarkChords.jpg', '2003', 'Dark Chords on a Big Guitar');
INSERT INTO `album` VALUES ('10697', '6', '220px-Songbird_Willie_Nelson.jpg', '2006', 'Songbird');
INSERT INTO `album` VALUES ('10707', '7', '220px-Trinityrevisited.jpg', '2007', 'Trinity Revisited');
INSERT INTO `album` VALUES ('10714', '8', '220px-Ryan-adams-orion.jpg', '2010', 'Orion');
INSERT INTO `album` VALUES ('10770', '9', null, '0', 'Forever Valentine');
INSERT INTO `album` VALUES ('10809', '10', 'Alabama.jpg', '2015', 'Sound & Color');
INSERT INTO `album` VALUES ('10890', '11', 'Terry_Allen.jpg', '1979', 'Lubbock');
INSERT INTO `album` VALUES ('10893', '11', 'TerryAllen_Juarez.jpg', '1975', 'Juarez');
INSERT INTO `album` VALUES ('10895', '11', 'Terry_Allen_Pedal_Steal.jpg', '1985', 'Pedal Steal');
INSERT INTO `album` VALUES ('10899', '11', 'Terry_Allen_Human_Remains.jpg', '1996', 'Human Remains');
INSERT INTO `album` VALUES ('10913', '12', 'XSeeHowWeAre.jpg', '1987', 'See How We Are');
INSERT INTO `album` VALUES ('10919', '13', null, '2011', 'Eleven Eleven');
INSERT INTO `album` VALUES ('67913', '1', 'Superdrag-Stereo_360_Sound.jpg', '1998', 'Stereo 360 Sound');

-- ----------------------------
-- Table structure for album_genre
-- ----------------------------
DROP TABLE IF EXISTS `album_genre`;
CREATE TABLE `album_genre` (
  `album_id` int NOT NULL,
  `genre_id` int NOT NULL,
  PRIMARY KEY (`album_id`,`genre_id`),
  KEY `IDX_F5E879DE1137ABCF` (`album_id`),
  KEY `IDX_F5E879DE4296D31F` (`genre_id`),
  CONSTRAINT `FK_F5E879DE1137ABCF` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F5E879DE4296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of album_genre
-- ----------------------------
INSERT INTO `album_genre` VALUES ('10575', '2');
INSERT INTO `album_genre` VALUES ('10575', '8');
INSERT INTO `album_genre` VALUES ('10637', '8');
INSERT INTO `album_genre` VALUES ('10637', '15');
INSERT INTO `album_genre` VALUES ('10644', '3');
INSERT INTO `album_genre` VALUES ('10644', '4');
INSERT INTO `album_genre` VALUES ('10644', '8');
INSERT INTO `album_genre` VALUES ('10660', '8');
INSERT INTO `album_genre` VALUES ('10675', '8');
INSERT INTO `album_genre` VALUES ('10679', '18');
INSERT INTO `album_genre` VALUES ('10697', '8');
INSERT INTO `album_genre` VALUES ('10707', '5');
INSERT INTO `album_genre` VALUES ('10707', '8');
INSERT INTO `album_genre` VALUES ('10714', '6');
INSERT INTO `album_genre` VALUES ('10714', '7');
INSERT INTO `album_genre` VALUES ('10770', '8');
INSERT INTO `album_genre` VALUES ('10809', '9');
INSERT INTO `album_genre` VALUES ('10809', '10');
INSERT INTO `album_genre` VALUES ('10809', '11');
INSERT INTO `album_genre` VALUES ('10809', '12');
INSERT INTO `album_genre` VALUES ('10809', '13');
INSERT INTO `album_genre` VALUES ('10809', '14');
INSERT INTO `album_genre` VALUES ('10890', '15');
INSERT INTO `album_genre` VALUES ('10893', '15');
INSERT INTO `album_genre` VALUES ('10895', '15');
INSERT INTO `album_genre` VALUES ('10899', '15');
INSERT INTO `album_genre` VALUES ('10913', '8');
INSERT INTO `album_genre` VALUES ('10913', '16');
INSERT INTO `album_genre` VALUES ('10919', '5');
INSERT INTO `album_genre` VALUES ('10919', '17');
INSERT INTO `album_genre` VALUES ('67913', '1');
INSERT INTO `album_genre` VALUES ('67913', '3');

-- ----------------------------
-- Table structure for artist
-- ----------------------------
DROP TABLE IF EXISTS `artist`;
CREATE TABLE `artist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of artist
-- ----------------------------
INSERT INTO `artist` VALUES ('1', 'Superdrag');
INSERT INTO `artist` VALUES ('2', '16 Horsepower');
INSERT INTO `artist` VALUES ('3', 'Jesse Malin');
INSERT INTO `artist` VALUES ('4', 'The Finger');
INSERT INTO `artist` VALUES ('5', 'Joan Baez');
INSERT INTO `artist` VALUES ('6', 'Willie Nelson');
INSERT INTO `artist` VALUES ('7', 'Cowboy Junkies');
INSERT INTO `artist` VALUES ('8', 'Ryan Adams');
INSERT INTO `artist` VALUES ('9', 'Whiskeytown');
INSERT INTO `artist` VALUES ('10', 'Alabama Shakes');
INSERT INTO `artist` VALUES ('11', 'Terry Allen');
INSERT INTO `artist` VALUES ('12', 'X');
INSERT INTO `artist` VALUES ('13', 'Dave Alvin');

-- ----------------------------
-- Table structure for genre
-- ----------------------------
DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of genre
-- ----------------------------
INSERT INTO `genre` VALUES ('1', 'Punk');
INSERT INTO `genre` VALUES ('2', 'Neofolk');
INSERT INTO `genre` VALUES ('3', 'Rock');
INSERT INTO `genre` VALUES ('4', 'Pop Rock');
INSERT INTO `genre` VALUES ('5', 'Country Rock');
INSERT INTO `genre` VALUES ('6', 'Heavy Metal');
INSERT INTO `genre` VALUES ('7', 'Hard Rock');
INSERT INTO `genre` VALUES ('8', 'Alternative Country');
INSERT INTO `genre` VALUES ('9', 'Blues Rock');
INSERT INTO `genre` VALUES ('10', 'Roots Rock');
INSERT INTO `genre` VALUES ('11', 'Soul');
INSERT INTO `genre` VALUES ('12', 'Southern Rock');
INSERT INTO `genre` VALUES ('13', 'Garage Rock');
INSERT INTO `genre` VALUES ('14', 'Americana');
INSERT INTO `genre` VALUES ('15', 'Country');
INSERT INTO `genre` VALUES ('16', 'Alternative Rock');
INSERT INTO `genre` VALUES ('17', 'Folk Rock');
INSERT INTO `genre` VALUES ('18', 'Folk');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'test@test.fr', '[]');

-- ----------------------------
-- Table structure for user_album
-- ----------------------------
DROP TABLE IF EXISTS `user_album`;
CREATE TABLE `user_album` (
  `user_id` int NOT NULL,
  `album_id` int NOT NULL,
  PRIMARY KEY (`user_id`,`album_id`),
  KEY `IDX_DB5A951BA76ED395` (`user_id`),
  KEY `IDX_DB5A951B1137ABCF` (`album_id`),
  CONSTRAINT `FK_DB5A951B1137ABCF` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_DB5A951BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_album
-- ----------------------------
INSERT INTO `user_album` VALUES ('1', '10575');
INSERT INTO `user_album` VALUES ('1', '10675');
