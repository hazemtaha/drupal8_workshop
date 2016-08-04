<?php
namespace Drupal\news\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends ControllerBase {

	public function normal_add(Request $request) {
		$type = node_type_load('news');
		$node = $this->entityManager()->getStorage('node')->create(array(
			'type' => $type->id(),
		));
		$node_submission_form = $this->entityFormBuilder()->getForm($node);

		return array(
			'#type' => 'markup',
			'#markup' => render($node_submission_form),
		);
	}

	public function normal_edit(NodeInterface $node, Request $request) {
		$current_user_temp = \Drupal::currentUser();
		$current_user = User::load($current_user_temp->id());
		$current_user_roles = $current_user->getRoles();
		if ($current_user->id() == $node->uid or in_array('administrator', $current_user_roles)) {

			$node_submission_form = $this->entityFormBuilder()->getForm($node);
			return array(
				'#type' => 'markup',
				'#markup' => render($node_submission_form),
			);
		}
		return $this->redirect('view.user_news.page_1');
	}

	public function normal_delete(NodeInterface $node, Request $request) {
		$current_user_temp = \Drupal::currentUser();
		$current_user = User::load($current_user_temp->id());
		$current_user_roles = $current_user->getRoles();
		if ($current_user->id() == $node->uid or in_array('administrator', $current_user_roles)) {
			$node->delete();
		}
		return $this->redirect('view.user_news.page_1');
	}
}
