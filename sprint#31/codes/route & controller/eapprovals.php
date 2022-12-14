public function dataCenterSecurityAccessRequest(Request $request) {

    return view("eapprovals::eApprovals/form/dataCenterSecurityAccessRequest",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "Data Center Security Access Request",
            "Icon"  => "nil #file-alt",
        ]
    );
}

/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ dataCenterEquipmentRenameRelocateRequest
*--------------------------------------------------------------------------
*/

public function ITHardwareProblemReport(Request $request) {

    return view("eapprovals::eApprovals/form/ITHardwareProblemReport",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "IT Hardware Problem Report",
            "Icon"  => "nil #file-alt",
        ]
    );
}

/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ dataCenterEquipmentRenameRelocateRequest
*--------------------------------------------------------------------------
*/

public function mailRegistrationAndTerminationForm(Request $request) {

    return view("eapprovals::eApprovals/form/mailRegistrationAndTerminationForm",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "Mail Registration And Termination Form",
            "Icon"  => "nil #file-alt",
        ]
    );
}

/*
*--------------------------------------------------------------------------
* Controller: eApprovals ➤ dataCenterEquipmentRenameRelocateRequest
*--------------------------------------------------------------------------
*/

public function userReviewForm(Request $request) {

    return view("eapprovals::eApprovals/form/userReviewForm",
        [
            "M1"    => "Home",
            "R1"    => "/home",
            "M2"    => "eApprovals",
            "M3"    => "Forms",
            "Title" => "User Review Form",
            "Icon"  => "nil #file-alt",
        ]
    );
}