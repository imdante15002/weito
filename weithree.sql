/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : weij3

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2014-12-03 17:44:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dantes_advertise`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_advertise`;
CREATE TABLE `dantes_advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  `body` text NOT NULL,
  `time` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_advertise
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_announce`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_announce`;
CREATE TABLE `dantes_announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `uid` int(11) NOT NULL,
  `body` text NOT NULL,
  `dateline` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_announce
-- ----------------------------
INSERT INTO `dantes_announce` VALUES ('1', '恭贺微剑三视频站正式上线啦', '1', '&lt;p&gt;恭贺微剑三视频站正式上线啦&lt;img src=&quot;/Uploads/image/20141029/1414562941528086.jpg&quot; title=&quot;1414562941528086.jpg&quot; alt=&quot;u=2671916602,2321355889&amp;amp;fm=23&amp;amp;gp=0.jpg&quot;/&gt;&lt;/p&gt;', '1414562942', '0', '0');

-- ----------------------------
-- Table structure for `dantes_article`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_article`;
CREATE TABLE `dantes_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lipic` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `favour` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  `pubip` varchar(50) NOT NULL,
  `flag` varchar(8) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_article
-- ----------------------------
INSERT INTO `dantes_article` VALUES ('1', '1', '3', '剑网三JJC22冰秀奶秀，齐秀恩爱', '', '', 'Uploads/image/2014-11-01/545479152481b.jpgthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE2MTE0OTQ4/v.swf', '&lt;p&gt;剑网三JJC22冰秀奶秀，齐秀恩爱，开响微剑三视频站第一个视频，视频来源于优酷&lt;/p&gt;', '0', '0', '12', '0', '1414822165', '120.236.234.222', '', '0');
INSERT INTO `dantes_article` VALUES ('2', '1', '3', '藏剑PVP新手教学三——请叫我打丐狂鸡！', '', '', 'Uploads/image/2014-11-02/5455798d7b393.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE2ODMzNTI0/v.swf', '', '0', '0', '0', '0', '1414887821', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('3', '1', '1', '藏剑PVP新手教学视频三——请叫我打丐狂鸡！', '', '', 'Uploads/image/2014-11-02/545579eddf14c.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE2ODEwNDY0/v.swf', '', '0', '0', '0', '0', '1414887917', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('4', '1', '3', '剑网三JJC33天策藏剑奶毒1900-2000', '', '', 'Uploads/image/2014-11-02/54557a89054bf.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE2NzA1MjMy/v.swf', '', '0', '0', '0', '0', '1414888073', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('5', '1', '5', '决战剑网3：军娘VS明教（苍雪龙城精英测试锦标赛宣传片）', '', '', 'Uploads/image/2014-11-02/54557afb2c205.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE0ODgyNjQ4/v.swf', '', '0', '0', '1', '0', '1414888187', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('6', '1', '3', '剑网3苍云VS和尚 pvp视屏', '', '', 'Uploads/image/2014-11-02/54557c42d0282.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE1Njc0NDM2/v.swf', '', '0', '0', '0', '0', '1414888514', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('7', '1', '8', '体服五人副本雁门关简易攻略《剑网三评测团出品》', '', '', 'Uploads/image/2014-11-02/54557c7b53b1f.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE0NjkyMzI4/v.swf', '', '0', '0', '2', '0', '1414888571', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('8', '1', '3', '剑网3 攻防三不娶（上）-【007解说】', '', '', 'Uploads/image/2014-11-02/54557cbe04809.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE0MzU4NTg0/v.swf', '', '0', '0', '0', '0', '1414888638', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('9', '1', '3', '剑网3 攻防三不娶（中）-【007解说】', '', '', 'Uploads/image/2014-11-02/54557d2217be2.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE0MzU4NTg4/v.swf', '', '0', '0', '0', '0', '1414888738', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('10', '1', '3', '剑网3 攻防三不娶（下）-【007解说】', '攻防,剑三攻防直播,剑三直播视频', '', 'Uploads/image/2014-11-02/54557d81d2e90.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODE0MzU4NDEy/v.swf', '', '0', '0', '1', '0', '1414888833', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('11', '1', '7', '《圣焰冥影》剑网3剧情MV', '', '', 'Uploads/image/2014-11-02/54557dedccf1f.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XODEzOTg2MTIw/v.swf', '', '0', '0', '0', '0', '1414888941', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('12', '1', '1', '山河破·安史风云，最钟情的剑三剧情视频', '剑三山河破·安史之乱,山河破', '', 'Uploads/image/2014-11-02/54557efab26b1.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNjEwNjExMzU2/v.swf', '&lt;p&gt;这个视频是我最喜欢的剑三视频之一，看了之后对于剑三总是激情满满的&lt;/p&gt;', '0', '0', '0', '0', '1414889210', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('13', '1', '1', '剑网三 安史之乱 剧情视频《九天》', '', '', 'Uploads/image/2014-11-02/54557f99acf64.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNTc3MDc2Mjcy/v.swf', '', '0', '0', '0', '0', '1414889369', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('14', '1', '1', '剑网三 安史之乱·英雄祭', '', '', 'Uploads/image/2014-11-02/54557ffc378a4.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNTY1MjkwMTAw/v.swf', '', '0', '0', '0', '0', '1414889468', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('15', '1', '1', '剑三安史之乱剧情片《 乱世同归》', '', '', 'Uploads/image/2014-11-02/5455805433818.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNTgyNDc2MjAw/v.swf', '', '0', '0', '0', '0', '1414889556', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('16', '1', '1', '剑三凄美故事片纯阳剧情《暗香》', '', '', 'Uploads/image/2014-11-02/5455809db62ed.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNzM2NDk4MzA0/v.swf', '', '0', '0', '0', '0', '1414889629', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('17', '1', '1', '剑网3剧情片，七秀人物转《燕小七传》', '', '', 'Uploads/image/2014-11-02/545580eeb3d50.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNzI4Njc0NjQ0/v.swf', '', '0', '0', '1', '0', '1414889710', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('18', '1', '1', '剑网三 剑起苍澜系列完结篇《鬓霜天涯》', '', '', 'Uploads/image/2014-11-02/54558777e1129.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNjEzNTgyOTQ4/v.swf', '', '0', '0', '1', '0', '1414891383', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('19', '1', '1', '剑网3 剑起苍澜系列前篇之《腐骨蚀心》', '', '', 'Uploads/image/2014-11-02/545589e91f943.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNTMxNjc5MTcy/v.swf', '', '0', '0', '0', '0', '1414892009', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('20', '1', '7', '剑网3 剑起苍澜系列之《剑起苍澜》', '', '', 'Uploads/image/2014-11-02/54558a41a06b1.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNDg3MjU3NTQw/v.swf', '', '0', '0', '0', '0', '1414892097', '183.239.145.74', '', '0');
INSERT INTO `dantes_article` VALUES ('21', '1', '1', '剑网3剧情片，七秀人物转《燕小七传》', '', '', 'Uploads/image/2014-11-02/545580eeb3d50.pngthumb320x180.png', 'http://player.youku.com/player.php/sid/XNzI4Njc0NjQ0/v.swf', '', '0', '0', '1', '0', '1414889710', '183.239.145.74', '', '0');

-- ----------------------------
-- Table structure for `dantes_auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_auth_group`;
CREATE TABLE `dantes_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_auth_group
-- ----------------------------
INSERT INTO `dantes_auth_group` VALUES ('1', '超级管理员', '1', '');
INSERT INTO `dantes_auth_group` VALUES ('2', '管理员', '1', '');
INSERT INTO `dantes_auth_group` VALUES ('3', '网站编辑', '1', '');
INSERT INTO `dantes_auth_group` VALUES ('4', '内容审核员', '1', '');
INSERT INTO `dantes_auth_group` VALUES ('5', '技术人员', '1', '');

