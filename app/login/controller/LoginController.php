<?php
namespace App\login\controller;
use App\login\model\entity\User;

class LoginController
{

	public function listUser()
	{
		global $entityManager;
		return $entityManager->getRepository('App\login\model\entity\User')->findAll();
	}
}