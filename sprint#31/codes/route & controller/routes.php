/*
*--------------------------------------------------------------------------
* eApprovals: dataCenterSecurityAccessRequest ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/dataCenterSecurityAccessRequest", [eApprovalsController::class, "dataCenterSecurityAccessRequest"]);
Route::get("/eApprovals/preview/dataCenterSecurityAccessRequest", [previewDataCenterSecurityAccessRequestController::class, "dataCenterSecurityAccessRequestPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: ITHardwareProblemReport ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/ITHardwareProblemReport", [eApprovalsController::class, "ITHardwareProblemReport"]);
Route::get("/eApprovals/preview/ITHardwareProblemReport", [previewITHardwareProblemReportController::class, "ITHardwareProblemReportPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: mailRegistrationAndTerminationForm ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/mailRegistrationAndTerminationForm", [eApprovalsController::class, "mailRegistrationAndTerminationForm"]);
Route::get("/eApprovals/preview/mailRegistrationAndTerminationForm", [previewMailRegistrationAndTerminationFormController::class, "mailRegistrationAndTerminationFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: userReviewForm ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/userReviewForm", [eApprovalsController::class, "userReviewForm"]);
Route::get("/eApprovals/preview/userReviewForm", [previewUserReviewFormController::class, "userReviewFormPreview"]);