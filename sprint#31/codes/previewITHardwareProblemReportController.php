<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewITHardwareProblemReportController extends Controller {

    public static function ITHardwareProblemReportPreview() {

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
        $html     = self::ITHardwareProblemReportPreviewPDF();
        $formName = "IT Hardware Problem Report";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function ITHardwareProblemReportPreviewPDF() {

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
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> IT HARDWARE PROBLEM REPORT </div>
                </div>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * name & sec & tel & position & computer hardware access code & used by
        *--------------------------------------------------------------------------
        */
        $checkerDetails = '

            <div style="font-size: 14px;">
                <span> 1- </span>

                <span> Checker: </span>
                <span>_________________________________</span>

                <span> Sex: </span>
                <span>_____________</span>

                <span> Tel: </span>
                <span>______________________________________</span>
            </div><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px -0.5px">
                        <span> 2- </span>
                        <span> Position </span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 80px">
                        <span style="font-size: 16px;"> ◻ </span>
                        <span> IT Manager </span>
                    </td>
                    
                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 16px">
                        <span style="font-size: 16px;"> ◻ </span>
                        <span> Senior IT Officer </span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 16px">
                        <span style="font-size: 16px;"> ◻ </span>
                        <span> IT Officer </span>
                        <span>____________</span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 16px">
                        <span style="font-size: 16px;"> ◻ </span>
                        <span> IT Assistant </span>
                    </td>
                </tr>
            </table><br>

            <div style="font-size: 14px;">
                <span> 3- </span>

                <span> Computer/Hardware Asset Code: </span>
                <span>____________________________</span>

                <span> Used by: </span>
                <span>&thinsp;________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span> 4- </span>

                <span> Department or Branch: </span>
                <span>&thinsp;________________________________________________________________________________</span>
            </div><br>
        ';

        /*
        *--------------------------------------------------------------------------
        * date & description & solving
        *--------------------------------------------------------------------------
        */
        $problem = '

            <div style="font-size: 14px;">
                <span> 5- </span>

                <span> Date of Problem: </span>
                <span>_______________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span> 6- </span>

                <span> Problems Descriptions: </span>
                <span>&thinsp;________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span>&thinsp;___________________________________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span> 7- </span>

                <span> Problems Solving: </span>
                <span>______________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span>&thinsp;___________________________________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span> Date Solving: </span>
                <span>______________________</span>
            </div><br>
        ';

        /*
        *--------------------------------------------------------------------------
        * controller/checker & approved IT manager
        *--------------------------------------------------------------------------
        */
        $controllerApproved = '

            <div style="font-size: 14px;">
                <span> 8- </span>

                <span> Controller/Checker (Sign and Name): </span>
                <span>&thinsp;__________________________________________________________________</span>
            </div><br>

            <div style="font-size: 14px;">
                <span> 9- </span>

                <span> Approved IT Manager (Sign and Name): </span>
                <span>&thinsp;_______________________________________________________________</span>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * form id at the bottom of the page
        *--------------------------------------------------------------------------
        */
        $formId = '
            
            <table border="0" align="right">
                <tr>
                    <td style="padding: 335px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-UAMP-FM-008 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo .$formSubject .$checkerDetails .$problem .$controllerApproved .$formId;
    }
}