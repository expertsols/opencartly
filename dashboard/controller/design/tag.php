<?php
namespace Opencart\Admin\Controller\Design;
/**
 * Class Tag
 *
 * WordPress-style tag management for OpenCart Admin
 *
 * @package Opencart\Admin\Controller\Design
 */
class Tag extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('design/tag');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('design/tag', 'user_token=' . $this->session->data['user_token'])
		];

		$data['add'] = $this->url->link('design/tag.form', 'user_token=' . $this->session->data['user_token']);
		$data['delete'] = $this->url->link('design/tag.delete', 'user_token=' . $this->session->data['user_token']);

		$data['list'] = $this->getList();

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('design/tag', $data));
	}

	/**
	 * List
	 *
	 * @return void
	 */
	public function list(): void {
		$this->load->language('design/tag');

		$this->response->setOutput($this->getList());
	}

	/**
	 * Get List
	 *
	 * @return string
	 */
	public function getList(): string {
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_slug'])) {
			$filter_slug = $this->request->get['filter_slug'];
		} else {
			$filter_slug = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_slug'])) {
			$url .= '&filter_slug=' . urlencode(html_entity_decode($this->request->get['filter_slug'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['action'] = $this->url->link('design/tag.list', 'user_token=' . $this->session->data['user_token'] . $url);

		$this->load->model('design/tag');

		$data['tags'] = [];

		$filter_data = [
			'filter_name' => $filter_name,
			'filter_slug' => $filter_slug,
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit' => $this->config->get('config_pagination_admin')
		];

		$tag_total = $this->model_design_tag->getTotalTags($filter_data);

		$results = $this->model_design_tag->getTags($filter_data);

		foreach ($results as $result) {
			$data['tags'][] = [
				'tag_id'      => $result['tag_id'],
				'name'        => $result['name'],
				'slug'        => $result['slug'],
				'description' => $result['description'],
				'count'       => $result['count'],
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'        => $this->url->link('design/tag.form', 'user_token=' . $this->session->data['user_token'] . '&tag_id=' . $result['tag_id'] . $url)
			];
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_slug'])) {
			$url .= '&filter_slug=' . urlencode(html_entity_decode($this->request->get['filter_slug'], ENT_QUOTES, 'UTF-8'));
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('design/tag.list', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url);
		$data['sort_slug'] = $this->url->link('design/tag.list', 'user_token=' . $this->session->data['user_token'] . '&sort=slug' . $url);
		$data['sort_count'] = $this->url->link('design/tag.list', 'user_token=' . $this->session->data['user_token'] . '&sort=count' . $url);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_slug'])) {
			$url .= '&filter_slug=' . urlencode(html_entity_decode($this->request->get['filter_slug'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $tag_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('design/tag.list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($tag_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($tag_total - $this->config->get('config_pagination_admin'))) ? $tag_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $tag_total, ceil($tag_total / $this->config->get('config_pagination_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['filter_name'] = $filter_name;
		$data['filter_slug'] = $filter_slug;

		return $this->load->view('design/tag_list', $data);
	}

	/**
	 * Form
	 *
	 * @return void
	 */
	public function form(): void {
		$this->load->language('design/tag');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('design/tag', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('design/tag.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('design/tag', 'user_token=' . $this->session->data['user_token']);

		if (isset($this->request->get['tag_id'])) {
			$this->load->model('design/tag');
			$tag_info = $this->model_design_tag->getTag((int)$this->request->get['tag_id']);
		}

		if (isset($this->request->get['tag_id'])) {
			$data['tag_id'] = (int)$this->request->get['tag_id'];
		} else {
			$data['tag_id'] = 0;
		}

		if (!empty($tag_info)) {
			$data['name'] = $tag_info['name'];
			$data['slug'] = $tag_info['slug'];
			$data['description'] = $tag_info['description'];
		} else {
			$data['name'] = '';
			$data['slug'] = '';
			$data['description'] = '';
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('design/tag_form', $data));
	}

	/**
	 * Save
	 *
	 * @return void
	 */
	public function save(): void {
		$this->load->language('design/tag');

		$json = [];

		if (!$this->user->hasPermission('modify', 'design/tag')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 1) || (oc_strlen($this->request->post['name']) > 255)) {
			$json['error']['name'] = $this->language->get('error_name');
		}

		if (isset($json['error']) && !isset($json['error']['warning'])) {
			$json['error']['warning'] = $this->language->get('error_warning');
		}

		if (!$json) {
			$this->load->model('design/tag');

			if (!$this->request->post['tag_id']) {
				$this->model_design_tag->addTag($this->request->post);
			} else {
				$this->model_design_tag->editTag((int)$this->request->post['tag_id'], $this->request->post);
			}

			$json['success'] = $this->language->get('text_success');
			$json['redirect'] = $this->url->link('design/tag', 'user_token=' . $this->session->data['user_token']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	/**
	 * Delete
	 *
	 * @return void
	 */
	public function delete(): void {
		$this->load->language('design/tag');

		$json = [];

		if (isset($this->request->post['selected'])) {
			$selected = $this->request->post['selected'];
		} else {
			$selected = [];
		}

		if (!$this->user->hasPermission('modify', 'design/tag')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('design/tag');

			foreach ($selected as $tag_id) {
				$this->model_design_tag->deleteTag((int)$tag_id);
			}

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}

