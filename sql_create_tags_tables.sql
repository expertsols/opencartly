-- =====================================================================
-- OpenCart WordPress-style Tagging System - Database Schema
-- =====================================================================
-- Creates tables for tags and tag relationships
-- Replace 'oc_' with your database prefix
-- =====================================================================

-- Tags table
CREATE TABLE IF NOT EXISTS `oc_tag` (
  `tag_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `slug` VARCHAR(255) NOT NULL,
  `description` TEXT DEFAULT NULL,
  `count` INT(11) UNSIGNED NOT NULL DEFAULT '0',
  `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`),
  KEY `count` (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tag relationships table (many-to-many)
CREATE TABLE IF NOT EXISTS `oc_tag_relationship` (
  `tag_relationship_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_id` INT(11) UNSIGNED NOT NULL,
  `object_type` VARCHAR(50) NOT NULL COMMENT 'product, category, information, article, etc.',
  `object_id` INT(11) UNSIGNED NOT NULL,
  `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tag_relationship_id`),
  UNIQUE KEY `unique_relation` (`tag_id`, `object_type`, `object_id`),
  KEY `tag_id` (`tag_id`),
  KEY `object` (`object_type`, `object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tag SEO URLs for permalink integration
CREATE TABLE IF NOT EXISTS `oc_tag_seo_url` (
  `tag_seo_url_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_id` INT(11) UNSIGNED NOT NULL,
  `store_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
  `language_id` INT(11) UNSIGNED NOT NULL DEFAULT '1',
  `keyword` VARCHAR(255) NOT NULL,
  `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tag_seo_url_id`),
  UNIQUE KEY `unique_seo` (`tag_id`, `store_id`, `language_id`),
  KEY `keyword` (`keyword`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

