<?php

namespace RasPiSecurity;

use DirectoryIterator;

class FilesRepository
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var integer
     */
    private $perPage = 12;

    /**
     * @param string $baseUrl
     * @param integer $perPage
     */
    public function __construct($baseUrl, $perPage)
    {
        $this->baseUrl = $baseUrl;
        $this->perPage = $perPage;
    }

    /**
     * @param string $path
     * @param string $pi
     * @param string $type
     * @param integer $page
     *
     * @return []
     */
    public function getFiles($path, $pi, $type, $page)
    {
        $path = sprintf('%s/%s/%s', $path, $pi, $type);

        if (!file_exists($path)) {
            return [];
        }


        $files = [];
        $dir = new DirectoryIterator($path);

        foreach ($dir as $fileInfo) {
            if (!$fileInfo->isDot()) {
                $files[$fileInfo->getCTime()] = [
                    'url' => $this->baseUrl.'/motion-images/'.$pi.'/'.$type.'/'.$fileInfo->getFileName(),
                    'fileName' => $fileInfo->getFileName(),
                    'size' => $this->formateBytes(filesize($fileInfo->getPathName())),
                    'createdAt' => new \DateTime(date('c', $fileInfo->getCTime())),
                ];
            }
        }

        ksort($files);

        $files = array_reverse($files);

        $offset = ($page - 1) * $this->perPage;

        return array_slice($files, $offset, $this->perPage);
    }

    /**
     * @return string
     */
    private function formateBytes($size)
    {
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $power = $size > 0 ? floor(log($size, 1024)) : 0;

        return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
    }
}
