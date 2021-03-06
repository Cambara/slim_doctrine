<?php
namespace App\login\model\repository;
use App\login\model\entity\Login;
class LoginRepository
{
    private static $LOGINLOCATION = 'App\login\model\entity\Login';

    public function put(Login $login)
    {
        global $entityManager;
        if($login->getId() != ''){
            $login = $entityManager->merge($login);
        }else{
            $entityManager->persist($login);
        }
        $entityManager->flush();
        return $login;
    }
    public function remove($id)
    {
        global $entityManager;
        $login = $this->getLogin($id);
        if($login != null){
            $entityManager->remove($login);
            $entityManager->flush();
        }
        return $login;

    }
    public function getList()
    {
        global $entityManager;
        return $entityManager->getRepository($this::$LOGINLOCATION)->findAll();
    }
    public function getLogin($id)
    {
        global $entityManager;
        return $entityManager->find($this::$LOGINLOCATION,$id);
    }
    public function getLoginByEmailPassword($email,$password)
    {
        global $entityManager;
        return $entityManager->getRepository($this::$LOGINLOCATION)->findOneBy(array('email'=>$email,'password'=>$password));
    }

}