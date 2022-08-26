<?php

namespace App\Controller;

use App\Document\Order;
use App\Form\OrderType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/order")]
class OrderController extends AbstractController
{
    #[Route('/list', name: 'app_order_list', methods: ['GET'])]
    public function index(DocumentManager $documentManager): JsonResponse
    {
        $orders = $documentManager->getRepository()->findAll();

        return $this->json($orders);
    }

    #[Route('/{email}', name: 'app_order_fin', methods: ['GET'])]
    public function find(User $user = null, DocumentManager $documentManager): JsonResponse
    {
        if (!$user) {
            return $this->json([], 400);
        }

        $order = $documentManager
            ->getRepository(Order::class)
            ->findOneBy(["userId" => $user->getId()]);
        if (!$order){
            return $this->json([], 404);
        }

        return $this->json($order);
    }

    #[Route('/new', name: 'app_order_new', methods: ['POST'])]
    public function new(Request $request, DocumentManager $documentManager): JsonResponse
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $documentManager->persist($order);
            $documentManager->flush();

            return $this->json($order);
        }

        $errors = $form->getErrors(true);
        $msg = [];
        foreach ($errors as $error) {
            $msg[] = $error->getMessage();
        }

        return $this->json(["Errors" => $msg], 400);
    }

    #[Route('/{id}/edit', name: 'app_order_edit', methods: ['PUT'])]
    public function edit(Order $order){

        $form = $this->createForm(OrderType::class, $order);
    }
}
