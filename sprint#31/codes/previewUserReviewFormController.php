<?php

namespace Modules\EApprovals\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\util;
use App\Http\Controllers\previewTableListController;

class previewUserReviewFormController extends Controller {

    public static function userReviewFormPreview() {

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
        $html     = self::userReviewFormPreviewPDF();
        $formName = "User Review Form";
        $mpdf -> SetTitle($formName);
        $mpdf -> WriteHTML($html);
        $mpdf -> Output();
    }

    public static function userReviewFormPreviewPDF() {

        /*
        *--------------------------------------------------------------------------
        * css selectors
        *--------------------------------------------------------------------------
        */
        $cssSelectors = '

            <style>

                .user-review-table {
                    width: 100%;
                    border: 0.2px solid gray;
                    border-collapse: collapse;
                    border-bottom: none;
                }
                
                .user-review-th {
                    background-color: #E2E8F0;
                    font-size: 14px;
                    font-weight: bold;
                    text-align: center;
                    padding: 8px 0px;
                }

                .user-review-td {
                    font-size: 14px;
                    padding: 8px -20px 8px 5px;
                    border: 0.2px solid gray;
                }

                .user-review-td-blank {
                    font-size: 14px;
                    padding: 8px 235px 8px 0px;
                    border: 0.2px solid gray;
                }

                .review-account-users-list-format-table {
                    width: 100%;
                    border: 0.2px solid gray;
                    border-collapse: collapse;
                }

                .review-account-users-list-format-td {
                    border: 0.2px solid gray;
                    font-size: 14px;
                    text-align: center;
                }

                .review-account-users-list-format-td-no {
                    border: 0.2px solid gray;
                    font-size: 14px;
                    padding: 8px -34.5px 8px 20px;
                }

                .review-account-users-list-format-account-users {
                    border: 0.2px solid gray;
                    font-size: 14px;
                    text-align: center;
                    padding: 8px 0px 8px 0px;
                }

                .review-account-users-list-format-td-blank {
                    border: 0.2px solid gray;
                    font-size: 14px;
                    text-align: center;
                    padding: 16px 0px;
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

            <div style="display: none;"><br>
                <div align="center">
                    <div style="text-align: center; font-size: 14px; font-weight: bold;"> USER REVIEW </div>
                </div>
            </div><br>
        ';

       /*
        *--------------------------------------------------------------------------
        * user review table
        *--------------------------------------------------------------------------
        */
        $userReview = '

            <table align="center" class="user-review-table">
                <tr>
                    <th colspan="4" class="user-review-th">
                        <span>USER REVIEW</span>
                    </th>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Reviewed by:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Review Date:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Verified by:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Verified Date:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Document Approved by:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Head of Dept:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Name:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="2" class="user-review-td">
                        <span>Approve Date:</span>
                    </td>

                    <td colspan="2" class="user-review-td-blank"></td>
                </tr>
            </table>
        ';

        /*
        *--------------------------------------------------------------------------
        * user review table
        *--------------------------------------------------------------------------
        */
        $reviewAccountUsersListFormat = '
            
            <table align="center" class="review-account-users-list-format-table">
                <tr>
                    <th colspan="17" class="user-review-th">
                        <span>REVIEW ACCOUNT USERS LIST FORMAT</span>
                    </th>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>N°</span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users">
                        <span>Account users</span>
                    </td>

                    <td colspan="2" class="review-account-users-list-format-td">
                        <span>Type Acc.</span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-td">
                        <span>Department</span>
                    </td>

                    <td colspan="2" class="review-account-users-list-format-td">
                        <span>Status</span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-td">
                        <span>Remark</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>1. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>2. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>3. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>4. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>5. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>6. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>7. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>8. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>9. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>10. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>

                <tr>
                    <td colspan="1" class="review-account-users-list-format-td-no">
                        <span>11. </span>
                    </td>

                    <td colspan="4" class="review-account-users-list-format-account-users"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="2" class="review-account-users-list-format-td-blank"></td>
                    <td colspan="4" class="review-account-users-list-format-td-blank"></td>
                </tr>
                
            </table>
        ';

       /*
        *--------------------------------------------------------------------------
        * form id at the bottom of the page
        *--------------------------------------------------------------------------
        */
        $formId = '
            
            <table border="0" align="right">
                <tr>
                    <td style="padding: 104.2px -8px 0px 20px;">
                        <div style="font-size: 12px;"> TT-ITD-UAMP-FM-002 </div>
                    </td>
                </tr>
            </table>
        ';

        // return
        return $cssSelectors .$companyLogo .$formSubject .$userReview .$reviewAccountUsersListFormat .$formId;
    }
}