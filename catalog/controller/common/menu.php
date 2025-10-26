<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Menu
 *
 * Can be called from $this->load->controller('common/menu');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Menu extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$this->load->language('common/menu');

		// Category
		$this->load->model('catalog/category');

		// Product
		$this->load->model('catalog/product');

		$data['home'] = $this->config->get('config_url');
		$data['categories'] = [];

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			// Level 2
			$children_data = [];

			$children = $this->model_catalog_category->getCategories($category['category_id']);

			foreach ($children as $child) {
				$filter_data = [
					'filter_category_id'  => $child['category_id'],
					'filter_sub_category' => true
				];

				$children_data[] = [
					'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'] . '_' . $child['category_id'])
				];
			}

			// Level 1
			$column = isset($category['column']) ? (int)$category['column'] : 1;

			if ($column < 1) {
				$column = 1;
			}

			$data['categories'][] = [
				'children' => $children_data,
				'href'     => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id']),
				'column'   => $column
			] + $category;
		}

		return $this->load->view('common/menu', $data);
	}
}
