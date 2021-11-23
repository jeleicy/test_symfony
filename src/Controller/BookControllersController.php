<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Customer;
use App\Entity\Purchase;

class BookControllersController extends AbstractController
{
    /**
     * @Route("/", name="book_controllers")
     */
    public function index(): Response
    {

        $authors = $this->getAuthorsBooks();
        $books = $this->getBooksBooks();
        $customers = $this->getCustomersBooks();
        $purchasess = $this->getPurchasesBooks();

        return $this->render('books/index.html.twig', [
            'controller_name' => 'BookController',
            'authors'=>$authors,
            'books'=>$books,
            'customers'=>$customers,
            'purchases'=>$purchasess,
        ]);
        
        /*
        return $this->render('books/index.html.twig', [
            'controller_name' => 'BookControllers...Controller',
        ]);
        */
    }

    public function getAuthorsBooks() {
        return $this->getDoctrine()
        ->getRepository(Author::class)
        ->findAll();
    }

    public function getBooksBooks() {
        return $this->getDoctrine()
        ->getRepository(Book::class)
        ->findAll();
    }

    public function getCustomersBooks() {
        return $this->getDoctrine()
        ->getRepository(Customer::class)
        ->findAll();
    }

    public function getPurchasesBooks() {
        return $this->getDoctrine()
        ->getRepository(Purchase::class)
        ->findAll();
    }
}
