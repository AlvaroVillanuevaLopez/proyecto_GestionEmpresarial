<?php

namespace App\Service;

use App\Entity\Empresa;
use App\Entity\HistorialSubidas;
use Doctrine\ORM\EntityManagerInterface;
use League\Flysystem\FilesystemOperator;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class GestorSftpService
{
    public function __construct(
        private SftpPasswordCipher $cipher,
        private SftpFilesystemFactory $factory,
        private EntityManagerInterface $em,
        private Security $security
    ) {}

    private function getFs(Empresa $empresa): FilesystemOperator
    {
        $password = $this->cipher->decrypt($empresa->getPasswordEncriptada());
        return $this->factory->create($empresa, $password);
    }

    public function listarPdfs(Empresa $empresa): array
    {
        $fs = $this->getFs($empresa);

        $items = $fs->listContents('.', false);

        $pdfs = [];
        foreach ($items as $item) {
            if ($item->isFile() && str_ends_with(strtolower($item->path()), '.pdf')) {
                $pdfs[] = $item->path();
            }
        }

        return $pdfs;
    }

    public function subirPdf(Empresa $empresa, UploadedFile $archivo): ?string
    {
        $fs = $this->getFs($empresa);
        $nombreOriginal = $archivo->getClientOriginalName();
        $nombreBackup = null;

        if ($fs->fileExists($nombreOriginal)) {
            $nombreBackup = pathinfo($nombreOriginal, PATHINFO_FILENAME)
                . '_' . (new \DateTime())->format('Y-m-d_H-i-s')
                . '.pdf';
            $fs->move($nombreOriginal, $nombreBackup);
        }

        $stream = fopen($archivo->getPathname(), 'r');
        $fs->writeStream($nombreOriginal, $stream);
        fclose($stream);

        $historial = new HistorialSubidas();
        $historial->setEmpresa($empresa);
        $historial->setUser($this->security->getUser());
        $historial->setNombreOriginal($nombreOriginal);
        $historial->setNombreBackup($nombreBackup);
        $historial->setFechaSubida(new \DateTime());

        $this->em->persist($historial);
        $this->em->flush();

        return $nombreBackup;
    }

    public function listarTodo(Empresa $empresa): array
    {
        $fs = $this->getFs($empresa);
        $items = $fs->listContents('.', true);

        $todos = [];
        foreach ($items as $item) {
            $todos[] = [
                'path' => $item->path(),
                'type' => $item->isFile() ? 'file' : 'dir'
            ];
        }
        return $todos;
    }

    public function eliminarArchivo(Empresa $empresa, string $nombreArchivo): bool
    {
        $fs = $this->getFs($empresa);

        try {
            if ($fs->fileExists($nombreArchivo)) {
                $fs->delete($nombreArchivo);
                return true;
            }
        } catch (\Exception $e) {
            return false;
        }
        return false;
    }
}
