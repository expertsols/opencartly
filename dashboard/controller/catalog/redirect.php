<?php
namespace Opencart\Admin\Controller\Catalog;
/**
 * Class Redirect
 *
 * Admin controller for managing URL redirects
 * Located in System > Maintenance > Redirects
 *
 * @package Opencart\Admin\Controller\Catalog
 */
class Redirect extends \Opencart\System\Engine\Controller {
	/**
	 * Index - List all redirects
	 *
	 * Displays the redirect manager interface
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('catalog/redirect');

		$this->document->setTitle($this->language->get('heading_title'));

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/redirect', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['add'] = $this->url->link('catalog/redirect.form', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('catalog/redirect.delete', 'user_token=' . $this->session->data['user_token']);

		$data['list'] = $this->getList();

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/redirect_list', $data));
	}

	/**
	 * List - Get paginated redirects
	 *
	 * @return string
	 */
	public function list(): void {
		$this->load->language('catalog/redirect');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get list
	 *
	 * @return string
	 */
	protected function getList(): string {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['action'] = $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . $url);

		$data['redirects'] = [];

		$filter_data = [
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit' => $this->config->get('config_pagination_admin')
		];

		$this->load->model('catalog/redirect');

		$redirect_total = $this->model_catalog_redirect->getTotalRedirects();

		$results = $this->model_catalog_redirect->getRedirects($filter_data);

		foreach ($results as $result) {
			$data['redirects'][] = [
				'redirect_id' => $result['redirect_id'],
				'old_url'     => $result['old_url'],
				'new_url'     => $result['new_url'],
				'status_code' => $result['status_code'],
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'        => $this->url->link('catalog/redirect.form', 'user_token=' . $this->session->data['user_token'] . '&redirect_id=' . $result['redirect_id'] . $url)
			];
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_old_url'] = $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . '&sort=old_url' . $url);
		$data['sort_new_url'] = $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . '&sort=new_url' . $url);
		$data['sort_status_code'] = $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . '&sort=status_code' . $url);
		$data['sort_date_added'] = $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $redirect_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('catalog/redirect.list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$start = $redirect_total ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0;
		$end = min((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin'), $redirect_total);
		$data['results'] = sprintf($this->language->get('text_pagination'), $start, $end, $redirect_total, ceil($redirect_total / $this->config->get('config_pagination_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		return $this->load->view('catalog/redirect_list', $data);
	}

	/**
	 * Form - Add/Edit redirect
	 *
	 * @return void
	 */
	public function form(): void {
		$this->load->language('catalog/redirect');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_form'] = !isset($this->request->get['redirect_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/redirect', 'user_token=' . $this->session->data['user_token'] . $url)
		];

		$data['save'] = $this->url->link('catalog/redirect.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('catalog/redirect', 'user_token=' . $this->session->data['user_token'] . $url);

		if (isset($this->request->get['redirect_id'])) {
			$this->load->model('catalog/redirect');

			$redirect_info = $this->model_catalog_redirect->getRedirect($this->request->get['redirect_id']);
		}

		if (isset($this->request->get['redirect_id'])) {
			$data['redirect_id'] = (int)$this->request->get['redirect_id'];
		} else {
			$data['redirect_id'] = 0;
		}

		if (!empty($redirect_info)) {
			$data['old_url'] = $redirect_info['old_url'];
		} else {
			$data['old_url'] = '';
		}

		if (!empty($redirect_info)) {
			$data['new_url'] = $redirect_info['new_url'];
		} else {
			$data['new_url'] = '';
		}

		if (!empty($redirect_info)) {
			$data['status_code'] = $redirect_info['status_code'];
		} else {
			$data['status_code'] = 301;
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/redirect_form', $data));
	}

	/**
	 * Save - Save redirect
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('catalog/redirect');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/redirect')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['old_url']) < 3) || (oc_strlen($this->request->post['old_url']) > 255)) {
			$json['error']['old_url'] = $this->language->get('error_old_url');
		}

		if ((oc_strlen($this->request->post['new_url']) < 3) || (oc_strlen($this->request->post['new_url']) > 255)) {
			$json['error']['new_url'] = $this->language->get('error_new_url');
		}

		if (!$json) {
			$this->load->model('catalog/redirect');

			if (!$this->request->post['redirect_id']) {
				$this->model_catalog_redirect->addRedirect($this->request->post);
			} else {
				$this->model_catalog_redirect->editRedirect($this->request->post['redirect_id'], $this->request->post);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Delete - Delete redirects
	 *
	 * @return void
	 */
	public function delete(): void {
		$this->load->language('catalog/redirect');

		$json = [];

		if (!$this->user->hasPermission('modify', 'catalog/redirect')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('catalog/redirect');

			foreach ($this->request->post['selected'] as $redirect_id) {
				$this->model_catalog_redirect->deleteRedirect($redirect_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