-- ----------------------------
-- Table structure for `dantes_auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_auth_group_access`;
CREATE TABLE `dantes_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_auth_group_access
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_auth_rule`;
CREATE TABLE `dantes_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_auth_rule
-- ----------------------------
INSERT INTO `dantes_auth_rule` VALUES ('6', 'Admin/Content/channel', '栏目管理', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('1', 'Admin/Content', '内容', '1', '1', '', '0');
INSERT INTO `dantes_auth_rule` VALUES ('2', 'Admin/Forum', '论坛', '1', '1', '', '0');
INSERT INTO `dantes_auth_rule` VALUES ('3', 'Admin/Operate', '运营', '1', '1', '', '0');
INSERT INTO `dantes_auth_rule` VALUES ('4', 'Admin/Member', '用户', '1', '1', '', '0');
INSERT INTO `dantes_auth_rule` VALUES ('5', 'Admin/Config', '配置', '1', '1', '', '0');
INSERT INTO `dantes_auth_rule` VALUES ('7', 'Admin/Content/article', '内容管理', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('9', 'Admin/Content/page', '页面管理', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('10', 'Admin/Content/category', '分类管理', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('11', 'Admin/Content/slides', '幻灯片管理', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('12', 'Admin/Content/recycle', '内容回收站', '1', '1', '', '1');
INSERT INTO `dantes_auth_rule` VALUES ('13', 'Admin/Forum/index', '版块列表', '1', '1', '', '2');
INSERT INTO `dantes_auth_rule` VALUES ('14', 'Admin/Forum/category', '帖子分类', '1', '1', '', '2');
INSERT INTO `dantes_auth_rule` VALUES ('15', 'Admin/Forum/thread', '所有帖子', '1', '1', '', '2');
INSERT INTO `dantes_auth_rule` VALUES ('16', 'Admin/Forum/examine', '帖子审核', '1', '1', '', '2');
INSERT INTO `dantes_auth_rule` VALUES ('17', 'Admin/Operate/site_notice', '站务公告', '1', '1', '', '3');
INSERT INTO `dantes_auth_rule` VALUES ('18', 'Admin/Operate/flink', '友情链接', '1', '1', '', '3');
INSERT INTO `dantes_auth_rule` VALUES ('19', 'Admin/Operate/advertisement', '广告运营', '1', '1', '', '3');
INSERT INTO `dantes_auth_rule` VALUES ('20', 'Admin/Operate/recommend', '站长推荐', '1', '1', '', '3');
INSERT INTO `dantes_auth_rule` VALUES ('21', 'Admin/Member/user', '用户组', '1', '1', '', '4');
INSERT INTO `dantes_auth_rule` VALUES ('22', 'Admin/Member/role', '管理组', '1', '1', '', '4');
INSERT INTO `dantes_auth_rule` VALUES ('23', 'Admin/Member/repassword', '修改密码', '1', '1', '', '4');
INSERT INTO `dantes_auth_rule` VALUES ('24', 'Admin/Config/index', '站点配置', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('25', 'Admin/Config/seo', 'SEO标题', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('26', 'Admin/Config/upload', '性能设置', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('27', 'Admin/Config/app_key', '端口配置', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('28', 'Admin/Auth/index', '模块管理', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('29', 'Admin/Auth/console', '功能配置', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('97', 'Admin/Auth/qmenu', '快捷菜单', '1', '1', '', '5');
INSERT INTO `dantes_auth_rule` VALUES ('31', 'Admin/Member/index', '用户中心', '1', '1', '', '4');
INSERT INTO `dantes_auth_rule` VALUES ('32', ' Admin/Content/add_channel', '添加栏目', '1', '1', '', '6');
INSERT INTO `dantes_auth_rule` VALUES ('33', ' Admin/Content/ed_channel', '编辑栏目', '1', '1', '', '6');
INSERT INTO `dantes_auth_rule` VALUES ('34', 'Admin/Content/del_channel', '删除栏目', '1', '1', '', '6');
INSERT INTO `dantes_auth_rule` VALUES ('35', 'Admin/Content/upchannel', '更新栏目排序', '1', '1', '', '6');
INSERT INTO `dantes_auth_rule` VALUES ('36', 'Admin/Content/move', '批量移动文章', '1', '1', '', '7');
INSERT INTO `dantes_auth_rule` VALUES ('37', 'Admin/Content/del_all', '批量删除文章', '1', '1', '', '7');
INSERT INTO `dantes_auth_rule` VALUES ('38', 'Admin/Content/add_article', '发布内容', '1', '1', '', '7');
INSERT INTO `dantes_auth_rule` VALUES ('39', 'Admin/Content/ed_article', '编辑文章', '1', '1', '', '7');
INSERT INTO `dantes_auth_rule` VALUES ('40', 'Admin/Content/del_article', '删除文章', '1', '1', '', '7');
INSERT INTO `dantes_auth_rule` VALUES ('41', 'Admin/Content/ed_page', '编辑页面', '1', '1', '', '9');
INSERT INTO `dantes_auth_rule` VALUES ('42', 'Admin/Content/del_page', '删除页面', '1', '1', '', '9');
INSERT INTO `dantes_auth_rule` VALUES ('43', 'Admin/Content/add_category', '添加分类', '1', '1', '', '10');
INSERT INTO `dantes_auth_rule` VALUES ('44', 'Admin/Content/ed_category', '编辑分类', '1', '1', '', '10');
INSERT INTO `dantes_auth_rule` VALUES ('45', 'Admin/Content/del_category', '删除分类', '1', '1', '', '10');
INSERT INTO `dantes_auth_rule` VALUES ('46', 'Admin/Content/add_slides', '添加幻灯片', '1', '1', '', '11');
INSERT INTO `dantes_auth_rule` VALUES ('47', 'Admin/Content/del_slides', '删除幻灯片', '1', '1', '', '11');
INSERT INTO `dantes_auth_rule` VALUES ('48', 'Admin/Content/ed_slides', '编辑幻灯片', '1', '1', '', '11');
INSERT INTO `dantes_auth_rule` VALUES ('49', 'Admin/Content/re_recycle', '回收文章', '1', '1', '', '12');
INSERT INTO `dantes_auth_rule` VALUES ('50', 'Admin/Content/de_recycle', '彻底删除文章', '1', '1', '', '12');
INSERT INTO `dantes_auth_rule` VALUES ('51', 'Admin/Forum/add_forum', '添加版块', '1', '1', '', '13');
INSERT INTO `dantes_auth_rule` VALUES ('52', 'Admin/Forum/upforum', '更新板块版序', '1', '1', '', '13');
INSERT INTO `dantes_auth_rule` VALUES ('53', 'Admin/Forum/del_forum', '删除版块', '1', '1', '', '13');
INSERT INTO `dantes_auth_rule` VALUES ('54', 'Admin/Forum/del_all_forum', '批量删除板块', '1', '1', '', '13');
INSERT INTO `dantes_auth_rule` VALUES ('55', 'Admin/Forum/add_category', '添加帖子分类', '1', '1', '', '14');
INSERT INTO `dantes_auth_rule` VALUES ('56', 'Admin/Forum/ed_category', '编辑帖子分类', '1', '1', '', '14');
INSERT INTO `dantes_auth_rule` VALUES ('57', 'Admin/Forum/del_category', '删除帖子分类', '1', '1', '', '14');
INSERT INTO `dantes_auth_rule` VALUES ('58', 'Admin/Forum/ed_thread', '编辑帖子', '1', '1', '', '15');
INSERT INTO `dantes_auth_rule` VALUES ('59', 'Admin/Forum/del_thread', '删除帖子', '1', '1', '', '15');
INSERT INTO `dantes_auth_rule` VALUES ('60', 'Admin/Forum/del_all_thread', '批量删除帖子', '1', '1', '', '15');
INSERT INTO `dantes_auth_rule` VALUES ('61', 'Admin/Forum/mover_thread', '移动帖子', '1', '1', '', '15');
INSERT INTO `dantes_auth_rule` VALUES ('62', 'Admin/Forum/examine_exe', '审核帖子', '1', '1', '', '16');
INSERT INTO `dantes_auth_rule` VALUES ('63', 'Admin/Forum/no_examine', '不通过帖子', '1', '1', '', '16');
INSERT INTO `dantes_auth_rule` VALUES ('64', 'Admin/Forum/del_examine', '删除待审核帖子', '1', '1', '', '16');
INSERT INTO `dantes_auth_rule` VALUES ('65', 'Admin/Operate/add_notice_exe', '添加公告', '1', '1', '', '17');
INSERT INTO `dantes_auth_rule` VALUES ('66', 'Admin/Operate/ed_notice', '编辑公告', '1', '1', '', '17');
INSERT INTO `dantes_auth_rule` VALUES ('67', 'Admin/Operate/del_notice', '删除公告', '1', '1', '', '17');
INSERT INTO `dantes_auth_rule` VALUES ('68', 'Admin/Operate/add_flink', '添加友情链接', '1', '1', '', '18');
INSERT INTO `dantes_auth_rule` VALUES ('69', ' Admin/Operate/ed_flink', '编辑友情链接', '1', '1', '', '18');
INSERT INTO `dantes_auth_rule` VALUES ('70', ' Admin/Operate/del_flink', '删除友情链接', '1', '1', '', '18');
INSERT INTO `dantes_auth_rule` VALUES ('71', 'Admin/Operate/add_advertisement', '添加广告', '1', '1', '', '19');
INSERT INTO `dantes_auth_rule` VALUES ('72', 'Admin/Operate/ed_advertisement', '编辑广告', '1', '1', '', '19');
INSERT INTO `dantes_auth_rule` VALUES ('73', 'Admin/Operate/del_advertisement', '删除广告', '1', '1', '', '19');
INSERT INTO `dantes_auth_rule` VALUES ('74', 'Admin/Operate/add_recommend', '添加推荐', '1', '1', '', '20');
INSERT INTO `dantes_auth_rule` VALUES ('75', 'Admin/Operate/ed_recommend', '编辑推荐', '1', '1', '', '20');
INSERT INTO `dantes_auth_rule` VALUES ('76', 'Admin/Operate/del_recommend', '删除推荐', '1', '1', '', '20');
INSERT INTO `dantes_auth_rule` VALUES ('77', 'Admin/Member/add_member', '添加用户', '1', '1', '', '31');
INSERT INTO `dantes_auth_rule` VALUES ('78', 'Admin/Member/ed_member', '编辑用户', '1', '1', '', '31');
INSERT INTO `dantes_auth_rule` VALUES ('79', 'Admin/Member/del_member', '删除用户', '1', '1', '', '31');
INSERT INTO `dantes_auth_rule` VALUES ('80', 'Admin/Member/del_all_member', '批量删除用户', '1', '1', '', '31');
INSERT INTO `dantes_auth_rule` VALUES ('81', 'Admin/Member/repass', '修改管理员密码', '1', '1', '', '23');
INSERT INTO `dantes_auth_rule` VALUES ('82', 'Admin/Member/add_role', '添加管理组', '1', '1', '', '22');
INSERT INTO `dantes_auth_rule` VALUES ('83', 'Admin/Member/ed_role', '编辑管理组', '1', '1', '', '22');
INSERT INTO `dantes_auth_rule` VALUES ('84', 'Admin/Member/del_role', '删除管理组', '1', '1', '', '22');
INSERT INTO `dantes_auth_rule` VALUES ('85', 'Admin/Member/add_user', '添加用户组', '1', '1', '', '21');
INSERT INTO `dantes_auth_rule` VALUES ('86', 'Admin/Member/ed_user', '编辑用户组', '1', '1', '', '21');
INSERT INTO `dantes_auth_rule` VALUES ('87', 'Admin/Member/del_user', '删除用户组', '1', '1', '', '21');
INSERT INTO `dantes_auth_rule` VALUES ('88', 'Admin/Config/upsite', '修改站点配置', '1', '1', '', '24');
INSERT INTO `dantes_auth_rule` VALUES ('89', 'Admin/Config/up_seo_exe', '修改SEO设置', '1', '1', '', '25');
INSERT INTO `dantes_auth_rule` VALUES ('90', 'Admin/Config/save_upload', '修改性能设置', '1', '1', '', '26');
INSERT INTO `dantes_auth_rule` VALUES ('91', 'Admin/Config/up_appkey', '修改端口', '1', '1', '', '27');
INSERT INTO `dantes_auth_rule` VALUES ('92', 'Admin/Auth/add_model', '添加模块', '1', '1', '', '28');
INSERT INTO `dantes_auth_rule` VALUES ('93', 'Admin/Auth/ed_model', '编辑模块', '1', '1', '', '28');
INSERT INTO `dantes_auth_rule` VALUES ('94', 'Admin/Auth/del_model', '删除模块', '1', '1', '', '28');
INSERT INTO `dantes_auth_rule` VALUES ('95', 'Admin/Auth/save_console', '保存功能设置', '1', '1', '', '29');
INSERT INTO `dantes_auth_rule` VALUES ('96', 'Admin/Auth/del_console', '删除功能菜单', '1', '1', '', '29');
INSERT INTO `dantes_auth_rule` VALUES ('98', 'Admin/Auth/add_qmenu', '增加快捷菜单', '1', '1', '', '97');
INSERT INTO `dantes_auth_rule` VALUES ('99', 'Admin/Auth/ed_qmenu', '编辑快捷菜单', '1', '1', '', '97');
INSERT INTO `dantes_auth_rule` VALUES ('100', 'Admin/Auth/del_qmenu', '删除快捷菜单', '1', '1', '', '97');

-- ----------------------------
-- Table structure for `dantes_auth_user`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_auth_user`;
CREATE TABLE `dantes_auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `rules` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_auth_user
-- ----------------------------
INSERT INTO `dantes_auth_user` VALUES ('1', '普通会员', '0', '');
INSERT INTO `dantes_auth_user` VALUES ('2', '中级会员', '0', '');
INSERT INTO `dantes_auth_user` VALUES ('3', '高级会员', '0', '');
INSERT INTO `dantes_auth_user` VALUES ('4', '金牌会员', '0', '');
INSERT INTO `dantes_auth_user` VALUES ('5', '钻石会员', '0', '');

-- ----------------------------
-- Table structure for `dantes_category`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_category`;
CREATE TABLE `dantes_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_category
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_channel`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_channel`;
CREATE TABLE `dantes_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `pid` int(11) NOT NULL,
  `nav` int(11) NOT NULL,
  `url` varchar(125) NOT NULL,
  `tpl` varchar(50) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_channel
