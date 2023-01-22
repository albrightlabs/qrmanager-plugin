<?php namespace Albrightlabs\QRManager\Classes;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

//require_once('./../vendor/autoload.php');

class QRManager
{

    public static function generate()
    {

        $options = new QROptions([
            'eccLevel' => QRCode::ECC_L,
            'outputType' => QRCode::OUTPUT_MARKUP_SVG,
            'version' => 5,
        ]);

        $qrcode = (new QRCode($options))->render('https://albrightlabs.com');

        return $qrcode;
    }

}
