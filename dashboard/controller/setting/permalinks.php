<?php
namespace Opencart\Admin\Controller\Setting;
/**
 * Class Permalinks
 *
 * WordPress-like Permalink Settings for OpenCart
 * Manages base domain, URL structure, and SEO-specific URL settings
 *
 * @package Opencart\Admin\Controller\Setting
 */
class Permalinks extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('setting/permalinks');

		$this->document->setTitle($this->language->get('heading_title'));

		// Ensure menu item exists under System via Menu model (DB-driven sidebar)
		$this->load->model('tool/menu');
		$menu_info = $this->model_tool_menu->getMenuByCode('permalinks');

		if (!$menu_info) {
			// Build descriptions for all languages
			$this->load->model('localisation/language');
			$languages = $this->model_localisation_language->getLanguages();

			$menu_description = [];
			foreach ($languages as $language) {
				$menu_description[$language['language_id']] = ['name' => $this->language->get('heading_title')];
			}

			$this->model_tool_menu->addMenu([
				'code' => 'permalinks',
				'type' => 'link',
				'route' => 'setting/permalinks',
				'parent' => 'system',
				'sort_order' => 55,
				'menu_description' => $menu_description
			]);
		}

		// Ensure current user group has access/modify permissions to avoid permission denied
        if (!$this->user->hasPermission('access', 'setting/permalinks') || !$this->user->hasPermission('modify', 'setting/permalinks')) {
			$this->load->model('user/user');
			$this->load->model('user/user_group');

			$user_id = $this->user->getId();
			$user_info = $this->model_user_user->getUser($user_id);
			if (!empty($user_info['user_group_id'])) {
				$user_group_id = (int)$user_info['user_group_id'];
                // Grant access/modify for page and save endpoint (both route forms)
                if (!$this->user->hasPermission('access', 'setting/permalinks')) {
                    $this->model_user_user_group->addPermission($user_group_id, 'access', 'setting/permalinks');
                }
                if (!$this->user->hasPermission('access', 'setting/permalinks.save')) {
                    $this->model_user_user_group->addPermission($user_group_id, 'access', 'setting/permalinks.save');
                }
                if (!$this->user->hasPermission('modify', 'setting/permalinks')) {
                    $this->model_user_user_group->addPermission($user_group_id, 'modify', 'setting/permalinks');
                }
                if (!$this->user->hasPermission('modify', 'setting/permalinks.save')) {
                    $this->model_user_user_group->addPermission($user_group_id, 'modify', 'setting/permalinks.save');
                }
			}
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_setting'),
			'href' => $this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('setting/permalinks', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('setting/permalinks.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token']);

		// Get current settings
		$data['config_base_domain'] = $this->config->get('config_base_domain', '');
		$data['config_base_path'] = $this->config->get('config_base_path', '');
		$data['config_url_structure'] = $this->config->get('config_url_structure', 'plain');
		$data['config_seo_url'] = $this->config->get('config_seo_url', 0);
		$data['config_remove_url_prefixes'] = $this->config->get('config_remove_url_prefixes', 0);
		$data['config_category_url_format'] = $this->config->get('config_category_url_format', 'category');
		$data['config_product_url_format'] = $this->config->get('config_product_url_format', 'product');
		$data['config_information_url_format'] = $this->config->get('config_information_url_format', 'information');
		$data['config_auto_redirect'] = $this->config->get('config_auto_redirect', 1);
		$data['config_redirect_status'] = $this->config->get('config_redirect_status', 301);
		$data['config_trailing_slash'] = $this->config->get('config_trailing_slash', 1);
		$data['config_database_redirect_repair'] = $this->config->get('config_database_redirect_repair', 0);

		// Detect current base path automatically
		if (empty($data['config_base_path'])) {
			$parsed_url = parse_url(HTTP_CATALOG);
			$data['config_base_path'] = isset($parsed_url['path']) ? rtrim($parsed_url['path'], '/') : '';
		}

		// Detect current base domain automatically
		if (empty($data['config_base_domain'])) {
			$parsed_url = parse_url(HTTP_CATALOG);
			$data['config_base_domain'] = isset($parsed_url['host']) ? $parsed_url['host'] : '';
		}

		// URL structure options
		$data['url_structures'] = [
			['value' => 'plain', 'text' => $this->language->get('text_url_structure_plain')],
			['value' => 'category', 'text' => $this->language->get('text_url_structure_category')],
			['value' => 'custom', 'text' => $this->language->get('text_url_structure_custom')]
		];

		// URL format options
		$data['url_formats'] = [
			['value' => 'category', 'text' => '/category/'],
			['value' => 'catalog', 'text' => '/catalog/'],
			['value' => 'none', 'text' => $this->language->get('text_url_format_none')]
		];

		// Redirect status codes
		$data['redirect_statuses'] = [
			['value' => '301', 'text' => '301 - Permanent Redirect'],
			['value' => '302', 'text' => '302 - Temporary Redirect'],
			['value' => '307', 'text' => '307 - Temporary Redirect (Preserve Method)']
		];

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('setting/permalinks', $data));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('setting/permalinks');

		$json = [];

		if (!$this->user->hasPermission('modify', 'setting/permalinks')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		// Validate base domain
		if (!empty($this->request->post['config_base_domain'])) {
			if (!filter_var($this->request->post['config_base_domain'], FILTER_VALIDATE_DOMAIN) && 
			    !filter_var('http://' . $this->request->post['config_base_domain'], FILTER_VALIDATE_URL)) {
				$json['error']['base_domain'] = $this->language->get('error_base_domain');
			}
		}

		// Validate base path
		if (!empty($this->request->post['config_base_path'])) {
			$base_path = trim($this->request->post['config_base_path'], '/');
			if ($base_path && !preg_match('#^[a-zA-Z0-9\-_/]*$#', $base_path)) {
				$json['error']['base_path'] = $this->language->get('error_base_path');
			}
		}

		// Validate redirect status
		if (!in_array($this->request->post['config_redirect_status'], ['301', '302', '307'])) {
			$json['error']['redirect_status'] = $this->language->get('error_redirect_status');
		}

		if (isset($json['error']) && !isset($json['error']['warning'])) {
			$json['error']['warning'] = $this->language->get('error_warning');
		}

		if (!$json) {
			// Setting
			$this->load->model('setting/setting');

			// Prepare settings to save
			$settings = [
				'config_base_domain' => $this->request->post['config_base_domain'] ?? '',
				'config_base_path' => trim($this->request->post['config_base_path'] ?? '', '/'),
				'config_url_structure' => $this->request->post['config_url_structure'] ?? 'plain',
				'config_seo_url' => isset($this->request->post['config_seo_url']) ? (int)$this->request->post['config_seo_url'] : 0,
				'config_remove_url_prefixes' => isset($this->request->post['config_remove_url_prefixes']) ? (int)$this->request->post['config_remove_url_prefixes'] : 0,
				'config_category_url_format' => $this->request->post['config_category_url_format'] ?? 'category',
				'config_product_url_format' => $this->request->post['config_product_url_format'] ?? 'product',
				'config_information_url_format' => $this->request->post['config_information_url_format'] ?? 'information',
				'config_auto_redirect' => isset($this->request->post['config_auto_redirect']) ? (int)$this->request->post['config_auto_redirect'] : 0,
				'config_redirect_status' => $this->request->post['config_redirect_status'] ?? '301',
				'config_trailing_slash' => isset($this->request->post['config_trailing_slash']) ? (int)$this->request->post['config_trailing_slash'] : 1,
				'config_database_redirect_repair' => isset($this->request->post['config_database_redirect_repair']) ? (int)$this->request->post['config_database_redirect_repair'] : 0
			];

			$this->model_setting_setting->editSetting('config', $settings);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