-- ----------------------------
INSERT INTO `dantes_channel` VALUES ('1', '剧情', '0', '1', 'juqing', '', '剧情视频', '那个是坏人', '1', '0', '2');
INSERT INTO `dantes_channel` VALUES ('2', '搞笑', '0', '1', 'gaoxiao', '', '搞笑视频', '来了个大坏蛋', '2', '0', '2');
INSERT INTO `dantes_channel` VALUES ('3', 'PVP', '0', '1', 'pvp', '', 'pvp视频', '你说不是坏人么', '3', '0', '2');
INSERT INTO `dantes_channel` VALUES ('4', '公会', '0', '1', 'gonghui', '', '公会视频', '怎么可能是害人呢', '5', '0', '2');
INSERT INTO `dantes_channel` VALUES ('5', '杂烩', '0', '1', 'zahui', '', '杂烩视频', '大坏蛋从来不说自己是坏人', '6', '0', '2');
INSERT INTO `dantes_channel` VALUES ('7', 'MV', '0', '1', 'mv', '', '剧情mv', '怎么可以是坏人呢', '7', '0', '2');
INSERT INTO `dantes_channel` VALUES ('8', '副本', '0', '1', 'pve', '', '副本攻略视频', '看看人家怎么打副本的呢', '4', '0', '2');
INSERT INTO `dantes_channel` VALUES ('9', '论坛', '0', '0', 'forum', '', '论坛', '232', '8', '0', '3');

