<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewDataCenterSecurityAccessRequestController extends Controller {

    public static function dataCenterSecurityAccessRequestPreview() {

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
        $html     = self::dataCenterSecurityAccessRequestPreviewPDF();
        $formName = "Data Center Security Access Request";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function dataCenterSecurityAccessRequestPreviewPDF() {

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
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> DATA CENTER SECURITY ACCESS REQUEST </div>
                </div>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * personal information: name & department & job title & phone & employee id
        *--------------------------------------------------------------------------
        */
        $personalInformation = '

            <div style="font-size: 14px; font-weight: bold;">Personal Information</div><br>
        
            <table border="0" style="border-collapse: collapse;">
                <tr>
                    <td colspan="1" style="font-size: 14px;">
                        <span> Name: </span>
                        <span>_____________________________________</span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 80px;">
                        <span> Department: </span>
                        <span>_____________________________________</span>
                    </td>
                </tr>
            </table><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px;">
                        <span> Job title: </span>
                        <span>___________________________________</span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 80px;">
                        <span> Phone:&thinsp; </span>
                        <span>&thinsp;__________________________________________</span>
                    </td>
                </tr>
            </table><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px;">
                        <span> Employee ID: </span>
                        <span>______________________________</span>
                    </td>
                </tr>
            </table><br>
        ';

        /*
        *--------------------------------------------------------------------------------------------------------------------
        * authorization: building & name requestor's & department head's name & data center manager's name & signature, data
        *--------------------------------------------------------------------------------------------------------------------
        */
        $authorization = '

            <div style="font-size: 14px; font-weight: bold;">Authorization</div><br>

            <div style="font-size: 14px;">
                <span> Building: </span>
                <span>__________________________________________________________________________________________________</span>
            </div><br>

            <div style="font-size: 13px; font-style: italic;">
                Sign, data and return completed form to Data Center Manager: TURBOTECH building. With my signature, I agree to adhere to
                establish Data Center Policies and Procedures. I understand that breach of this agreement with IT Department is ground for
                immediate revocation of access to the Data Center and that I may be held responsible for further displinary action.
            </div><br>

            <div style="font-size: 14px;"><br>
                <span> Name Requester&#39;s: </span>
                <span>_________________________</span>

                <span> signature: </span>
                <span>_________________________</span>

                <span> Date: </span>
                <span>___________________</span>
            </div><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px -0.5px">
                        <span> Manager or Department&#39;s name: </span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 120px">
                        <span> Manager or Department&#39;s signature: </span>
                    </td>
                </tr>
            </table><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px;">
                        <span>_____________________________________________</span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 46px">
                        <span>_____________________________</span>

                        <span> Date: </span>
                        <span>___________________</span>
                    </td>
                </tr>
            </table><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px -0.5px">
                        <span> Data Center Manager&#39;s name: </span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 137px">
                        <span> Data Center Manager&#39;s signature: </span>
                    </td>
                </tr>
            </table><br>

            <table border="0" style="border-collapse: collapse;">         
                <tr>
                    <td colspan="1" style="font-size: 14px;">
                        <span>_____________________________________________</span>
                    </td>

                    <td colspan="1" style="font-size: 14px; padding: 0px 0px 0px 46px">
                        <span>_____________________________</span>

                        <span> Date: </span>
                        <span>___________________</span>
                    </td>
                </tr>
            </table><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * form id at the bottom of the page
        *--------------------------------------------------------------------------
        */
        $formId = '
            
            <table border="0" align="right">
                <tr>
                    <td style="padding: 265px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-DCP-FM-007 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo .$formSubject .$personalInformation .$authorization .$formId;
    }
}