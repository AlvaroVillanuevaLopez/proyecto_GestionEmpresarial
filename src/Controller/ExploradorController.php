<?php

namespace App\Controller;

use App\Entity\Empresa;
use App\Repository\EmpresaRepository;
use App\Service\GestorSftpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
#[Route('/explorador')]
class ExploradorController extends AbstractController
{
    #[Route('/', name: 'explorador_index')]
    public function index(EmpresaRepository $repo): Response
    {
        return $this->render('explorador/index.html.twig', [
            'empresas' => $repo->findAll(),
        ]);
    }

    #[Route('/{id<\d+>}', name: 'explorador_empresa')]
    public function empresa(Empresa $empresa): Response
    {
        return $this->render('explorador/empresa.html.twig', [
            'empresa' => $empresa,
        ]);
    }

#[Route('/{id<\d+>}/archivos', name: 'explorador_archivos_json', methods: ['GET'])]
public function archivosJson(Empresa $empresa, GestorSftpService $gestor): JsonResponse
{
    try {
        $pdfs = $gestor->listarPdfs($empresa);
        return $this->json(['success' => true, 'archivos' => $pdfs]);
    } catch (\Exception $e) {
        return $this->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}

#[Route('/{id<\d+>}/subir', name: 'explorador_subir', methods: ['POST'])]
public function subir(Request $request, Empresa $empresa, GestorSftpService $gestor): JsonResponse
{
    if (!$this->getUser()) {
        return $this->json(['success' => false, 'error' => 'No autenticado'], 401);
    }

    $archivo = $request->files->get('pdf');

    if (!$archivo instanceof UploadedFile || $archivo->getMimeType() !== 'application/pdf') {
        return $this->json(['success' => false, 'error' => 'Solo se permiten archivos PDF'], 400);
    }

    try {
        $nombreBackup = $gestor->subirPdf($empresa, $archivo);
        return $this->json([
            'success' => true,
            'nombreBackup' => $nombreBackup
        ]);
    } catch (\Exception $e) {
        return $this->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}

#[Route('/{id<\d+>}/eliminar', name: 'explorador_eliminar', methods: ['POST'])]
#[IsGranted('ROLE_ADMIN')]
public function eliminar(Empresa $empresa, Request $request, GestorSftpService $sftpService): Response
    {
        $nombreArchivo = $request->request->get('archivo');

        if (!$nombreArchivo) {
            return $this->json(['status' => 'error', 'message' => 'Falta el nombre'], 400);
        }

        if ($sftpService->eliminarArchivo($empresa, $nombreArchivo)) {
            return $this->json(['status' => 'ok', 'message' => 'Borrado correctamente']);
        }

        return $this->json(['status' => 'error', 'message' => 'No se encontró el archivo en el SFTP'], 400);
    }
}

