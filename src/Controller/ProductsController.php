<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Categories;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class ProductsController extends Controller
{
    /**
     * @Route("/products", name="products")
     */
    public function index()
    {


        $category = new Categories();
        $category->setTitle('Race Bike');

        $product = new Products();
        $product->setTitle('Orbea Super sport');
        $product->setPrice(1999.99);
        $product->setActive('1');

        $product->setCategory($category);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );

    }


    /**
     * @Route("/products/delete/{id}")
     *
     */
    public function delete(Request $request, $id) {
        $product = $this->getDoctrine()->getRepository(Products::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();


        return new Response(
            "Product removed"
        );

    }



}