-- ----------------------------
-- Table structure for `dantes_config`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_config`;
CREATE TABLE `dantes_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(125) NOT NULL,
  `siteurl` varchar(255) NOT NULL,
  `shortname` varchar(50) NOT NULL,
  `qq` varchar(50) NOT NULL,
  `email` varchar(125) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `icp` varchar(50) NOT NULL,
  `count` text NOT NULL,
  `danteskey` varchar(40) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_config
-- ----------------------------
INSERT INTO `dantes_config` VALUES ('1', '微剑三-剑网三视频分享站，一起来分享你最喜爱的剑三视频吧！', 'http://weithree', '微剑三视频分享站', '763093576', '763093576@qq.com', '0879—2132370', '滇ICP备13003597号-5', '&lt;script type=&quot;text/javascript&quot;&gt;\r\nvar _bdhmProtocol = ((&quot;https:&quot; == document.location.protocol) ? &quot; https://&quot; : &quot; http://&quot;);\r\ndocument.write(unescape(&quot;%3Cscript src=\'&quot; + _bdhmProtocol + &quot;hm.baidu.com/h.js%3Ff84d1f8fa43e07f5db368b7ccab963ba\' type=\'text/javascript\'%3E%3C/script%3E&quot;));\r\n&lt;/script&gt;', '', 'weithree设计', 'weithree设计');

