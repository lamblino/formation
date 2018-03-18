<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Product;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\DateType;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Nom;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Quantite;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="Paniers", cascade={"persist"}))
     * @ORM\JoinColumn(nullable=true)
     */
    Private $Product;
    
    
    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param mixed $Product
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->Products;
    }

    /**
     * @param mixed $Products
     */
    public function setProducts($Products)
    {
        $this->Products = $Products;
    }

    /**
     * @return mixed
     */
    
    // add your own fields

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomPanier()
    {
        return $this->NomPanier;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->Quantite;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $NomPanier
     */
    public function setNomPanier($NomPanier)
    {
        $this->NomPanier = $NomPanier;
    }

    /**
     * @param mixed $Quantite
     */
    public function setQuantite($Quantite)
    {
        $this->Quantite = $Quantite;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }
}
