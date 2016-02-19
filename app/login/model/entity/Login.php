<?php
namespace App\login\model\entity;
/**
 *
 * @Entity
 * @Table(name="login")
 */
class Login
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;
    /**
     * @Column(type="string",name="email")
     */
    protected $email;
    /**
     * @Column(type="string",name="password")
     */
    protected $password;
    /**
     * @Column(type="string", name="name")
     */
    protected $name;

    public function getId() {
        return $this->id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
}