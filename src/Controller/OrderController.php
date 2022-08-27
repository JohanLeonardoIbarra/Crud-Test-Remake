<?php

namespace App\Controller;

use App\Document\Order;
use App\Entity\User;
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
        $orders = $documentManager->getRepository(Order::class)->findAll();

        return $this->json($orders);
    }

    #[Route('/list/{email}', name: 'app_order_fin', methods: ['GET'])]
    public function find(User $user = null, DocumentManager $documentManager): JsonResponse
    {
        if (!$user) {
            return $this->json(null, status: 404);
        }

        $orders = $documentManager
            ->getRepository(Order::class)
            ->findBy(["userId" => $user->getId()]);
        if (!$orders) {
            return $this->json(null, status: 404);
        }

        return $this->json($orders);
    }

    #[Route('/new/{email}', name: 'app_order_new', methods: ['POST'])]
    public function new(User $user = null, Request $request, DocumentManager $documentManager): JsonResponse
    {
        $order = new Order();
        if (!$user) {
            return $this->json(null, status: 404);
        }

        $form = $this->createForm(OrderType::class, $order);
        $form->submit($request->toArray());
        if ($form->isSubmitted() && $form->isValid()) {
            $order->setUserId($user->getId());
            $documentManager->persist($order);
            $documentManager->flush();

            return $this->json($order);
        }

        $errors = $form->getErrors(true);
        $msg = [];
        foreach ($errors as $error) {
            $msg[] = $error->getMessage();
        }

        return $this->json(["errors" => $errors], 400);
    }

    #[Route('/{id}/edit', name: 'app_order_edit', methods: ['PUT'])]
    public function edit(Order $order = null, Request $request, DocumentManager $documentManager): JsonResponse
    {
        if (!$order){
            return $this->json(null, status: 404);
        }
        $form = $this->createForm(OrderType::class, $order);
        $form->submit($request->toArray());
        if ($form->isSubmitted() && $form->isValid()) {
            $order = $form->getData();
            $documentManager->persist($order);
            $documentManager->flush();

            return $this->json($order, 201);
        }

        $errors = $form->getErrors(true);
        $msg = [];
        foreach ($errors as $error) {
            $msg[] = $error;
        }

        return $this->json($msg, 400);
    }

    #[Route('/{id}', name: 'app_order_delete', methods: ['DELETE'])]
    public function delete(Order $order, DocumentManager $documentManager): JsonResponse
    {
        if (!$order) {
            return $this->json(null, 404);
        }
        $documentManager->remove($order);
        $documentManager->flush();

        return $this->json(null, status: 200);
    }
}
