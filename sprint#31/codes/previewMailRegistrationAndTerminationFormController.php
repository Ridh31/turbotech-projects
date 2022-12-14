<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewMailRegistrationAndTerminationFormController extends Controller {

    public static function mailRegistrationAndTerminationFormPreview() {

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
        $html     = self::mailRegistrationAndTerminationFormPreviewPDF();
        $formName = "Mail Registration and Termination Form";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function mailRegistrationAndTerminationFormPreviewPDF() {

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
        ';

       /*
        *--------------------------------------------------------------------------
        * form subject or title
        *--------------------------------------------------------------------------
        */
        $formSubject = '

            <div><br>
                <div align="center">
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> MAIL REGISTRATION AND TERMINATION FORM </div>
                </div>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * registration information: first name, last name, etc...
        *--------------------------------------------------------------------------
        */
        $registrationInformation = '

            <div style="font-size: 14px; font-weight: bold; text-align: center;">
                <span> REGISTRATION INFORMATION </span>
            </div><br>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> First Name: </span>
                <span>______________________</span>

                <span> Last (family) name: </span>
                <span>______________________</span>

                <span> Institution/affiliation: </span>
                <span>_______</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Mailing address request: </span>
                <span>__________________________________________</span>

                <span> Account name: </span>
                <span>_______________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Password: </span>
                <span>_____________________________</span>

                <span> Telephone: </span>
                <span>_______________________________________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Dept: </span>
                <span>__________________________________</span>

                <span> E-mail address inform when completed:&thinsp; </span>
                <span>&thinsp;_________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Size of Mail Store: </span>
                <span>_____________________</span>

                <span>MB/GB</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Name as it appears on Header of Mail Pages: </span>
                <span>_____________________________________________________________</span>
            </div>

            <div style="font-size: 14px; font-style: italic; margin: 0px 0px 17px 0px;">
                <span> Request by: </span>
                <span>_________________________________</span>

                <span> Name/Position/Date: </span>
                <span>________________________________________</span>
            </div>

            <div style="font-size: 14px; font-style: italic; margin: 0px 0px 17px 0px;">
                <span> Authorized signature: </span>
                <span>_______________________</span>

                <span> Name/Position/Date: </span>
                <span>________________________________________</span>
            </div>

            <div style="font-size: 14px; font-style: italic; margin: 0px 0px 17px 0px;">
                <span> Approval and Registration by: </span>
                <span>_______________</span>

                <span> Name/Position/Date: </span>
                <span>&thinsp;_______________________________________</span>
            </div>

            <div style="font-size: 12px; font-style: italic;">
                <span> 
                    Noted: That you may termination either by mail, by completed form or by Email at info@turbotech.com and by copy to email
                    address itd.support@turbotech.com 
                </span>
            </div>

            <div style="font-size: 14px;">
                <span>&thinsp;___________________________________________________________________________________________________________</span>
            </div><br>
        ';

        /*
        *--------------------------------------------------------------------------
        * termination: dept/branch name, contact person, etc...
        *--------------------------------------------------------------------------
        */
        $termination = '

            <div style="font-size: 14px; font-weight: bold; text-align: center;">
                <span> TERMINATION </span>
            </div><br>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Dept/Branch name: </span>
                <span>____________________________</span>

                <span> Contact Person: </span>
                <span>__________________________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Account Number: </span>
                <span>______________________________</span>

                <span> Telephone:&thinsp; </span>
                <span>&thinsp;______________________________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> E-mail: </span>
                <span>____________________________________________________________________________________________________</span>
            </div>

            <div style="font-size: 14px; font-weight: bold; font-style: italic; margin: 0px 0px 17px 0px;">
                <span> Hereby agree to terminate: </span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Account Name: </span>
                <span>__________________________</span>

                <span> Email Address: </span>
                <span>_________________________________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Termination Date: </span>
                <span>_______________________</span>

                <span> Reason(s) for Termination: </span>
                <span>_____________________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Request Termination by: </span>
                <span>_____________________________</span>

                <span> Name/Position/Date: </span>
                <span>&thinsp;______________________________</span>
            </div>

            <div style="font-size: 14px; margin: 0px 0px 17px 0px;">
                <span> Authorized Termination signature:&thinsp; </span>
                <span>___________________________</span>

                <span> Name/Position/Date: </span>
                <span>______________________</span>
            </div>

            <div style="font-size: 14px;">
                <span> Approval and Termination by: </span>
                <span>_________________________________</span>

                <span> Name/Position/Date: </span>
                <span>&thinsp;_____________________</span>
            </div><br>

            <div style="font-size: 12px; font-style: italic;">
                <span> 
                    Noted: That you may termination either by mail, by completed form or by Email at info@turbotech.com and by copy to email
                    address itd.support@turbotech.com 
                </span>
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
                    <td style="padding: 10px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-UAMP-FM-003 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo .$formSubject .$registrationInformation .$termination .$formId;
    }
}