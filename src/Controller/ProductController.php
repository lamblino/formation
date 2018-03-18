<?php
use App\Entity\Image;
use App\Entity\Product;
use App\Entity\Review;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Form;
use Doctrine\DBAL\Driver\PDOException;
class ProductController extends Controller
{
    /**
     * @Route("/admin/product_admin", name="product_admin")
     */
    public function registerProduct(Request $request,FileUploader $fileUploader)
    {
        // 1) build the form
        $Product = new Product();
        $form = $this->createForm(ProductType::class, $Product);
        return $this->render('admin\product_admin.html.twig',array(
}