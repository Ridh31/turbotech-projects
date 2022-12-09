<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewDataCenterEquipmentRenameRelocateRequestController extends Controller {

    public static function dataCenterEquipmentRenameRelocateRequestPreview() {

        $defaultConfig      = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs           = $defaultConfig["fontDir"];
        $mydir              = array_merge($fontDirs,[public_path("/fonts")]);
        $defaultFontConfig  = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData           = $defaultFontConfig["fontdata"];

        // font config
        $config = [
            
            "mode"              => "utf-8",
            "autoScriptToLang"  => true,
            "autoLangToFont"    => false,
            "tempDir"           => public_path("/inventory/products/mpdf"),
            "fontDir"           => $mydir,
            "fontdata"          => $fontData + [

                "khmerosmoullight"  => array(
                    "R"             => "Khmer-OS-Muol-Light.ttf",
                    "useOTL"        => 0xFF,
                ),
                "khmeroscontent"    => array(
                    "R"             => "KhmerOS_content.ttf",
                    "useOTL"        => 0xFF,
                ),
                "content"           => array(
                    "R"             => "Content-Regular.ttf",
                    "B"             => "Content-Bold.ttf",
                    "useOTL"        => 0xFF,
                ),
                "metal"             => array(
                    "R"             => "Metal-Regular.ttf",
                    "useOTL"        => 0xFF,
                ),
                "timenewroman"      => array(
                    "R"             => "times_new_roman.ttf",
                    "I"             => "times_new_roman_italic.ttf",
                    "useOTL"        => 0xFF,
                ),
                "ttstandinvoice"    => array(
                    "R"             => "Content-TimesNewRoman.otf",
                    "useOTL"        => 0xFF,
                ),
            ],
            "default_font"          => "georgia",
            "padding_header"        => 300,

            // papper size
            "format" => "A4",

        ];

        $mpdf     = new \Mpdf\Mpdf($config);
        $html     = self::dataCenterEquipmentRenameRelocateRequestPreviewPDF();
        $formName = "Data Center Equipment Rename/Relocate Request";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function dataCenterEquipmentRenameRelocateRequestPreviewPDF() {

       /*
        *--------------------------------------------------------------------------
        * company logo & company name
        *--------------------------------------------------------------------------
        */
        $companyLogo = '

            <table border="0">
                <tr>

                    <td style="padding: 0px 0px 0px 100px;">
                        <img style="width: 130px;" src="images/logo.png">
                    </td>

                    <td>
                        <table border="0" align="center">

                            <tr>
                                <td>
                                    <div style="font-size: 24px; font-family: khmerosmoullight;"> ក្រុមហ៊ុន ធើបូថេក ឯ.ក </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center;">
                                    <div style="font-size: 20px; font-family: khmerosmoullight; margin-left: 30px;"> TURBOTECH CO.,LTD </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <br><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * form subject or title
        *--------------------------------------------------------------------------
        */
        $formSubject = '

            <div><br>
                <div align="center">
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> DATA CENTER EQUIPMENT RENAME/RELOCATE REQUEST </div>
                </div>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * requestor & office & department & description & approved by
        *--------------------------------------------------------------------------
        */
        $content = '
        
            <table border="0" style="border-collapse: collapse;">
                <tr>
                    <td colspan="1" style="padding: 0px 295px 0px 0px;">
                    </td>

                    <td colspan="1" style="font-size: 14px;">
                        <span> Requested Date: </span>
                        <span>___________________________________________</span>
                    </td>
                </tr>
            </table>

            <div style="font-size: 14px;"><br>
                <span> Requestor Name: </span>
                <span>_________________________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>
                <span> Requestor Email: </span>
                <span>_________________________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>
                <span> Office/Daytime Phone: </span>
                <span>____________________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>
                <span> Department/Company/Suppliers: </span>
                <span>&thinsp;_________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>
                <span> Description purpose of change: </span>
                <span>___________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>

                <span> Approved by: </span>
                <span>&thinsp;_________________________________________</span>

                <span> Date: </span>
                <span>&thinsp;_____________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * form id at the bottom of the page
        *--------------------------------------------------------------------------
        */
        $formId = '
            
            <table border="0" align="right">
                <tr>
                    <td style="padding: 549.5px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-DCP-FM-006 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo .$formSubject .$content .$formId;
    }
}