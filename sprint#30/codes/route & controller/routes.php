/*
*--------------------------------------------------------------------------
* eApprovals: userRequestForm ➤ form & preview --trial
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/userRequestForm", [eApprovalsController::class, "userRequestForm"]);
Route::get("/eApprovals/preview/userRequestForm", [previewUserRequestFormController::class, "userRequestFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: changeRequestForm ➤ form & preview --trial
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/changeRequestForm", [eApprovalsController::class, "changeRequestForm"]);
Route::get("/eApprovals/preview/changeRequestForm", [previewChangeRequestFormController::class, "changeRequestFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: serverRequestForm ➤ form & preview --trial
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/serverRequestForm", [eApprovalsController::class, "serverRequestForm"]);
Route::get("/eApprovals/preview/serverRequestForm", [previewServerRequestFormController::class, "serverRequestFormPreview"]);