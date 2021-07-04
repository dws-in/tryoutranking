<?php

namespace App\Services;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeServiceLibrary2 implements QRCodeServiceInterface //SimpleSoftware
{
    public function generate($data)
    {
        return QrCode::size(130)->generate($data);
    }
}
