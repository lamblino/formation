<?php

// Controlleur pour le panier avec les routes : 
//     - Panier


namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Symfony\Component\Validator\Constraints\IsNull;


class PanierController extends Controller
{
    /**
     * @Route("/panier", name="Panier")
     */

    public function Review(Request $request){
     
      
//         $id =$request->get('idproduct');
        $id ="13";
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->findByid($id);
        
        $Panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBySomething("bonjour");
        
        
       
        $panier=new Panier();
        $panier->setProduct($Product);
       
        $em = $this->getDoctrine()->getManager();
        $em->persist($panier);
        $em->flush();
        
        foreach ($Panier as $Paniers){
     
            if (is_null($Paniers->getProduct())){
                

            }
        }

        return new Response("<html><body><p>test</p></body></html>");
    
    
        
    }
}
?>