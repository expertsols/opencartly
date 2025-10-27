-- =====================================================================
-- OpenCart SEO URL Enhancement - Database Migration Script
-- =====================================================================
-- Purpose: Normalize existing SEO URLs to remove prefixes
-- This script updates the oc_seo_url table to make URLs SEO-friendly
-- =====================================================================
-- IMPORTANT: Replace 'oc_' with your database prefix
-- IMPORTANT: Backup your database before running this script
-- =====================================================================

-- Step 1: Update SEO URLs that have /catalog/ prefix
-- ==================================================
UPDATE `oc_seo_url`
SET `keyword` = REPLACE(`keyword`, '/catalog/', '/')
WHERE `keyword` LIKE '/catalog/%'
   OR `keyword` LIKE 'catalog/%';

-- Step 2: Update SEO URLs that have /information/ prefix
-- =======================================================
UPDATE `oc_seo_url`
SET `keyword` = REPLACE(`keyword`, '/information/', '/')
WHERE `keyword` LIKE '/information/%'
   OR `keyword` LIKE 'information/%';

-- Step 3: Update SEO URLs that have /product/ prefix
-- ===================================================
UPDATE `oc_seo_url`
SET `keyword` = REPLACE(`keyword`, '/product/', '/')
WHERE `keyword` LIKE '/product/%'
   OR `keyword` LIKE 'product/%';

-- Step 4: Update SEO URLs that have /category/ prefix
-- ====================================================
UPDATE `oc_seo_url`
SET `keyword` = REPLACE(`keyword`, '/category/', '/')
WHERE `keyword` LIKE '/category/%'
   OR `keyword` LIKE 'category/%';

-- Step 5: Clean up any double slashes that may have been created
-- ===============================================================
UPDATE `oc_seo_url`
SET `keyword` = REPLACE(`keyword`, '//', '/')
WHERE `keyword` LIKE '%//%';

-- Step 6: Remove leading slashes if present (OpenCart expects keywords without leading slash)
-- ==========================================================================
UPDATE `oc_seo_url`
SET `keyword` = LTRIM(`keyword`, '/')
WHERE `keyword` LIKE '/%';

-- Step 7: Optional - Add the new configuration setting to enable clean URLs
-- ==========================================================================
-- Note: Adjust 'your_default_store_id' and 'config_group' based on your setup
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`)
VALUES (0, 'config', 'config_remove_url_prefixes', '0', 0)
ON DUPLICATE KEY UPDATE `value` = '0';

-- =====================================================================
-- Verification Queries
-- =====================================================================
-- Run these queries to verify the migration:

-- Check if any prefixes still exist:
-- SELECT `seo_url_id`, `key`, `value`, `keyword` FROM `oc_seo_url` 
-- WHERE `keyword` LIKE '/catalog/%' 
--    OR `keyword` LIKE '/information/%'
--    OR `keyword` LIKE '/product/%'
--    OR `keyword` LIKE '/category/%';

-- Check the new setting:
-- SELECT * FROM `oc_setting` WHERE `key` = 'config_remove_url_prefixes';

-- View sample SEO URLs:
-- SELECT `key`, `value`, `keyword` FROM `oc_seo_url` ORDER BY `seo_url_id` DESC LIMIT 20;

-- =====================================================================
-- Rollback Script (use if needed to revert changes)
-- =====================================================================
/*
-- To rollback, you would need to restore from your backup.
-- If you have a backup of the oc_seo_url table, restore it with:
-- 
-- DROP TABLE `oc_seo_url`;
-- -- Then restore your backup table
--
-- Or manually add back prefixes:
-- UPDATE `oc_seo_url` SET `keyword` = CONCAT('catalog/', `keyword`) WHERE `key` = 'product_id';
-- UPDATE `oc_seo_url` SET `keyword` = CONCAT('catalog/', `keyword`) WHERE `key` = 'category_id';
-- UPDATE `oc_seo_url` SET `keyword` = CONCAT('information/', `keyword`) WHERE `key` = 'information_id';
*/
-- =====================================================================

