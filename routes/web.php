<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\Admin\Test\{
    ManageTestController,
    ManageTestSectionController,
    ManageTestQuestionController,
    ManageTestAddQuestionController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes(['register' => false]);
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    

    //Visitor Info 

    Route::post('/store-visitorInfo', [VisitorController::class, 'storeVisitorInfo'])->name('store.VisitorInfo');
    Route::post('/change-status/{id}', [VisitorController::class, 'statusChanged'])->name('change.status');

    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
  
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    
    Route::controller(ManageTestController::class)->group(function () {
        Route::get('/manage-test', 'index')->name('admin.manage.test');
        Route::get('/create-test', 'create')->name('admin.create.test');
        Route::post('/store-test', 'store')->name('admin.store.test');
        Route::get('/edit-test/{id}', 'edit')->name('admin.edit.test');
        Route::post('/update-test/{id}', 'update')->name('admin.update.test');
        Route::post('/delete-test/{id}', 'delete')->name('admin.delete.test');
    });
    Route::controller(ManageTestSectionController::class)->group(function () {
        Route::get('manage-section', 'manageSectionTest')->name('admin.manage.section.test');
        Route::get('create-section', 'createSectionTest')->name('admin.create.section.test');
        Route::post('store-section', 'storeSectionTest')->name('admin.store.section.test');
        Route::get('edit-section/{id}', 'editSectionTest')->name('admin.edit.section.test');
        Route::post('update-section/{id}', 'updateSectionTest')->name('admin.update.section.test');
        Route::post('delete-section/{id}', 'deleteSectionTest')->name('admin.delete.section.test');
    });
    Route::controller(ManageTestQuestionController::class)->group(function () {
        Route::get('add-question/{test_id}/{section_id}', 'addQuestionTest')->name('admin.add-question.test');
        Route::post('store-question', 'storeQuestionTest')->name('admin.store-question.test');
        Route::get('manage-question', 'manageQuestionTest')->name('admin.manage-question.test');
        Route::get('edit-question/{id}', 'editQuestionTest')->name('admin.edit-question.test');
        Route::post('update-question/{id}', 'updateQuestionTest')->name('admin.update-question.test');
        Route::post('delete-question/{id}', 'deleteQuestionTest')->name('admin.delete-question.test');
    });
    Route::controller(ManageTestAddQuestionController::class)->group(function () {
        Route::get('/insert-question/{questionId}/{questionType}', 'insertQuestion')->name('admin.insert-question.test');
        Route::post('/store-question/multiple-choice','storeMultipleChoiceQuestion')->name('admin.store-question.multiple-choice.test');
        Route::post('/store-question/fill-blanks', 'storeFillBlankQuestion')->name('admin.store-question.fill-blank.test');
        Route::post('/store-question/heading-match', 'storeHeadingMatchingQuestion')->name('admin.store-question.heading-matching.test');
        Route::get('/add-question/heading-match/sub-queston-answer/{question_id}', 'headingMatchingSubQuestion')->name('admin.heading-match.sub-question.test');
        Route::post('/store-question/heading-match/sub-queston-answer', 'storeHeadingMatchSubQuestion')->name('admin.heading-match.store.sub-question.test');
        Route::get('/delete-question/multiple-choice/{id}/{questionType}','deleteMultipleChoiceQuestion')->name('admin.delete-question.multiple-choice.test');
        Route::get('/delete-question/fill-blanks/{id}', 'deleteFillBlankQuestion')->name('admin.delete-question.fill-blank.test');
        Route::get('/delete-question/heading-match/{id}', 'deleteHeadingMatchingQuestion')->name('admin.delete-question.heading-matching.test');
        Route::get('/delete-question/heading-match/sub-queston/{id}', 'deleteHeadingMatchSubQuestion')->name('admin.heading-match.delete.sub-question.test');
    });
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
/*------------------------------------------
--------------------------------------------
All Advisor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:advisor'])->group(function () {
  
    Route::get('/advisor/home', [HomeController::class, 'advisorHome'])->name('advisor.home');
    
    Route::get('/student-Info/{id}', [VisitorController::class, 'studentDetails'])->name('student.Details');
    Route::post('/student-Info-update/{id}', [VisitorController::class, 'studentDetailsUpdate'])->name('student.Details.update');

    Route::get('/student-data', [HomeController::class, 'getStudentData'])->name('student.data');

    Route::post('/status-update', [VisitorController::class, 'statusUpdate'])->name('status.update');
    Route::post('/student-decline/{id}', [VisitorController::class, 'DeclineStudentAssign'])->name('student.decline');

    Route::get('/price-list/{id}', [HomeController::class, 'priceList'])->name('price.List');
    Route::post('/student-follow-up/{id}', [VisitorController::class, 'storeFollowUp'])->name('store.followUP');
    Route::get('/student-followup-edit-view/{id}', [HomeController::class, 'followUpEditView'])->name('followUPEdit.View');
    Route::post('/student-follow-up-edit', [VisitorController::class, 'followUpEdit'])->name('followUP.Edit');
    Route::get('/student-followUp-delete/{id}', [VisitorController::class, 'followUpDelete'])->name('followUp.Delete');

});

//TESTNG
Route::get('/notify', [VisitorController::class, 'notify'])->name('notify');
Route::get('/getAdvisor', [VisitorController::class, 'DeclineStudentAssign']);
// Route::post('/student-follow-up', [VisitorController::class, 'storeFollowUp'])->name('store.followUP'); //did not finish the method