<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewChangeRequestFormController extends Controller {

    public static function changeRequestFormPreview() {

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
        $html     = self::changeRequestFormPreviewPDF();
        $formName = "Change Request Form";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function changeRequestFormPreviewPDF() {

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
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> CHANGE REQUEST FORM </div>
                </div>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * user name, gender, etc ...
        *--------------------------------------------------------------------------
        */
        $userDetails = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">1. </span>

                <span> Name&#39;s Request: </span>
                <span>_____________________________</span>

                <span> Sex: </span>
                <span>___________&thinsp;</span>

                <span> Position: </span>
                <span>_______________________________</span>
            </div>

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">2. </span>

                <span> Department/Branch Name: </span>
                <span>_____________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * object request/description of change
        *--------------------------------------------------------------------------
        */
        $objectRequest = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">3. </span>

                <span> Object Request/Description of Change : </span>
                <span>________________________________________________________________</span>
            </div>

            <table style="border-collapse: collapse;" border="0" align="right">
                <tr>
                    <td><br>
                        <span>____________________________________________________________________________________________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * testing by IT & MIS staff
        *--------------------------------------------------------------------------
        */
        $testingByITAndMIS = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">4. </span>

                <span> Testing by IT/MIS Staff: </span>
                <span>________________________________________________________________________________</span>
            </div>

            <table style="border-collapse: collapse;" border="0" align="right">
                <tr>
                    <td><br>
                        <span>____________________________________________________________________________________________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * request by (sign and name) & date request
        *--------------------------------------------------------------------------
        */
        $dateRequestBy = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">5. </span>

                <span> Request by (Sign and Name): </span>
                <span>__________________________________</span>

                <span> Date Request: </span>
                <span>_________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * impact for chage/result with testing/module testing
        *--------------------------------------------------------------------------
        */
        $impactForChage = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">6. </span>

                <span> Impact for change/Result with testing/Module testing:&thinsp; </span>
                <span>_________________________________________________</span>
            </div>

            <table style="border-collapse: collapse;" border="0" align="right">
                <tr>
                    <td><br>
                        <span>____________________________________________________________________________________________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * controlled/checked/tested/verified by (sign and name)
        *--------------------------------------------------------------------------
        */
        $controlled = '

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;">7. </span>

                <span> Controlled/Checked/Tested/Verified by (Sign and Name):&thinsp; </span>
                <span>______________________________________________</span>
            </div>

            <table style="border-collapse: collapse;" border="0" align="right">
                <tr>
                    <td><br>
                        <span>____________________________________________________________________________________________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * approved by head & CEO
        *--------------------------------------------------------------------------
        */
        $approvedBy = '
            
            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;"> 8. </span>

                <span> Approved by Head of IT (Sign and Name):&thinsp; </span>
                <span>_____________________________________________________________</span>
            </div>

            <div style="font-size: 14px;"><br>

                <span style="font-weight: bold;"> 9. </span>

                <span> Approved by Chief Executive Officer (CEO) (Sign and Name): </span>
                <span>__________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * CEO approval as & form id at the bottom of the page
        *--------------------------------------------------------------------------
        */
        $CEOApprovalAndformId = '

            <table border="0">
                <tr>
                    <td style="padding: 200px 270px 0px 0px;">
                        <table border="1" style="border-collapse: collapse;">
                            <tr>
                                <td style="padding: 10px 65px 10px 10px;">
                                    <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> CEO Approval as: </div>
                                    <br>
                                    <table border="0" align="left">
                                        <tr>
                                            <td style="padding: 0px 0px 0px 30px">
                                                <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> - Database Rename </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 0px 0px 30px">
                                                <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> - Application Development </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 0px 0px 30px">
                                                <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> - New Products </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 0px 0px 30px">
                                                <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> - Upgrade Software Version </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding: 0px 0px 0px 30px">
                                                <div style="font-size: 12px; font-style: italic; font-family: khmerosmoullight;"> - Full Change System </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td style="padding: 300px -11px -29px 28px;">
                        <table border="0" align="right">
                            <tr>
                                <td>
                                    <div style="font-size: 12px;"> TT-ITD-UAMP-FM-009 </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo 
              .$formSubject 
              .$userDetails 
              .$objectRequest 
              .$testingByITAndMIS
              .$dateRequestBy 
              .$impactForChage 
              .$controlled 
              .$approvedBy 
              .$CEOApprovalAndformId;
    }
}