/*
 Navicat MySQL Data Transfer

 Source Server         : localhost-mysql5
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : stu

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 08/06/2021 13:26:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `id` int(8) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (12345678, 'admin', '12345678');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `class_id` int(8) NOT NULL,
  `class_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `course_id` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`class_id`) USING BTREE,
  INDEX `course_id`(`course_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, '一班', 4);
INSERT INTO `class` VALUES (2, '二班', 4);
INSERT INTO `class` VALUES (5, '五班', 6);
INSERT INTO `class` VALUES (3, '三班', 5);
INSERT INTO `class` VALUES (9, '九班', 4);

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course`  (
  `course_id` int(8) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES (4, '专业四');
INSERT INTO `course` VALUES (5, '专业五');
INSERT INTO `course` VALUES (6, '专业六');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `student_id` int(8) NOT NULL,
  `student_number` int(8) NULL DEFAULT NULL,
  `student_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `student_birth` date NULL DEFAULT NULL,
  `student_sex` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class_id` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`student_id`) USING BTREE,
  INDEX `class_id`(`class_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (10, 10, '学生11', '2021-06-03', '女', 3);
INSERT INTO `student` VALUES (8, 8, '学生8', '2021-06-05', '男', 2);
INSERT INTO `student` VALUES (9, 9, '学生9', '2021-07-08', '女', 3);
INSERT INTO `student` VALUES (7, 7, '学生7', '2021-06-17', '女', 3);
INSERT INTO `student` VALUES (6, 6, '学生6', '2021-07-02', '男', 2);
INSERT INTO `student` VALUES (4, 4, '学生4', '2021-06-01', '男', 3);
INSERT INTO `student` VALUES (1, 1, '学生1', '2021-06-08', '男', 1);
INSERT INTO `student` VALUES (999, 999, '田所', '2021-06-08', '男', 9);
INSERT INTO `student` VALUES (2, 2, '学生2', '2021-06-08', '女', 3);
INSERT INTO `student` VALUES (3, 3, '学生3', '2021-06-04', '女', 5);

SET FOREIGN_KEY_CHECKS = 1;
