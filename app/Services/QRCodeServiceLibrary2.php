<?php

namespace App\Services;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeServiceLibrary2 implements QRCodeServiceInterface
{
    public function generate($data)
    {
        return QrCode::size(200)->style('round')->generate("$data");
    }
}