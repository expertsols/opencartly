-- =====================================================================
-- OpenCart URL Redirects System - Database Schema
-- =====================================================================
-- Creates the oc_redirects table for managing URL redirects
-- =====================================================================
-- IMPORTANT: Replace 'oc_' with your database prefix
-- =====================================================================

-- Create the redirects table
CREATE TABLE IF NOT EXISTS `oc_redirects` (
  `redirect_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `old_url` VARCHAR(255) NOT NULL,
  `new_url` VARCHAR(255) NOT NULL,
  `status_code` INT(3) NOT NULL DEFAULT '301',
  `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`redirect_id`),
  UNIQUE KEY `old_url` (`old_url`),
  KEY `status_code` (`status_code`),
  KEY `date_added` (`date_added`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================================
-- Auto-populate redirects from existing SEO URLs
-- =====================================================================
-- This creates redirects for old prefixed URLs to new clean URLs
-- Run this when enabling "Remove URL Prefixes" feature
-- =====================================================================

-- Insert redirects for product URLs with /catalog/ prefix
INSERT INTO `oc_redirects` (`old_url`, `new_url`, `status_code`)
SELECT 
    CONCAT('/catalog/', `keyword`),
    CONCAT('/', `keyword`),
    301
FROM `oc_seo_url`
WHERE `key` = 'product_id'
  AND (`keyword` LIKE 'catalog/%' OR `keyword` NOT LIKE '/catalog/%')
ON DUPLICATE KEY UPDATE `new_url` = VALUES(`new_url`);

-- Insert redirects for category URLs with /catalog/ prefix
INSERT INTO `oc_redirects` (`old_url`, `new_url`, `status_code`)
SELECT 
    CONCAT('/catalog/', `keyword`),
    CONCAT('/', `keyword`),
    301
FROM `oc_seo_url`
WHERE `key` = 'category_id'
  AND (`keyword` LIKE 'catalog/%' OR `keyword` NOT LIKE '/catalog/%')
ON DUPLICATE KEY UPDATE `new_url` = VALUES(`new_url`);

-- Insert redirects for information pages with /information/ prefix
INSERT INTO `oc_redirects` (`old_url`, `new_url`, `status_code`)
SELECT 
    CONCAT('/information/', `keyword`),
    CONCAT('/', `keyword`),
    301
FROM `oc_seo_url`
WHERE `key` = 'information_id'
  AND (`keyword` LIKE 'information/%' OR `keyword` NOT LIKE '/information/%')
ON DUPLICATE KEY UPDATE `new_url` = VALUES(`new_url`);

-- =====================================================================
-- Verification Queries
-- =====================================================================

-- View all redirects
-- SELECT * FROM `oc_redirects` ORDER BY `date_added` DESC;

-- Count redirects by type
-- SELECT 
--   CASE 
--     WHEN `old_url` LIKE '/catalog/%' THEN 'catalog'
--     WHEN `old_url` LIKE '/information/%' THEN 'information'
--     ELSE 'other'
--   END AS type,
--   COUNT(*) as count
-- FROM `oc_redirects`
-- GROUP BY type;

-- Check for potential circular redirects
-- SELECT r1.old_url, r1.new_url, r2.new_url as circular_to
-- FROM `oc_redirects` r1
-- JOIN `oc_redirects` r2 ON r1.new_url = r2.old_url
-- WHERE r1.old_url != r2.new_url;

-- =====================================================================
-- Manual Redirect Examples
-- =====================================================================

-- Example: Redirect old product URL to new clean URL
-- INSERT INTO `oc_redirects` (`old_url`, `new_url`, `status_code`)
-- VALUES ('/old-product-page', '/new-product-page', 301);

-- Example: Custom redirect with 302 (temporary)
-- INSERT INTO `oc_redirects` (`old_url`, `new_url`, `status_code`)
-- VALUES ('/special-promo', '/current-promo', 302);

-- =====================================================================
-- Rollback Script (if needed)
-- =====================================================================

-- To remove all auto-generated redirects:
-- DELETE FROM `oc_redirects`;

-- To drop the table entirely:
-- DROP TABLE IF EXISTS `oc_redirects`;

-- =====================================================================

