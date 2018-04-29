<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="categories")
 */
class category
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Category
     * @Column(type="string", length=100)
     */
    private $category;
    /**
     * @Column(name="ativo", type="integer")
     */
    private $ativo;

	public function getAtivo() 
	{
		return $this->ativo;
	}

	public function setAtivo($ativo) 
	{
		$this->ativo = $ativo;
	}

	public function getId() 
	{
		return $this->id;
	} 

	public function getCategory() 
	{
		return $this->category;
	}

	public function setCategory($Category) 
	{
		$this->category = $Category;
	}
    
}
