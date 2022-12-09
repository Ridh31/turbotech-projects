/*
*--------------------------------------------------------------------------
* eApprovals: userRequestForm ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/userRequestForm", [eApprovalsController::class, "userRequestForm"]);
Route::get("/eApprovals/preview/userRequestForm", [previewUserRequestFormController::class, "userRequestFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: changeRequestForm ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/changeRequestForm", [eApprovalsController::class, "changeRequestForm"]);
Route::get("/eApprovals/preview/changeRequestForm", [previewChangeRequestFormController::class, "changeRequestFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: serverRequestForm ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/serverRequestForm", [eApprovalsController::class, "serverRequestForm"]);
Route::get("/eApprovals/preview/serverRequestForm", [previewServerRequestFormController::class, "serverRequestFormPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: dataCenterEquipmentPlacementRequest ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/dataCenterEquipmentPlacementRequest", [eApprovalsController::class, "dataCenterEquipmentPlacementRequest"]);
Route::get("/eApprovals/preview/dataCenterEquipmentPlacementRequest", [previewDataCenterEquipmentPlacementRequestController::class, "dataCenterEquipmentPlacementRequestPreview"]);

/*
*--------------------------------------------------------------------------
* eApprovals: dataCenterEquipmentRenameRelocateRequest ➤ form & preview
*--------------------------------------------------------------------------
*/
Route::get("/eApprovals/form/dataCenterEquipmentRenameRelocateRequest", [eApprovalsController::class, "dataCenterEquipmentRenameRelocateRequest"]);
Route::get("/eApprovals/preview/dataCenterEquipmentRenameRelocateRequest", [previewDataCenterEquipmentRenameRelocateRequestController::class, "dataCenterEquipmentRenameRelocateRequestPreview"]);