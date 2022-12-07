/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ userRequestForm  --trial
*--------------------------------------------------------------------------
*/

public function userRequestForm(Request $request) {

    return view("eapprovals::eApprovals/form/userRequestForm",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "User Request Form",
            "Icon"  => "nil #file-alt",
        ]
    );
}

/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ changeRequestForm  --trial
*--------------------------------------------------------------------------
*/

public function changeRequestForm(Request $request) {

    return view("eapprovals::eApprovals/form/changeRequestForm",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "Change Request Form",
            "Icon"  => "nil #file-alt",
        ]
    );
}

/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ serverRequestForm  --trial
*--------------------------------------------------------------------------
*/

public function serverRequestForm(Request $request) {

    return view("eapprovals::eApprovals/form/serverRequestForm",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "Server Request Form",
            "Icon"  => "nil #file-alt",
        ]
    );
}