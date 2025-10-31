<?php
namespace Opencart\Admin\Model\Design;
/**
 * Class Tag
 *
 * WordPress-style tag management for OpenCart
 *
 * @package Opencart\Admin\Model\Design
 */
class Tag extends \Opencart\System\Engine\Model {
	/**
	 * Add Tag
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return int
	 */
	public function addTag(array $data): int {
		// Generate slug from name if not provided
		if (empty($data['slug'])) {
			$data['slug'] = $this->generateSlug($data['name']);
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "tag` SET 
			`name` = '" . $this->db->escape($data['name']) . "',
			`slug` = '" . $this->db->escape($data['slug']) . "',
			`description` = '" . $this->db->escape($data['description'] ?? '') . "',
			`date_added` = NOW(),
			`date_modified` = NOW()");

		$tag_id = $this->db->getLastId();

		// Create SEO URL
		$this->addSeoUrl($tag_id, $data['slug']);

		return $tag_id;
	}

	/**
	 * Edit Tag
	 *
	 * @param int   $tag_id
	 * @param array<string, mixed> $data
	 *
	 * @return void
	 */
	public function editTag(int $tag_id, array $data): void {
		// Generate slug if not provided or changed
		if (empty($data['slug'])) {
			$data['slug'] = $this->generateSlug($data['name']);
		}

		$this->db->query("UPDATE `" . DB_PREFIX . "tag` SET 
			`name` = '" . $this->db->escape($data['name']) . "',
			`slug` = '" . $this->db->escape($data['slug']) . "',
			`description` = '" . $this->db->escape($data['description'] ?? '') . "',
			`date_modified` = NOW()
			WHERE `tag_id` = '" . (int)$tag_id . "'");

		// Update SEO URL
		$this->deleteSeoUrl($tag_id);
		$this->addSeoUrl($tag_id, $data['slug']);
	}

	/**
	 * Delete Tag
	 *
	 * @param int $tag_id
	 *
	 * @return void
	 */
	public function deleteTag(int $tag_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "tag` WHERE `tag_id` = '" . (int)$tag_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "tag_relationship` WHERE `tag_id` = '" . (int)$tag_id . "'");
		$this->deleteSeoUrl($tag_id);
	}

	/**
	 * Get Tag
	 *
	 * @param int $tag_id
	 *
	 * @return array<string, mixed>
	 */
	public function getTag(int $tag_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "tag` WHERE `tag_id` = '" . (int)$tag_id . "'");

		return $query->row;
	}

	/**
	 * Get Tags
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getTags(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "tag`";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "`name` LIKE '" . $this->db->escape('%' . $data['filter_name'] . '%') . "'";
		}

		if (!empty($data['filter_slug'])) {
			$implode[] = "`slug` LIKE '" . $this->db->escape('%' . $data['filter_slug'] . '%') . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = [
			'name',
			'slug',
			'count',
			'date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY `" . $data['sort'] . "`";
		} else {
			$sql .= " ORDER BY `name`";
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
	 * Get Total Tags
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return int
	 */
	public function getTotalTags(array $data = []): int {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "tag`";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "`name` LIKE '" . $this->db->escape('%' . $data['filter_name'] . '%') . "'";
		}

