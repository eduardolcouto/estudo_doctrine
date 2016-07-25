<?php
	
namespace App\Entity;

/**
 * @Entity
 * @Table(name="categories")
 */ 
class Category{

	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	 * @column(type="string", length=100)
	 */
	private $name;

	/**
	 * @column(type="string", length=1)
	 */
	private $active;

    public function getId(){
    	return $this->id;
    }

    public function getName(){
    	return $this->name;
    }

    public function setName($name){
    	$this->name = $name;
    	return $this;
    }

    public function getactive(){
    	return $this->active;
    }

    public function setactive($active){
    	$this->active = $active;
    	return $this;
    }


}