<?php
namespace App\login\controller;
use App\login\model\entity\Login;
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
    public function  addLogin($login){
        global $classService;
        $l = $classService->convertArrayToClass($login,new Login());
        return $this->repository->put($l);
    }
    public function editLogin($login){
        global $classService;
        $l = $classService->convertArrayToClass($login,new Login());
        return $l->getId() != ''?$this->repository->put($l):'sem id';
    }
    public function removeLogin($id){
        return $this->repository->remove($id);
    }
}