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
        * css selectors
        *--------------------------------------------------------------------------
        */
        $cssSelectors = '

            <style>

                .checkbox-size {
                    font-size: 16px;
                }

                .text-size {
                    font-size: 14px;
                }

                .object-request-td-checkbox-row1-p {
                    padding: 0px 90px 0px 0px;
                }

                .object-request-td-checkbox-row2-p {
                    padding: 10px 0px 0px 0px;
                }

            </style>
        ';

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
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> USER REQUEST FORM </div>
                </div>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * user name, gender, etc ...
        *--------------------------------------------------------------------------
        */
        $userDetails = '

            <div class="text-size"><br>

                <span class="text-size"> User&#39;s name: </span>
                <span>__________________________________</span>

                <span> Sex: </span>
                <span>_______________</span>

                <span> Mobile: </span>
                <span>______________________________</span>
            </div>

            <div class="text-size"><br>
                <span> Position: </span>
                <span>__________________________________________________________________________________________________</span>
            </div>

            <div class="text-size"><br>
                <span> Department: </span>
                <span>______________________________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * object request/action ➤ checkboxes
        *--------------------------------------------------------------------------
        */
        $objectRequest = '

            <div class="text-size"><br>
                <div> Object Request/Action: </div>
            </div><br>

            <table border="0">
                <tr>
                    <td colspan="1" class="object-request-td-checkbox-row1-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Add new </span>
                    </td>

                    <td colspan="1" class="object-request-td-checkbox-row1-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Change </span>
                    </td>

                    <td colspan="1" class="object-request-td-checkbox-row1-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Delete </span>
                    </td>

                    <td colspan="1" class="object-request-td-checkbox-row1-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Others </span>
                    </td>
                </tr>

                <tr>
                    <td class="object-request-td-checkbox-row2-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> User in system </span>
                    </td>

                    <td class="object-request-td-checkbox-row2-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Chart Account </span>
                    </td>

                    <td colspan="2" class="object-request-td-checkbox-row2-p">
                        <span class="checkbox-size"> ◻ </span>
                        <span class="text-size"> Computer problem solving </span>
                    </td>
                </tr>
            </table>

            <div class="text-size"><br>
                <span> Others: </span>
                <span>___________________________________________________________________________________________________</span>
            </div>

            <div class="text-size"><br>
                <span> Problem or Upgrade: </span>
                <span>_____________________________________________________________________________________</span><br><br>
                <span>___________________________________________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * request to department
        *--------------------------------------------------------------------------
        */
        $requestToDepartment = '

            <div class="text-size"><br>
                <div> Request to department: </div>
            </div><br>

            <div class="text-size">

                <span> Date requested: </span>
                <span>_________________________</span>

                <span> Requested by (Sign & name): </span>
                <span>__________________________________</span>
            </div>

            <div class="text-size"><br>
                <span> Approved by (Sign & name): </span>
                <span>_____________________________________</span>
            </div>

            <div class="text-size"><br>

                <span> Date received: </span>
                <span>___________________________</span>

                <span> Received by (Sign & name): </span>
                <span>___________________________________</span>
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
                    <td style="padding: 328px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-UAMP-FM-001 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $cssSelectors .$companyLogo .$formSubject .$userDetails .$objectRequest .$requestToDepartment .$formId;
    }
}