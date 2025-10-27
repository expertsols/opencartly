<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Redirect
 *
 * Admin model for managing URL redirects
 * Handles CRUD operations for the oc_redirects table
 *
 * @package Opencart\Admin\Model\Catalog
 */
class Redirect extends \Opencart\System\Engine\Model {
	/**
	 * Add redirect
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return int
	 */
	public function addRedirect(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "redirects` SET `old_url` = '" . $this->db->escape($data['old_url']) . "', `new_url` = '" . $this->db->escape($data['new_url']) . "', `status_code` = '" . (int)$data['status_code'] . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * Edit redirect
	 *
	 * @param int $redirect_id
	 * @param array<string, mixed> $data
	 *
	 * @return void
	 */
	public function editRedirect(int $redirect_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "redirects` SET `old_url` = '" . $this->db->escape($data['old_url']) . "', `new_url` = '" . $this->db->escape($data['new_url']) . "', `status_code` = '" . (int)$data['status_code'] . "' WHERE `redirect_id` = '" . (int)$redirect_id . "'");
	}

	/**
	 * Delete redirect
	 *
	 * @param int $redirect_id
	 *
	 * @return void
	 */
	public function deleteRedirect(int $redirect_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "redirects` WHERE `redirect_id` = '" . (int)$redirect_id . "'");
	}

	/**
	 * Get redirect
	 *
	 * @param int $redirect_id
	 *
	 * @return array<string, mixed>
	 */
	public function getRedirect(int $redirect_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "redirects` WHERE `redirect_id` = '" . (int)$redirect_id . "'");

		return $query->row;
	}

	/**
	 * Get redirects
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return array<string, mixed>
	 */
	public function getRedirects(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "redirects`";

		$sort_data = [
			'old_url',
			'new_url',
			'status_code',
			'date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get total redirects
	 *
	 * @return int
	 */
	public function getTotalRedirects(): int {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "redirects`");

		return (int)$query->row['total'];
	}
}

