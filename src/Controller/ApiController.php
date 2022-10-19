<?php

namespace App\Controller;

use App\Manager\ParsingManager;
use App\Manager\QueueManager;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route ("/parse", name="parse_file", methods={"POST"})
     */
    public function parseFile(Request $request): JsonResponse
    {
        $a = 0;

        /** @var ParsingManager $parsingManager */
        try {
            $parsingManager = $this->container->get('parsing_manager');
        } catch (NotFoundExceptionInterface $e) {
        } catch (ContainerExceptionInterface $e) {
            return new JsonResponse([
                'status'  => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }

        /** @var QueueManager $queueManager */
        try {
            $queueManager = $this->container->get('queue_manager');
        } catch (NotFoundExceptionInterface $e) {
        } catch (ContainerExceptionInterface $e) {
            return new JsonResponse([
                'status'  => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }


        return new JsonResponse([
            'status'  => 200,
            'success' => 'File has been parsed successfully'
        ]);


    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @Route ("/get-data", name="get_data", methods={"GET"})
     */
    public function getParsedFile(Request $request): JsonResponse
    {
        $filename = $request->get('filename');

        /** @var QueueManager $queueManager */
        try {
            $queueManager = $this->container->get('queue_manager');
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            return new JsonResponse([
                'status' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }

        return new JsonResponse([
            'status' => 200,
            //TODO: вывести файл
            'data'   => [],
        ]);

    }

}