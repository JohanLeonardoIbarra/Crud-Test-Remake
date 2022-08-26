<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_list', methods: ["GET"])]
    public function index(UserRepository $userRepository): JsonResponse
    {
        $users = $userRepository->findAll();

        return $this->json($users);
    }

    #[Route('/list/{id}', name: 'app_user_find', methods: ["GET"])]
    public function find(User $user = null){
        if (!$user) {
            return $this->json([], 404);
        }

        return $this->json($user);
    }

    #[Route('/new', name: 'app_user_create', methods: ["POST"])]
    public function new(UserRepository $userRepository, Request $request): JsonResponse
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->submit($request->toArray());
        if (!$form->isValid()) {
            return $this->json($form->getErrors(), 400);
        }

        $userRepository->add($user, true);

        return $this->json($user);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ["PUT"])]
    public function edit(User $user ,UserRepository $userRepository, Request $request): JsonResponse
    {
        $form = $this->createForm(UserType::class, $user);
        $form->submit($request->toArray());
        if (!$form->isValid()) {
            return $this->json($form->getErrors(), 400);
        }

        $userRepository->add($user, true);

        return $this->json($user, 202);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ["DELETE"])]
    public function delete(User $user, UserRepository $userRepository): JsonResponse
    {
        $userRepository->remove($user);
        return new JsonResponse(null, 200);
    }
}