-- ----------------------------
-- Table structure for `dantes_extend_config`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_extend_config`;
CREATE TABLE `dantes_extend_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `up_url` varchar(255) NOT NULL,
  `up_size` int(11) NOT NULL,
  `thumb_on` int(11) NOT NULL,
  `thumb_size` varchar(20) NOT NULL,
  `ps_on` int(11) NOT NULL,
  `ps_url` char(255) NOT NULL,
  `stc_on` int(11) NOT NULL,
  `stc_url` char(255) NOT NULL,
  `daley_on` int(11) NOT NULL,
  `appid1` char(255) NOT NULL,
  `appid2` char(255) NOT NULL,
  `appid3` char(255) NOT NULL,
  `appkey1` char(255) NOT NULL,
  `appkey2` char(255) NOT NULL,
  `appkey3` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_extend_config
-- ----------------------------
INSERT INTO `dantes_extend_config` VALUES ('1', '/image/', '3145728', '1', '240,60', '0', 'http://img.weij3.com', '0', 'http://stc.weij3.com', '0', '91is743ywdklq3', '34trcg6889324', '73208781eecd', 'YXBwaWQ9N2hpOHR5dXdxMDM1dncwbw==', 'YXBwaWQ9N2hpOHR5dXdxMDM1dncwbw==', 'YXBwaWQ9N2hpOHR5dXdxMDM1dncwbw==');

