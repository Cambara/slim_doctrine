<?php
namespace App\login\controller;
use App\login\model\repository\LoginRepository;

class LoginController
{
    private $repository;
	function __construct()
	{
        $this->repository = new LoginRepository();
	}

	public function getList()
	{
        return $this->repository->getList();
	}
    public function getLogin($id)
    {
        return $this->repository->getLogin($id);
    }
}