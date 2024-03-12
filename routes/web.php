<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\FrontDeskController;
use App\Http\Controllers\CheckTimeController;
use App\Http\Controllers\Admin\Test\{
    ManageTestController,
    ManageTestSectionController,
    ManageTestQuestionController,
    ManageTestAddQuestionController,
};
use App\Http\Controllers\Admin\{
    AnalyticsController,
    ManagerManagementController
};
use App\Http\Controllers\Manager\{
    CourseBundleController,
    CoursePriceController,
    RoleManagementController,
    CourseController,
};
use App\Http\Controllers\Advisor\{
    ExamController,
    StudentSearchController,
    VisitorFollowUpController,
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
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->name('home');
        Route::get('/studentList', 'frontStudentList')->name('front.student.list');
    });
    Route::post('/student-change-advisor/{id}',[FrontDeskController::class, 'changeAdvisor'])->name('front.change.advisor');
    Route::controller(VisitorController::class)->group(function () {
        //Visitor Info 
        Route::post('/store-visitorInfo', 'storeVisitorInfo')->name('store.VisitorInfo');
        Route::post('/change-status/{id}', 'statusChanged')->name('change.status');
        //Notification seen
        Route::get('/notification-seen', 'frontNotification')->name('fnotify.status.change');
    });
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

    Route::controller(AnalyticsController::class)->group(function(){
        Route::get('/student-analytics', 'home')->name('analytics.students');
    });

    Route::controller(ManagerManagementController::class)->group(function(){
        Route::get('/manager-list', 'managerList')->name('manager.list');
        Route::get('/manager-add', 'managerAdd')->name('manager.Add');
        Route::post('/manager-add/store', 'managerAddStore')->name('manager.add.store');
        Route::get('/manager-edit/{id}', 'managerEdit')->name('manager.edit');
        Route::post('/manager-edit/store', 'managerEditStore')->name('manager.edit.store');
        Route::get('/manager-edit/delete/{id}', 'managerDelete')->name('manager.delete.store');
    });
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    Route::controller(CoursePriceController::class)->group(function(){
        Route::get('/course-price-list', 'CoursePriceList')->name('course.prices.list');
        Route::get('/course-price-form', 'CoursePriceForm')->name('course.prices.form');
        Route::get('/course-price-edit/{id}', 'CoursePriceEdit')->name('course.prices.edit');
        Route::post('/store-price-list', 'storeCouresPrices')->name('store.course.price');
        Route::post('/update-price-list', 'updateCoursePrices')->name('update.course.price');
        Route::get('/course-price-delete/{id}', 'coursePriceDelete')->name('course.price.delete');
    });
    
    Route::controller(CourseBundleController::class)->group(function(){
        Route::get('/course-bundle-form', 'CourseBundleForm')->name('course.bundle.form');
        Route::post('/store-bundle-list', 'storeBundlesPrices')->name('store.bundle.price');
    });

    Route::controller(RoleManagementController::class)->group(function(){
        Route::get('/user-list', 'index')->name('user.list');
        Route::get('/user-add', 'userAdd')->name('user.Add');
        Route::post('/user-add/store', 'userAddStore')->name('user.add.store');
        Route::get('/user-edit/{id}', 'userEdit')->name('user.edit');
        Route::post('/user-edit/store', 'userEditStore')->name('user.edit.store');
        Route::get('/user-edit/delete/{id}', 'userDelete')->name('user.delete.store');
    });
    Route::controller(CourseController::class)->group(function(){
        Route::get('/create-course', 'createCourse')->name('manager.course.create');
        Route::post('/store-course', 'storeCourse')->name('manager.course.store');
        Route::get('/manage-course', 'manageCourse')->name('manager.course.manage');
        Route::get('/edit-course/{id}', 'editCourse')->name('manager.course.edit');
        Route::post('/update-course/{id}', 'updateCourse')->name('manager.course.update');
        Route::get('/delete-course/{id}', 'deleteCourse')->name('manager.course.delete');
    });
});
/*------------------------------------------
--------------------------------------------
All Advisor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:advisor'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/advisor/home', 'advisorHome')->name('advisor.home');
        Route::get('/student-data', 'getStudentData')->name('student.data');
        Route::get('/price-list/{id}', 'priceList')->name('price.List');
        Route::get('/student-followup-edit-view/{id}', 'followUpEditView')->name('followUPEdit.View');
    });
    Route::controller(VisitorController::class)->group(function () {
        Route::get('/advisor/notification-seen', 'AdviserNotification')->name('advnotify.status.change');
        Route::get('/unapproved-students-change', 'timeOutDeclined')->name('time-out.decline');
        Route::get('/student-followUp-delete/{id}', 'followUpDelete')->name('followUp.Delete');
        Route::post('/student-follow-up-edit', 'followUpEdit')->name('followUP.Edit');
        Route::post('/student-follow-up/{id}',  'storeFollowUp')->name('store.followUP');
        Route::post('/studen-status-update',  'adivserUpdateStudentStatus')->name('status.update.adviser');
        Route::post('/student-decline/{id}', 'DeclineStudentAssign')->name('student.decline');
        Route::get('/student-Info/{id}', 'studentDetails')->name('student.Details');
        Route::post('/student-Info-update/{id}', 'studentDetailsUpdate')->name('student.Details.update');
    });
    Route::controller(ExamController::class)->group(function () {
        Route::get('/exam-set/{student_id}', 'examSet')->name('student.exam.set');
        Route::get('/start-exam/{exam_id}/{segment_id}/{student_id}', 'startExam')->name('student.exam.start');
        Route::post('/exam-submission', 'examSubmission')->name('student.exam.submission');
        Route::get('/exam-result/{student_id}', 'examResult')->name('student.exam.result');
        Route::get('/exam-completed', 'examCompleted')->name('student.exam.completed');
    });
    Route::controller(StudentSearchController::class)->group(function(){
        Route::get('/visitor-search', 'search')->name('visitor.search');
    });
    Route::controller(VisitorFollowUpController::class)->group(function(){
        Route::get('/follow-up/{studentId}', 'followup')->name('visitor.follow-up');
    });
});

/*------------------------------------------
--------------------------------------------
All Mock Advisor Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:mock'])->group(function(){
    Route::get('/mock-student-list', [HomeController::class, 'mockAdvisorHome'])->name('mock.home');
    Route::controller(VisitorController::class)->group(function () {
        Route::post('/mock-status-update',  'mockStatusUpdate')->name('status.update.mock');
        Route::get('/mock-student-Details/{id}',  'studentDetails')->name('student.Details.mock');
        Route::post('/mock-student-Info-update/{id}',  'studentDetailsUpdate')->name('student.Details.update');
    });
});


Route::post('/check-time', [CheckTimeController::class, 'checkTime'])->name('check.time');