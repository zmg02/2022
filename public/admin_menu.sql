/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : 2022

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-07 16:06:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `order` smallint(6) NOT NULL DEFAULT 0 COMMENT '排序',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '目录名称',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '图标',
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '链接',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:正常，2：删除，3：隐藏',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', '0', '99', 'Mogujie', 'mdi-store', '', '0', '1646640071', '1');
INSERT INTO `admin_menu` VALUES ('2', '0', '90', '光年', 'mdi-theme-light-dark', '', '0', '1646640330', '1');
INSERT INTO `admin_menu` VALUES ('3', '1', '50', 'System', 'mdi-laptop-windows', '', '0', '1646639966', '1');
INSERT INTO `admin_menu` VALUES ('4', '1', '49', 'Member', 'mdi-account', '', '0', '1646640093', '1');
INSERT INTO `admin_menu` VALUES ('5', '1', '48', 'Order', 'mdi-format-indent-increase', '', '0', '1646640216', '1');
INSERT INTO `admin_menu` VALUES ('6', '3', '20', 'Dashboard', 'mdi-view-dashboard', 'admin/mogujie/dashboard', '0', '1646639839', '1');
INSERT INTO `admin_menu` VALUES ('7', '3', '19', 'Settings', 'mdi-settings', '', '0', '1646639813', '1');
INSERT INTO `admin_menu` VALUES ('8', '3', '18', 'Administrator', 'mdi-account-settings-variant', '', '0', '1646639764', '1');
INSERT INTO `admin_menu` VALUES ('9', '7', '9', 'Settings', 'mdi-settings', 'admin/mogujie/settings', '0', '1646639792', '1');
INSERT INTO `admin_menu` VALUES ('10', '8', '10', 'Menu', 'mdi-menu', 'admin/mogujie/menu', '0', '1646639667', '1');
INSERT INTO `admin_menu` VALUES ('11', '8', '10', 'Roles', 'mdi-account-card-details', 'admin/mogujie/role', '0', '1646639705', '1');
INSERT INTO `admin_menu` VALUES ('12', '2', '10', '后台首页', 'mdi-home', 'admin/mogujie', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('13', '2', '10', 'UI元素', 'mdi-palette', '', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('14', '13', '0', '按钮', '', 'admin/mogujie/index/buttons', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('15', '4', '10', 'Member List', 'mdi-format-align-justify', 'admin/mogujie/user', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('16', '13', '0', '卡片', '', 'admin/mogujie/index/cards', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('17', '13', '0', '格栅', '', 'admin/mogujie/index/grid', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('18', '13', '0', '图标', '', 'admin/mogujie/index/icons', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('19', '13', '0', '表格', '', 'admin/mogujie/index/tables', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('20', '13', '0', '模态框', '', 'admin/mogujie/index/modals', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('21', '13', '0', '提示/弹出框', '', 'admin/mogujie/index/popover', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('22', '13', '0', '警示框', '', 'admin/mogujie/index/alerts', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('23', '13', '0', '分页', '', 'admin/mogujie/index/pagination', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('24', '13', '0', '进度条', '', 'admin/mogujie/index/progress', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('25', '13', '0', '标签页', '', 'admin/mogujie/index/tabs', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('26', '13', '0', '排版', '', 'admin/mogujie/index/typography', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('27', '13', '0', '步骤', '', 'admin/mogujie/index/step', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('28', '13', '0', '其他', '', 'admin/mogujie/index/other', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('29', '2', '10', '表单', 'mdi-format-align-justify', '', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('30', '29', '0', '基本元素', '', 'admin/mogujie/index/elements', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('31', '29', '0', '单选框', '', 'admin/mogujie/index/radio', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('32', '29', '0', '复选框', '', 'admin/mogujie/index/checkbox', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('33', '29', '0', '开关', '', 'admin/mogujie/index/switch', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('34', '2', '10', '示例页面', 'mdi-file-outline', '', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('35', '34', '0', '文档列表', '', 'admin/mogujie/index/doc', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('36', '34', '0', '图库列表', '', 'admin/mogujie/index/gallery', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('37', '34', '0', '网站配置', '', 'admin/mogujie/index/config', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('38', '34', '0', '设置权限', '', 'admin/mogujie/index/rabc', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('39', '34', '0', '新增文档', '', 'admin/mogujie/index/add_doc', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('40', '34', '0', '表单向导', '', 'admin/mogujie/index/guide', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('41', '34', '0', '登录页面', '', 'admin/mogujie/index/login', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('42', '34', '0', '登录页面2', '', 'admin/mogujie/index/login2', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('43', '34', '0', '登录页面3', '', 'admin/mogujie/index/login3', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('44', '34', '0', '登录页面4', '', 'admin/mogujie/index/login4', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('45', '34', '0', '错误页面', '', 'admin/mogujie/index/error', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('46', '2', '10', 'JS插件', 'mdi-language-javascript', '', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('47', '46', '0', '日期选取器', '', 'admin/mogujie/index/datepicker', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('48', '46', '0', '滑块', '', 'admin/mogujie/index/sliders', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('49', '46', '0', '选色器', '', 'admin/mogujie/index/colorpicker', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('50', '46', '0', 'chart.js', '', 'admin/mogujie/index/chartjs', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('51', '46', '0', '对话框', '', 'admin/mogujie/index/jconfirm', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('52', '46', '0', '标签插件', '', 'admin/mogujie/index/input', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('53', '46', '0', '通知消息', '', 'admin/mogujie/index/notify', '0', '0', '1');
INSERT INTO `admin_menu` VALUES ('54', '0', '0', 'test', 'mdi-file-outline', '', '1646121150', '1646121150', '1');
INSERT INTO `admin_menu` VALUES ('55', '0', '0', 'sg', '', '', '1646121171', '1646121171', '2');
INSERT INTO `admin_menu` VALUES ('56', '54', '0', 'testtest', 'mdi-account', 'test', '1646121218', '1646121218', '1');
INSERT INTO `admin_menu` VALUES ('57', '54', '0', 'testtest', 'mdi-account', 'test', '1646121259', '1646121259', '1');
INSERT INTO `admin_menu` VALUES ('58', '56', '0', 'test3', 'mdi-account-check', 'test3', '1646121286', '1646121286', '1');
INSERT INTO `admin_menu` VALUES ('59', '0', '0', '呀呀呀呀呀呀若', '', 'aaa', '1646210297', '1646374736', '2');
INSERT INTO `admin_menu` VALUES ('60', '8', '0', 'Permission', 'mdi-account-key', 'admin/mogujie/permission', '1646377518', '1646377518', '1');
