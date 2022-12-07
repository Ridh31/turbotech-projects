<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewServerRequestFormController extends Controller {

    public static function serverRequestFormPreview() {

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
        $html     = self::serverRequestFormPreviewPDF();
        $formName = "Server Request Form";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function serverRequestFormPreviewPDF() {

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
        ';

       /*
        *--------------------------------------------------------------------------
        * form subject or title
        *--------------------------------------------------------------------------
        */
        $formSubject = '

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> SERVER REQUEST FORM </div>
                </div>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * requesters information
        *--------------------------------------------------------------------------
        */
        $requestersInformation = '

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> Requesters Information </div>
                </div>
            </div><br>

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 0px 0px 0px 0px;">
                        <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> Name: </span>
                        <span>_________________________________________________________</span>
        
                        <span> Date: </span>
                        <span>_______________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span> Department: </span>
                        <span>______________________________________________</span>
        
                        <span> Title: </span>
                        <span>____________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span> Email Address: </span>
                        <span>__________________________________________________</span>
        
                        <span> Phone: </span>
                        <span>____________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span> Line Manager: </span>
                        <span>__________________________________________</span>
        
                        <span> Line Manager Phone: </span>
                        <span>_____________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * server information ➤ checkboxes
        *--------------------------------------------------------------------------
        */
        $serverInformation = '

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> Server Information </div>
                </div>
            </div>

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 4px 0px 0px 0px;">
                        <span> Type of server (check all that apply): </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 1px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Application Server </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 1px 0px 0px -40px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Database Server </span>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> File Server </span>
                    </td>

                    <td style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Web Server </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 10px 0px 0px 0px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> FTP Server </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 14px 0px 0px -20px;">
                        <span> Others: </span>
                        <span>____________________________________</span>
                    </td>
                </tr>
            </table><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * environment ➤ checkboxes (check only one)
        *--------------------------------------------------------------------------
        */
        $environment = '

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 4px 0px 0px 0px;">
                        <span style="font-weight: bold;"> Environment </span>
                        <span> (check only one): </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span style="font-weight: bold;"> Production </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span style="font-weight: bold;"> UAT </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 0px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span style="font-weight: bold;"> Development </span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * application administrator ➤ checkboxes (no & yes)
        *--------------------------------------------------------------------------
        */
        $applicationAdministrator = '

            <div class="row"><br>
                <div align="left">
                    <span style="text-align: left; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> Application administrator </span>
                    <span style="font-size: 13.7px;"> (individual development responsible for maintaining the application software): </span>
                </div>
            </div>

            <div class="row"><br>
                <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> Name: </span>
                <span>_________________________________________</span>

                <span> Phone: </span>
                <span>______________________________________________</span>
            </div><br>

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 4px 0px 10px 30px;">
                        <span> Will remote access request be required? </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 1px 0px 10px 10px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> NO </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 1px 0px 10px 10px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> YES </span>
                    </td>

                    <td colspan="1" style="text-align: left; padding: 4px 0px 10px 0px;">
                        <span> please list SSH or Remote Desktop: </span>
                    </td>
                </tr>
            </table>

            <div class="row">
                <span>_______________________________________________________________________________________________________</span>
            </div>
        ';

       /*
        *--------------------------------------------------------------------------
        * system requirements ➤ checkboxes (vm & ps)
        *--------------------------------------------------------------------------
        */
        $systemRequirements = '

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> System Requirements </div>
                </div>
            </div>

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 4px 0px 0px 0px;">
                        <span style="font-weight: bold;"> Check one: </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 1px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Virtual Machine </span>
                    </td>

                    <td colspan="2" style="text-align: left; padding: 1px 0px 0px 50px;">
                        <span style="font-size: 20px;"> ◻ </span>
                        <span> Physical Server </span>
                    </td>
                </tr>
            </table><br>

            <table border="0">
                <tr>
                    <td colspan="2" style="text-align: left; padding: 0px 0px 0px 20px;">
                        <span> a. &nbsp; </span>
                        <span> Server name: </span>
                        <span>_________________________________________________________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 20px;">
                        <span> b. &nbsp; </span>
                        <span> Operating System: </span>
                        <span>____________________________________________________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 20px;">
                        <span> c. &nbsp; </span>
                        <span> Number of CPU&#39;s Core: </span>
                        <span>_______________________________________________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 20px;">
                        <span> d. &nbsp; </span>
                        <span> Memory: </span>
                        <span>_____________________________________________________________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 20px;">
                        <span> e. &nbsp; </span>
                        <span> Disk size for operating system: </span>
                        <span>_______________________________________________________________</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: left; padding: 10px 0px 0px 20px;">
                        <span> f. &nbsp; </span>
                        <span> Storage requirement for application/data: </span>
                        <span>____________________________________________________</span>
                    </td>
                </tr>
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * network information
        *--------------------------------------------------------------------------
        */
        $networkInformation = '

            <div class="row"><br>
                <div align="center">
                    <div style="text-align: center; color: black; font-size: 14px; font-weight: bold; margin: 0px; padding: 2px;"> Network Information </div>
                </div>
            </div>

            <div class="row"><br>
                <span style="text-align: left; color: black; font-size: 14px; margin: 0px; padding: 2px;"> Private IP: </span>
                <span>___________________________________________</span>

                <span> Public IP: </span>
                <span>______________________________________</span>
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
                    <td style="padding: 20px 0px 0px 20px;">
                        <div style="color: black; font-size: 12px;"> TT-ITD-SRP-FM-004 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $companyLogo 
              .$formSubject 
              .$requestersInformation 
              .$serverInformation 
              .$environment 
              .$applicationAdministrator 
              .$systemRequirements 
              .$networkInformation 
              .$formId;
    }
}