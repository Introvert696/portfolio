<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'articles_index', methods: ["GET"])]
    public function index(): JsonResponse
    {
        return $this->json([]);
    }
    #[Route('/articles', name: 'articles_store', methods: ["POST"])]
    public function store(Request $request,$id): JsonResponse
    {
        return $this->json([]);
    }
    #[Route('/articles/{id}', name: 'articles_show', methods: ["GET"])]
    public function show($id): JsonResponse
    {
        return $this->json([]);
    }
    #[Route('/articles/{id}', name: 'articles_update', methods: ["PATH"])]
    public function update(Request $request,$id): JsonResponse
    {
        return $this->json([]);
    }
    #[Route('/articles/{id}', name: 'articles_delete', methods: ["DELETE"])]
    public function delete($id): JsonResponse
    {
        return $this->json([]);
    }
}