-- ----------------------------
-- Table structure for `dantes_extend_content`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_extend_content`;
CREATE TABLE `dantes_extend_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `title` varchar(125) NOT NULL,
  `litpic` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_extend_content
-- ----------------------------
INSERT INTO `dantes_extend_content` VALUES ('1', '10', '测试信息', '', '&lt;p&gt;测试信息&lt;br/&gt;&lt;/p&gt;', '测试信息', '测试信息', '1416964844', '0');

-- ----------------------------
-- Table structure for `dantes_flink`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_flink`;
CREATE TABLE `dantes_flink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(120) NOT NULL,
  `linkurl` varchar(255) NOT NULL,
  `linkimg` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_flink
-- ----------------------------
INSERT INTO `dantes_flink` VALUES ('1', '剑网三官网', 'http://jx3.xoyo.com', '', '1');
INSERT INTO `dantes_flink` VALUES ('2', '测试数据', '#', '', '23');

-- ----------------------------
-- Table structure for `dantes_forumdisplay`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_forumdisplay`;
CREATE TABLE `dantes_forumdisplay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_forumdisplay
-- ----------------------------
INSERT INTO `dantes_forumdisplay` VALUES ('1', '综合讨论区', '', '', '', '0', '1', '0');
INSERT INTO `dantes_forumdisplay` VALUES ('2', '门派讨论区', '', '', '', '0', '2', '0');
INSERT INTO `dantes_forumdisplay` VALUES ('3', '经验技巧区', '', '', '', '0', '3', '0');
INSERT INTO `dantes_forumdisplay` VALUES ('4', '图片/文学区', '', '', '', '0', '5', '0');
INSERT INTO `dantes_forumdisplay` VALUES ('5', '事务区', '', '', '', '0', '6', '0');
INSERT INTO `dantes_forumdisplay` VALUES ('7', '插件/宏', '', '', '', '0', '4', '0');

