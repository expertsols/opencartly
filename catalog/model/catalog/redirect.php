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
	 * Get redirect by old URL
	 *
	 * Searches for a redirect rule matching the old URL
	 *
	 * @param string $old_url The old URL path to check
	 *
	 * @return array<string, mixed>|false Redirect array or false if not found
	 */
	public function getRedirectByOldUrl(string $old_url): array|false {
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
		$this->db->query("INSERT INTO `" . DB_PREFIX . "redirects` SET `old_url` = '" . $this->db->escape($old_url) . "', `new_url` = '" . $this->db->escape($new_url) . "', `status_code` = '" . (int)$status_code . "', `date_added` = NOW()");
	}
}

