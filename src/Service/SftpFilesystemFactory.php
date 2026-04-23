<?php

namespace App\Service;

use App\Entity\Empresa;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemOperator;
use League\Flysystem\PhpseclibV3\SftpAdapter;
use League\Flysystem\PhpseclibV3\SftpConnectionProvider;

class SftpFilesystemFactory
{
    public function create(Empresa $empresa, string $passwordDesencriptado): FilesystemOperator
    {
        $connectionProvider = new SftpConnectionProvider(
            host: $empresa->getHost(),
            username: $empresa->getUsuario(),
            password: $passwordDesencriptado,
            port: $empresa->getPuerto(),
            timeout: 10
        );

        $adapter = new SftpAdapter(
            connectionProvider: $connectionProvider,
            root: $empresa->getRemotePath()
        );

        return new Filesystem($adapter);
    }
}

