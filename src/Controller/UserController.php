<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Context\Normalizer\ObjectNormalizerContextBuilder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/list', name: 'app_user_list', methods: ["GET"])]
    public function index(UserRepository $userRepository): JsonResponse
    {
        $context = (new ObjectNormalizerContextBuilder())->withGroups('listUsers')->toArray();
        $users = $userRepository->findAll();

        return $this->json($users, context: $context);
    }

    #[Route('/{id}', name: 'app_user_find', methods: ["GET"])]
    public function find(User $user = null): JsonResponse
    {
        $context = (new ObjectNormalizerContextBuilder())->withGroups('showUsers')->toArray();
        if (!$user) {
            return $this->json(null, 404);
        }

        return $this->json($user, context: $context);
    }

    #[Route('/new', name: 'app_user_create', methods: ["POST"])]
    public function new(UserRepository $userRepository, Request $request): JsonResponse
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->submit($request->toArray());
        if (!$form->isValid()) {
            $errors = $form->getErrors(true);
            $msg = [];
            foreach ($errors as $error) {
                $msg[] = $error->getMessage();
            }
            return $this->json(["errors" => $msg], 400);
        }

        $userRepository->add($user, true);
        $context = (new ObjectNormalizerContextBuilder())->withGroups('listUsers')->toArray();

        return $this->json($user, context: $context);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ["PUT"])]
    public function edit(User $user, UserRepository $userRepository, Request $request): JsonResponse
    {
        $form = $this->createForm(UserType::class, $user);
        $form->submit($request->toArray());
        if (!$form->isValid()) {
            $errors = $form->getErrors(true);
            $msg = [];
            foreach ($errors as $error) {
                $msg[] = $error->getMessage();
            }
            return $this->json(["Errors" => $msg], 400);
        }

        $userRepository->add($user, true);
        $context = (new ObjectNormalizerContextBuilder())->withGroups('listUsers')->toArray();

        return $this->json($user, 201, $context);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ["DELETE"])]
    public function delete(User $user = null, UserRepository $userRepository): JsonResponse
    {
        if (!$user){
            return $this->json(null, 404);
        }
        $userRepository->remove($user);

        return new JsonResponse(null);
    }
}
