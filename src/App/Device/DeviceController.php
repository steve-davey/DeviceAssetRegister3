<?php

namespace App\Device;

use App\Responder;
use App\TemplateRenderer;
use App\DeviceMapper;

require 'DeviceMapper.php';

include 'DeviceMapper.php';

class DeviceController
{
    public function __construct(
        private DeviceMapper $mapper,
        private TemplateRenderer $template
    ) {
    }

    public function index()
    {
        $data = $this->mapper->getAll();
        if (! $data) {
            return (new Responder($this->template))->notFound();
        }
        return $this->template->render(
            '../templates/home.php',
            [
                'records' => $data,
                'view' => $this->template  # To pass the escape function to the template
            ]
        );
    }

    public function read(int $id)
    {
        $data = $this->mapper->getById($id);
        if (! $data) {
            return (new Responder($this->template))->notFound();
        }
        return $this->template->render(
            '../templates/single.php',
            [
                'record' => $data,
                'view' => $this->template
            ]
        );
    }

}