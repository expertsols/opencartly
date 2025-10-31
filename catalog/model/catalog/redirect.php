<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Redirect
 *
 * Catalog model for handling URL redirects
 * Queries the oc_redirects table for old URL to new URL mappings
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class Redirect extends \Opencart\System\Engine\Model {
    /**
     * Ensure redirects table exists
     *
     * @return void
     */
    private function ensureTable(): void {
        $this->db->query(
            "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "redirects` (
                `redirect_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `old_url` VARCHAR(255) NOT NULL,
                `new_url` VARCHAR(255) NOT NULL,
                `status_code` INT(3) NOT NULL DEFAULT '301',
                `date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`redirect_id`),
                UNIQUE KEY `old_url` (`old_url`),
                KEY `status_code` (`status_code`),
                KEY `date_added` (`date_added`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
        );
    }
	/**
	 * Get redirect by old URL
	 *
	 * Searches for a redirect rule matching the old URL
	 *
	 * @param string $old_url The old URL path to check
	 *
	 * @return array<string, mixed>|false Redirect array or false if not found
	 */
    public function getRedirectByOldUrl(string $old_url): array|false {
        $this->ensureTable();
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "redirects` WHERE `old_url` = '" . $this->db->escape($old_url) . "' LIMIT 1");

		if ($query->num_rows) {
			return $query->row;
		}

		return false;
	}

	/**
	 * Add redirect
	 *
	 * Inserts a new redirect rule into the database
	 *
	 * @param string $old_url The old URL to redirect from
	 * @param string $new_url The new URL to redirect to
	 * @param int $status_code HTTP status code (default 301)
	 *
	 * @return void
	 */
    public function addRedirect(string $old_url, string $new_url, int $status_code = 301): void {
        $this->ensureTable();
		$this->db->query("INSERT INTO `" . DB_PREFIX . "redirects` SET `old_url` = '" . $this->db->escape($old_url) . "', `new_url` = '" . $this->db->escape($new_url) . "', `status_code` = '" . (int)$status_code . "', `date_added` = NOW()");
	}
}

