/*
 Navicat Premium Data Transfer

 Source Server         : forum
 Source Server Type    : MySQL
 Source Server Version : 50728
 Source Host           : 127.0.0.1:33060
 Source Schema         : homestead

 Target Server Type    : MySQL
 Target Server Version : 50728
 File Encoding         : 65001

 Date: 28/03/2020 22:25:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_permission_role
-- ----------------------------
DROP TABLE IF EXISTS `admin_permission_role`;
CREATE TABLE `admin_permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_permission_role
-- ----------------------------
BEGIN;
INSERT INTO `admin_permission_role` VALUES (1, 1, 1);
INSERT INTO `admin_permission_role` VALUES (2, 2, 1);
INSERT INTO `admin_permission_role` VALUES (3, 3, 1);
INSERT INTO `admin_permission_role` VALUES (4, 4, 1);
INSERT INTO `admin_permission_role` VALUES (5, 2, 2);
COMMIT;

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
BEGIN;
INSERT INTO `admin_permissions` VALUES (1, 'system', 'system management', '2019-05-05 22:01:40', '2019-05-05 22:01:40');
INSERT INTO `admin_permissions` VALUES (2, 'post', 'post management', '2019-05-05 22:02:20', '2019-05-05 22:02:20');
INSERT INTO `admin_permissions` VALUES (3, 'topic', 'topic management', '2019-05-05 22:02:35', '2019-05-05 22:02:35');
INSERT INTO `admin_permissions` VALUES (4, 'notice', 'notice management', '2019-05-05 22:02:48', '2019-05-05 22:02:48');
COMMIT;

-- ----------------------------
-- Table structure for admin_role_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_user`;
CREATE TABLE `admin_role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_role_user
-- ----------------------------
BEGIN;
INSERT INTO `admin_role_user` VALUES (1, 1, 1);
INSERT INTO `admin_role_user` VALUES (2, 2, 2);
COMMIT;

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
BEGIN;
INSERT INTO `admin_roles` VALUES (1, 'sys-manager', 'system management', '2019-05-05 22:08:17', '2019-05-05 22:08:17');
INSERT INTO `admin_roles` VALUES (2, 'post-manager', 'post management', '2019-05-05 22:14:21', '2019-05-05 22:14:21');
INSERT INTO `admin_roles` VALUES (3, 'topic-manager', 'topic management', '2019-05-05 23:49:02', '2019-05-05 23:49:02');
INSERT INTO `admin_roles` VALUES (4, 'notice-manager', 'notice management', '2019-05-05 23:49:31', '2019-05-05 23:49:31');
COMMIT;

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
BEGIN;
INSERT INTO `admin_users` VALUES (1, 'admin', '$2y$10$yOQl2COsjD/Ma0z6fCRnFeD/219bm1LB2Sx80g1YfnJ6j3DppJF1u', '2019-05-05 13:05:01', '2019-05-05 13:05:01');
INSERT INTO `admin_users` VALUES (2, 'test1', '$2y$10$6skj6iYOhWLMWqs12a.3E.4IL6TtQvUOb88KM7aiJMq.uk9fXCNQu', '2019-05-05 17:09:41', '2019-05-05 17:09:41');
COMMIT;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
BEGIN;
INSERT INTO `comments` VALUES (1, 19, '这既是不合理的评论', 1, '2019-04-30 17:14:36', '2019-04-30 17:14:36');
INSERT INTO `comments` VALUES (2, 19, 'coment', 1, '2020-02-18 17:51:09', '2020-02-18 17:51:09');
COMMIT;

-- ----------------------------
-- Table structure for fans
-- ----------------------------
DROP TABLE IF EXISTS `fans`;
CREATE TABLE `fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fan_id` int(11) NOT NULL DEFAULT '0',
  `star_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of fans
-- ----------------------------
BEGIN;
INSERT INTO `fans` VALUES (3, 1, 2, '2019-05-02 23:14:32', '2019-05-02 23:14:32');
COMMIT;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (7, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (8, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_04_25_153600_create_posts_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_04_29_131645_create_comments_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_04_29_235519_create_zans_table', 2);
INSERT INTO `migrations` VALUES (12, '2019_05_01_224059_create_fans_table', 3);
INSERT INTO `migrations` VALUES (13, '2019_05_02_232051_create_topics_table', 4);
INSERT INTO `migrations` VALUES (14, '2019_05_02_232112_create_post_topic_table', 4);
INSERT INTO `migrations` VALUES (15, '2019_05_04_153735_create_post_topics_table', 5);
INSERT INTO `migrations` VALUES (16, '2019_05_05_111640_create_admin_users_table', 5);
INSERT INTO `migrations` VALUES (17, '2019_05_05_171513_alter_posts_table', 6);
INSERT INTO `migrations` VALUES (18, '2019_05_05_192955_create_permission_and_roles_table', 7);
INSERT INTO `migrations` VALUES (19, '2019_05_06_220207_create_notices_table', 8);
INSERT INTO `migrations` VALUES (20, '2019_05_06_224156_create_jobs_table', 9);
INSERT INTO `migrations` VALUES (21, '2019_05_07_185516_alter_user_table_add_avatar', 10);
COMMIT;

-- ----------------------------
-- Table structure for notices
-- ----------------------------
DROP TABLE IF EXISTS `notices`;
CREATE TABLE `notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of notices
-- ----------------------------
BEGIN;
INSERT INTO `notices` VALUES (1, '', '这事测试哦同学中', '2019-05-06 22:22:10', '2019-05-06 22:22:10');
INSERT INTO `notices` VALUES (2, '是袁弘却回答', '是袁弘却回答是袁弘却回答是袁弘却回答', '2019-05-06 22:25:13', '2019-05-06 22:25:13');
INSERT INTO `notices` VALUES (3, '六一节快乐', '欢迎大家登录简书', '2019-05-06 22:51:15', '2019-05-06 22:51:15');
INSERT INTO `notices` VALUES (4, '大家好', '这事测试', '2019-05-06 22:52:17', '2019-05-06 22:52:17');
INSERT INTO `notices` VALUES (5, '马上做饭', '卡房间的看风景的咖啡店就', '2020-03-28 16:20:03', '2020-03-28 16:20:03');
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for post_topic
-- ----------------------------
DROP TABLE IF EXISTS `post_topic`;
CREATE TABLE `post_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_topic
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for post_topics
-- ----------------------------
DROP TABLE IF EXISTS `post_topics`;
CREATE TABLE `post_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_topics
-- ----------------------------
BEGIN;
INSERT INTO `post_topics` VALUES (1, 21, 1, '2019-05-04 16:45:48', '2019-05-04 16:45:48');
INSERT INTO `post_topics` VALUES (2, 22, 1, '2019-05-04 16:45:48', '2019-05-04 16:45:48');
INSERT INTO `post_topics` VALUES (3, 20, 1, '2019-05-04 16:46:27', '2019-05-04 16:46:27');
INSERT INTO `post_topics` VALUES (4, 5, 2, '2019-05-04 16:46:39', '2019-05-04 16:46:39');
INSERT INTO `post_topics` VALUES (5, 10, 1, '2020-03-28 19:55:26', '2020-03-28 19:55:26');
INSERT INTO `post_topics` VALUES (6, 4, 1, '2020-03-28 19:59:46', '2020-03-28 19:59:46');
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES (1, 'Aut unde necessitatibus eos ipsam cupiditate ducimus aut aut.', 'Rem dignissimos expedita ipsam ducimus nesciunt. Ea rerum laboriosam excepturi facere nobis. Dolorum provident voluptatem non est molestiae mollitia ea. Quia voluptas fugiat eligendi ipsum recusandae laborum. Qui vitae laborum ut aliquid. Corporis itaque tempora excepturi ut veritatis nemo doloremque. Error eius earum architecto provident quibusdam possimus. Ut velit nihil et. Praesentium cum et suscipit sed ut id facere. Aut ea mollitia quos temporibus. Unde molestias atque neque iste aut autem.', 1, '2019-04-29 13:19:42', '2019-04-29 13:19:42', 0);
INSERT INTO `posts` VALUES (2, 'Dolorum nulla reiciendis quo quidem modi repellat.', 'Qui omnis qui omnis soluta. Sed voluptatem quis a dolorum atque earum. Nisi pariatur ut quos. Omnis quo nobis architecto quisquam laboriosam. Asperiores aut dolores quo ut quaerat alias maxime ut. Nihil quo consequatur repellendus voluptas odio at magnam. Iste quo qui laboriosam.', 1, '2019-04-29 13:19:44', '2019-04-29 13:19:44', 0);
INSERT INTO `posts` VALUES (3, 'Aliquam repellat dolorum quisquam earum non.', 'Quis consequatur alias impedit ut a consequuntur itaque. Eum occaecati dolorum provident alias harum et. Qui excepturi et aperiam unde delectus optio libero at. Eaque non molestiae neque. Quaerat est fugit amet repellat. Voluptatem et atque maiores. Quo at cumque soluta non ipsa provident esse mollitia. Odit eius explicabo voluptatibus animi aut sed consequatur laboriosam. Porro illo et maxime ut deleniti placeat odio totam. Aut maiores iure minima fugiat laboriosam. Maxime voluptatem facilis est velit minus quia.', 1, '2019-04-29 13:19:45', '2019-04-29 13:19:45', 0);
INSERT INTO `posts` VALUES (4, 'Sunt sed architecto facere aut.', 'Ipsam ullam necessitatibus at aliquid amet. Quisquam distinctio eius odit deleniti error. Aut mollitia aliquid enim laudantium. Minima esse labore ipsum repellendus rem beatae aut eum. Voluptas ratione perspiciatis ab qui. Ducimus ab atque enim. Autem dolores dolorem sint optio repudiandae natus unde. Et facere doloribus recusandae magni aut sunt. Aut et aut nesciunt. Debitis odit in doloremque illo ipsa eum.', 1, '2019-04-29 13:19:45', '2019-04-29 13:19:45', 0);
INSERT INTO `posts` VALUES (5, 'Magnam expedita quo ex consequatur.', 'Non unde tempora ea ea sed quia unde. Voluptas aut voluptate nisi ducimus ipsa. Perferendis labore impedit molestias ut. Blanditiis sunt quidem dignissimos et facilis ut maxime. Sunt dolor quam eligendi praesentium magnam cupiditate. Porro beatae eveniet tenetur odio sequi sed. Nihil magni qui fugiat eius incidunt ut. Consequatur eum vitae in libero. Repellat pariatur iure dolor iste et veritatis et. Officia distinctio et voluptates modi dolorem vero repellat. Sed cumque necessitatibus odio non libero dignissimos in. Eos aspernatur ut odio ut. Ea et voluptatem nihil asperiores nobis rerum. Et molestiae vel voluptas et.', 1, '2019-04-29 13:19:46', '2019-04-29 13:19:46', 0);
INSERT INTO `posts` VALUES (6, 'Aut doloremque fugit et eveniet.', 'Numquam soluta molestiae sit impedit. Adipisci debitis cum sint ut deleniti enim. Rem quo quis rerum rerum reiciendis. Cumque ab assumenda voluptatem fuga. Quae in dolorem ipsum nesciunt odit officia. Facere in sint ut temporibus eius molestiae illum quis. Fugiat in voluptatem nulla nulla consequatur. Ipsam hic consectetur cumque itaque. Quidem vitae voluptatibus nisi aperiam similique. Eaque aut fugit consequatur qui rerum unde suscipit et.', 2, '2019-04-29 13:19:46', '2019-04-29 13:19:46', 0);
INSERT INTO `posts` VALUES (7, 'Nam animi modi voluptates neque voluptatem.', 'Voluptate temporibus non culpa iusto repellendus. Similique nesciunt est non laboriosam temporibus. Consequatur omnis est accusamus molestias ipsam. Maiores quisquam officia aut aliquam. Quam minima quae blanditiis ea. Iste accusantium quisquam qui. Deleniti et aut eveniet architecto culpa autem. Distinctio assumenda sed ut incidunt similique asperiores vero. Excepturi nihil officiis doloribus consectetur cumque iste dolorum. Repudiandae sit totam et sed molestiae nobis.', 2, '2019-04-29 13:19:47', '2019-04-29 13:19:47', 0);
INSERT INTO `posts` VALUES (8, 'Unde ea adipisci distinctio at non eligendi quos.', 'Voluptate ab voluptas eos. Deleniti et laboriosam aliquam alias. Repudiandae tempora quaerat in laboriosam aut nulla. Ut est iusto minus dolor. Dolor et cumque odit rerum aliquid alias dolor. Qui labore delectus voluptatibus voluptates eum consequatur rerum. Magnam et omnis iste consectetur. Corporis ut ut praesentium voluptatibus ut ut at.', 2, '2019-04-29 13:19:47', '2019-04-29 13:19:47', 0);
INSERT INTO `posts` VALUES (9, 'Sapiente quia dignissimos magnam vero consectetur impedit odit perspiciatis.', 'Laborum ab quia natus ut. Alias adipisci veritatis incidunt eaque et corporis totam. Laudantium atque ipsa iusto distinctio officiis numquam tempora enim. Et ducimus deserunt reiciendis consequuntur. Deleniti ullam recusandae enim odio quasi. Consequatur animi asperiores qui id est autem at. Ea maxime nobis dolor aut voluptas.', 2, '2019-04-29 13:19:49', '2019-04-29 13:19:49', 0);
INSERT INTO `posts` VALUES (10, 'Sit quia ut est earum.', 'Maiores iusto qui enim recusandae porro. Quibusdam fuga consequatur amet omnis possimus. Explicabo aut cum perferendis quis debitis eaque. Quod mollitia est esse quisquam inventore repellat. Sint rerum ut aspernatur qui dolorem nulla. Repellat est sequi ex est ipsa et rerum. Aliquid vel aut molestiae deserunt. Odio qui cum aperiam dolorem asperiores sit. Saepe aliquid repudiandae qui quis quidem qui voluptas dolor. Nesciunt consectetur et ipsa et nobis. Vel at qui et sequi et inventore molestiae.', 1, '2019-04-29 13:19:49', '2019-04-29 13:19:49', 0);
INSERT INTO `posts` VALUES (11, 'Impedit a nemo eum iure non et facilis.', 'Earum ea nisi et blanditiis. Ipsa a assumenda voluptatum sint porro tempore labore. Aspernatur asperiores facilis vero quibusdam qui. Aut earum non rerum placeat consequatur fugit dolorem voluptatum. Maiores ut illum eaque sunt ut eum. Recusandae dolor rerum aut. Velit deleniti reprehenderit nam ab earum. Temporibus quis occaecati in dolorum vel fugiat. Voluptatem rerum officia corrupti est alias et. Deserunt mollitia veritatis quia officia. Explicabo reiciendis debitis quis aspernatur perspiciatis voluptas. Omnis rem est possimus expedita eum quasi. Quis quidem quis reprehenderit rem est quia beatae. Repellendus ipsa qui quas similique expedita aliquam.', 2, '2019-04-29 13:19:50', '2019-04-29 13:19:50', 0);
INSERT INTO `posts` VALUES (12, 'Sed dolor maiores dicta deserunt accusamus quae.', 'Aut occaecati aspernatur dignissimos consequatur soluta ab. Quis dolores ut quis vitae ipsam eius explicabo. Officiis voluptate corporis nisi voluptas. Ut repudiandae occaecati voluptates in et qui dolore rerum. Dicta officia fugit laborum ad velit. Facilis deleniti id suscipit voluptas cum corporis. Est rerum dolor sequi possimus accusantium ratione amet. Vitae suscipit et porro rerum et quia. Labore dignissimos qui maiores mollitia et quasi. Eveniet non et mollitia doloremque explicabo. Eius deleniti pariatur ex enim veniam aut totam nihil. Explicabo est aut quia aut tenetur. Repellat provident quod laudantium quis ex vero molestiae enim.', 2, '2019-04-29 13:19:50', '2019-04-29 13:19:50', 0);
INSERT INTO `posts` VALUES (13, 'Maiores praesentium mollitia voluptatum neque.', 'Perferendis in ut odio est iste aperiam odio. Doloremque architecto beatae repellat. Adipisci dolor molestiae reprehenderit enim quia tempore. Assumenda repellendus nobis soluta quasi enim tempora autem. Voluptatibus qui ratione ex. Accusantium dolores similique qui ipsam sit amet. Molestiae qui hic iure soluta et. Esse voluptatibus et aut alias. Qui qui illum ullam ea aut dignissimos quos. Rerum et expedita praesentium esse maiores voluptas et. Repellat voluptas tempora asperiores.', 2, '2019-04-29 13:19:52', '2019-04-29 13:19:52', 0);
INSERT INTO `posts` VALUES (14, 'Similique totam omnis in odit voluptatem et voluptates.', 'Molestias et voluptatibus aut nam placeat. Voluptate dolores architecto quo rerum quod voluptate. Voluptatem sint nulla aperiam possimus non. Dolores rerum quaerat ea deleniti quia ut dolor est. Atque voluptatem veritatis quia quidem aut. Et maiores at sunt omnis et. Tenetur nihil voluptas tenetur in. Eveniet consequuntur qui qui ipsa quisquam deleniti voluptatibus. Aliquam officia quidem et magnam. Officiis totam enim repellendus odit atque.', 1, '2019-04-29 13:19:52', '2019-04-29 13:19:52', 0);
INSERT INTO `posts` VALUES (15, 'Aliquam voluptas voluptatem mollitia esse corrupti voluptas.', 'Dolor in cupiditate exercitationem aut dolor expedita qui. Quod vero consequatur voluptatibus corrupti enim blanditiis perspiciatis. Animi accusantium ut est animi molestias. Doloribus possimus sint architecto. Vitae et et suscipit magnam similique consectetur. Error veritatis rerum quia voluptates est est iure et. Nihil saepe odit omnis eligendi a. Nostrum dolor consequatur rem nesciunt fuga sed. Magni et eum voluptates quia ipsa animi. Maxime consequatur distinctio vitae aut. Qui ex autem modi labore qui. Aut necessitatibus animi est corrupti qui voluptas. Dignissimos officiis assumenda rerum doloremque quia.', 1, '2019-04-29 13:19:53', '2019-04-29 13:19:53', 0);
INSERT INTO `posts` VALUES (16, 'Similique aut sed sapiente mollitia quos ut.', 'Aut praesentium sapiente aut magni. In consequatur voluptas consequuntur eveniet maiores. Est sit ipsam ducimus magnam. Veritatis eos sunt qui quia. Numquam quas velit doloremque commodi ipsa. Enim et voluptate dolores esse dignissimos. Laudantium quos nihil dolores labore itaque. Cupiditate dignissimos dolorum porro.', 1, '2019-04-29 13:19:53', '2019-04-29 13:19:53', 0);
INSERT INTO `posts` VALUES (17, 'Ratione sunt voluptatem est ullam mollitia ipsa.', 'Est tempore tempore laborum adipisci. Vitae sint voluptatem recusandae nisi possimus et. Voluptas saepe voluptatem ullam expedita qui consequatur sit. Et voluptatem velit totam. Dolorem animi et aut. Temporibus et nulla consequatur asperiores ipsum nesciunt. Maxime culpa quia non ullam nobis molestiae vel. Eos facilis ut sequi molestias est vitae repudiandae. Nihil magnam in vitae sequi impedit sunt impedit ut. Commodi qui velit accusantium voluptatem quis animi non et. Voluptates aut commodi consequuntur reprehenderit tempora deserunt. Assumenda eum deserunt aut quod fugit optio. Nostrum nam dolores aut et omnis consequuntur.', 1, '2019-04-29 13:19:54', '2019-04-29 13:19:54', 0);
INSERT INTO `posts` VALUES (18, 'Cupiditate neque nobis sed reprehenderit.', 'Dolorem ullam tempore labore. Natus dolorem molestiae molestias commodi repellendus. Ducimus blanditiis neque doloribus ab at. Cupiditate nesciunt illo illo consequatur. Corrupti dolor vitae sunt asperiores in occaecati. Laudantium id blanditiis nisi a. Vero rem est illo. Enim molestiae enim fuga voluptatum vel aut. Expedita et libero veniam fugiat aliquid suscipit. Repellat et ipsum optio voluptatem ipsam eligendi enim. Esse aut dolorem facere aut corrupti qui. Aperiam quo possimus blanditiis. Id aliquid consequuntur quo ut ut beatae similique.', 2, '2019-04-29 13:19:54', '2019-04-29 13:19:54', 0);
INSERT INTO `posts` VALUES (19, 'Aliquam autem excepturi maxime.', 'Ad maiores et ratione molestiae. Est reprehenderit sit exercitationem nobis. Laudantium deleniti et voluptatum. Ut aliquid numquam eaque ad vitae et. Nisi dolorem cumque amet quo. Eius molestiae vel eaque et. Eos incidunt praesentium at similique earum facere velit. Magnam aut nulla necessitatibus pariatur sint. Perferendis voluptatem similique architecto tempore ullam. Nostrum voluptatem rem numquam omnis nostrum est. Ex autem harum a eaque.', 2, '2019-04-29 13:19:55', '2019-04-29 13:19:55', 0);
INSERT INTO `posts` VALUES (20, 'Ut nihil quia corrupti ut.', 'Tenetur quis qui autem vel numquam soluta. Nulla mollitia et officiis voluptatum cupiditate. Repellat asperiores id alias eum ea. Rem esse porro placeat nisi. Expedita id dolorem ducimus ut in alias et. Similique libero numquam voluptatem. Occaecati quisquam harum dolore. Doloremque cupiditate sint dolor sequi. Eos ut rerum eaque reprehenderit aspernatur accusantium. Et reiciendis cumque aspernatur sint alias sequi. Rem explicabo velit nobis soluta maxime animi. Voluptas ea porro omnis consequatur. At omnis similique modi asperiores. Qui totam ad voluptas quis nihil optio voluptates.', 1, '2019-04-29 13:19:56', '2019-04-29 13:19:56', 0);
INSERT INTO `posts` VALUES (21, '嫁给爱情的张歆艺顺利产子：为什么二婚女反而比大龄剩女更吃香？', '<div><div><p>张歆艺接受比自己小</p></div></div>', 1, '2019-05-01 21:53:08', '2019-05-05 19:02:07', -1);
INSERT INTO `posts` VALUES (22, '是袁弘却回答', '<p>是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答是袁弘却回答</p>', 1, '2019-05-01 22:36:03', '2019-05-05 19:00:20', -1);
INSERT INTO `posts` VALUES (23, '弘却回答是袁', '<p>弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却回答是袁弘却回答是袁弘却<br></p>', 1, '2019-05-01 22:36:47', '2019-05-05 18:59:22', -1);
INSERT INTO `posts` VALUES (24, '却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却', '<p>却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却却回答是袁弘却弘却回答是袁弘却回答是袁弘却弘却<br></p>', 1, '2019-05-01 22:36:59', '2019-05-01 22:36:59', -1);
COMMIT;

-- ----------------------------
-- Table structure for topics
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of topics
-- ----------------------------
BEGIN;
INSERT INTO `topics` VALUES (3, 'Second-hand deal', '2020-03-28 21:34:37', '2020-03-28 21:34:37');
INSERT INTO `topics` VALUES (4, 'original article', '2020-03-28 21:35:31', '2020-03-28 21:35:31');
INSERT INTO `topics` VALUES (5, 'lost and found', '2020-03-28 21:37:46', '2020-03-28 21:37:46');
COMMIT;

-- ----------------------------
-- Table structure for user_notice
-- ----------------------------
DROP TABLE IF EXISTS `user_notice`;
CREATE TABLE `user_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `notice_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_notice
-- ----------------------------
BEGIN;
INSERT INTO `user_notice` VALUES (1, 1, 3, NULL, NULL);
INSERT INTO `user_notice` VALUES (2, 2, 3, NULL, NULL);
INSERT INTO `user_notice` VALUES (3, 1, 4, NULL, NULL);
INSERT INTO `user_notice` VALUES (4, 2, 4, NULL, NULL);
INSERT INTO `user_notice` VALUES (5, 1, 5, NULL, NULL);
INSERT INTO `user_notice` VALUES (6, 2, 5, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'firstuser', 'firstuser@qq.com', NULL, '$2y$10$TdIWSFo0lZU6WYAgcIpGjOzqp7d7lFn6PSuVLx6OPSrLWEOf6bJ2u', 'oOOahDyDyllvHA1W4LfBYingLTLSamOJP5mMvMoAynl3wHzTpJJth6a8xcFi', '2019-04-29 13:21:59', '2020-01-18 23:06:11', '/storage/816951f4253e55e18fc17dfc374079f6/ZGEYYpAhIUC8zfwfOXNqWW1FBmng0OEAWpXnT53H.png');
INSERT INTO `users` VALUES (2, 'seconduser', 'seconduser@qq.com', NULL, '$2y$10$TSI0laFU.d1uYDOZiH8.b.TA/nWunUMUaKjNXAJfhUmsJrubiIA4e', NULL, '2019-04-29 13:22:18', '2019-04-29 13:22:18', '');
COMMIT;

-- ----------------------------
-- Table structure for zans
-- ----------------------------
DROP TABLE IF EXISTS `zans`;
CREATE TABLE `zans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of zans
-- ----------------------------
BEGIN;
INSERT INTO `zans` VALUES (4, 1, 21, '2019-05-01 21:53:15', '2019-05-01 21:53:15');
INSERT INTO `zans` VALUES (5, 1, 20, '2020-02-18 11:38:07', '2020-02-18 11:38:07');
INSERT INTO `zans` VALUES (6, 1, 19, '2020-02-18 17:51:02', '2020-02-18 17:51:02');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
