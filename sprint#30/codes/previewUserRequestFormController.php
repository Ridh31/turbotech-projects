<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewUserRequestFormController extends Controller {

    public static function userRequestFormPreview() {

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
        $html     = self::userRequestFormPreviewPDF();
        $formName = "User Request Form";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function userRequestFormPreviewPDF() {

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
                                    <div style="color: black; font-size: 24px; font-family: khmerosmoullight;"> ក្រុមហ៊ុន ធើបូថេក ឯ.ក </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center;">
                                    <div style="color: black; font-size: 20px; font-family: khmerosmoullight; margin-left: 30px;"> TURBOTECH CO.,LTD </div>
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

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> USER REQUEST FORM </div>
                </div>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * user name, gender, etc ...
        *--------------------------------------------------------------------------
        */
        $userDetails = '

            <div class="row"><br>

                <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> User&#39;s name: </span>
                <span>____________________________________</span>

                <span> Sex: </span>
                <span>______________</span>

                <span> Mobile: </span>
                <span>_________________________</span>
            </div>

            <div class="row"><br>
                <span> Position: </span>
                <span>_____________________________________________________________________________________________</span>
            </div>

            <div class="row"><br>
                <span> Department: </span>
                <span>_________________________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * object request/action ➤ checkboxes
        *--------------------------------------------------------------------------
        */
        $objectRequest = '

            <div class="row"><br>
                <div> Object Request/Action: </div>
            </div><br>

            <table border="0">
                <tr>
                    <td colspan="1" style="text-align: left; padding: 0px 90px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Add new </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 90px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Change </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 90px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Delete </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 90px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Others </span>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> User in system </span>
                    </td>

                    <td style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Chart Account </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Computer problem solving </span>
                    </td>
                </tr>
            </table>

            <div class="row"><br>
                <span> Others: </span>
                <span>______________________________________________________________________________________________</span>
            </div>

            <div class="row"><br>
                <span> Problem or Upgrade: </span>
                <span>________________________________________________________________________________</span><br><br>
                <span>______________________________________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * request to department
        *--------------------------------------------------------------------------
        */
        $requestToDepartment = '

            <div class="row"><br>
                <div> Request to department: </div>
            </div><br>

            <div class="row">

                <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> Date requested: </span>
                <span>_______________________</span>

                <span> Requested by (Sign & name): </span>
                <span>________________________________</span>
            </div>

            <div class="row"><br>
                <span> Approved by (Sign & name): </span>
                <span>___________________________________</span>
            </div>

            <div class="row"><br>

                <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> Date received: </span>
                <span>_________________________</span>

                <span> Received by (Sign & name): </span>
                <span>_________________________________</span>
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
                    <td style="padding: 400px 0px 0px 20px;">
                        <div style="color: black; font-size: 14px;"> TT-ITD-UAMP-FM-001 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo .$formSubject .$userDetails .$objectRequest .$requestToDepartment .$formId;
    }
}