		if (!empty($data['filter_slug'])) {
			$implode[] = "`slug` LIKE '" . $this->db->escape('%' . $data['filter_slug'] . '%') . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	/**
	 * Add Tag Relationship
	 *
	 * @param int    $tag_id
	 * @param string $object_type
	 * @param int    $object_id
	 *
	 * @return void
	 */
	public function addTagRelationship(int $tag_id, string $object_type, int $object_id): void {
		$this->db->query("INSERT IGNORE INTO `" . DB_PREFIX . "tag_relationship` SET 
			`tag_id` = '" . (int)$tag_id . "',
			`object_type` = '" . $this->db->escape($object_type) . "',
			`object_id` = '" . (int)$object_id . "',
			`date_added` = NOW()");

		// Update tag count
		$this->updateTagCount($tag_id);
	}

	/**
	 * Delete Tag Relationship
	 *
	 * @param int    $tag_id
	 * @param string $object_type
	 * @param int    $object_id
	 *
	 * @return void
	 */
	public function deleteTagRelationship(int $tag_id, string $object_type, int $object_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "tag_relationship` WHERE 
			`tag_id` = '" . (int)$tag_id . "' AND 
			`object_type` = '" . $this->db->escape($object_type) . "' AND 
			`object_id` = '" . (int)$object_id . "'");

		// Update tag count
		$this->updateTagCount($tag_id);
	}

	/**
	 * Get Tags By Object
	 *
	 * @param string $object_type
	 * @param int    $object_id
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getTagsByObject(string $object_type, int $object_id): array {
		$query = $this->db->query("SELECT t.* FROM `" . DB_PREFIX . "tag` t 
			LEFT JOIN `" . DB_PREFIX . "tag_relationship` tr ON (t.`tag_id` = tr.`tag_id`)
			WHERE tr.`object_type` = '" . $this->db->escape($object_type) . "' 
			AND tr.`object_id` = '" . (int)$object_id . "'
			ORDER BY t.`name` ASC");

		return $query->rows;
	}

	/**
	 * Get Objects By Tag
	 *
	 * @param int    $tag_id
	 * @param string $object_type
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getObjectsByTag(int $tag_id, string $object_type): array {
		$query = $this->db->query("SELECT tr.`object_id` FROM `" . DB_PREFIX . "tag_relationship` tr 
			WHERE tr.`tag_id` = '" . (int)$tag_id . "' 
			AND tr.`object_type` = '" . $this->db->escape($object_type) . "'");

		return $query->rows;
	}

	/**
	 * Update Tag Count
	 *
	 * @param int $tag_id
	 *
	 * @return void
	 */
	private function updateTagCount(int $tag_id): void {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "tag_relationship` WHERE `tag_id` = '" . (int)$tag_id . "'");
		$this->db->query("UPDATE `" . DB_PREFIX . "tag` SET `count` = '" . (int)$query->row['total'] . "' WHERE `tag_id` = '" . (int)$tag_id . "'");
	}

	/**
	 * Add SEO URL
	 *
	 * @param int    $tag_id
	 * @param string $slug
	 *
	 * @return void
	 */
	private function addSeoUrl(int $tag_id, string $slug): void {
		// Get store and language IDs
		$store_id = (int)$this->config->get('config_store_id');
		$language_id = (int)$this->config->get('config_language_id');

		// Build keyword based on permalink settings
		$base_path = $this->config->get('config_base_path');
		$base_path = $base_path ? trim($base_path, '/') . '/' : '';
		$keyword = $base_path . 'tag/' . $slug;

		$this->db->query("INSERT INTO `" . DB_PREFIX . "tag_seo_url` SET 
			`tag_id` = '" . (int)$tag_id . "',
			`store_id` = '" . (int)$store_id . "',
			`language_id` = '" . (int)$language_id . "',
			`keyword` = '" . $this->db->escape($keyword) . "',
			`date_added` = NOW()
			ON DUPLICATE KEY UPDATE `keyword` = VALUES(`keyword`)");
	}

	/**
	 * Delete SEO URL
	 *
	 * @param int $tag_id
	 *
	 * @return void
	 */
	private function deleteSeoUrl(int $tag_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "tag_seo_url` WHERE `tag_id` = '" . (int)$tag_id . "'");
	}

	/**
	 * Generate Slug
	 *
	 * @param string $name
	 *
	 * @return string
	 */
	private function generateSlug(string $name): string {
		$slug = strtolower($name);
		$slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
		$slug = trim($slug, '-');

		// Ensure uniqueness
		$original_slug = $slug;
		$counter = 1;
		while ($this->slugExists($slug)) {
			$slug = $original_slug . '-' . $counter;
			$counter++;
		}

		return $slug;
	}

	/**
	 * Check if Slug Exists
	 *
	 * @param string $slug
	 * @param int    $exclude_tag_id
	 *
	 * @return bool
	 */
	private function slugExists(string $slug, int $exclude_tag_id = 0): bool {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "tag` WHERE `slug` = '" . $this->db->escape($slug) . "'";
		if ($exclude_tag_id) {
			$sql .= " AND `tag_id` != '" . (int)$exclude_tag_id . "'";
		}
		$query = $this->db->query($sql);
		return (int)$query->row['total'] > 0;
	}
}