-- ----------------------------
-- Table structure for `dantes_hot_title`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_hot_title`;
CREATE TABLE `dantes_hot_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_hot_title
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_member`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_member`;
CREATE TABLE `dantes_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(125) NOT NULL,
  `qq` varchar(25) NOT NULL,
  `sex` int(11) NOT NULL,
  `avtimg` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `regtime` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `regip` varchar(125) NOT NULL,
  `lastip` varchar(125) NOT NULL,
  `count` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `wb` int(11) NOT NULL,
  `extends4` int(11) NOT NULL,
  `auth_user_id` int(11) NOT NULL,
  `auth_group_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_member
-- ----------------------------
INSERT INTO `dantes_member` VALUES ('1', 'root', 'd033e22ae348aeb5660fc2140aec35850c4da997', '763093576@qq.com', '', '1', '/Static/common/images/user.png', '捡起节操继续装逼下去，直到天荒地老！', '1212124', '1417573921', '127.0.0.1', '127.0.0.1', '0', '108', '222', '0', '0', '1', '1');

-- ----------------------------
-- Table structure for `dantes_module`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_module`;
CREATE TABLE `dantes_module` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `mark` varchar(125) NOT NULL,
  `mid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_module
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_recommend`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_recommend`;
CREATE TABLE `dantes_recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_recommend
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_session`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_session`;
CREATE TABLE `dantes_session` (
  `session_id` varchar(255) NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_session
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_slides`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_slides`;
CREATE TABLE `dantes_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_slides
-- ----------------------------
INSERT INTO `dantes_slides` VALUES ('2', '苍雪龙城CG震撼发布', 'http://www.weij3.com', 'Uploads/image/2014-11-26/547538896aad6.jpg', '1416968329', '1', '0');
INSERT INTO `dantes_slides` VALUES ('3', '纯阳少侠萌现江湖', 'http://www.weij3.com', 'Uploads/image/2014-11-26/54753b47d0ef3.jpg', '1416969031', '2', '0');

-- ----------------------------
-- Table structure for `dantes_thread`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_thread`;
CREATE TABLE `dantes_thread` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `litpic` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `flag` varchar(5) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `dateline` int(11) NOT NULL,
  `pubip` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `favour` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_thread
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_thread_category`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_thread_category`;
CREATE TABLE `dantes_thread_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_thread_category
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_thread_reply`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_thread_reply`;
CREATE TABLE `dantes_thread_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `dateline` int(11) NOT NULL,
  `pubip` varchar(50) NOT NULL,
  `favour` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_thread_reply
-- ----------------------------

-- ----------------------------
-- Table structure for `dantes_video_reply`
-- ----------------------------
DROP TABLE IF EXISTS `dantes_video_reply`;
CREATE TABLE `dantes_video_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `dateline` int(11) NOT NULL,
  `pubip` varchar(50) NOT NULL,
  `favour` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dantes_video_reply
-- ----------------------------
INSERT INTO `dantes_video_reply` VALUES ('1', '1', '7', '0', '', '', '1414893096', '183.239.145.74', '0', '0', '0');
