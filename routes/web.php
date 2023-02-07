<?php

use Illuminate\Support\Facades\Route;



Auth::routes();



//Clear config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});




Route::get('/forget-password', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpass'])
->name('login.forgetpass');

Route::post('/forget-password', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssubmit'])
->name('login.forgetpass');


Route::get('forget/password-update/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssupdate'])
->name('login.forgetpassupdate');

Route::post('forget/password-update/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssupdatesubmit']);








Route::post('/myonlinepayment/session', [App\Http\Controllers\Frontend\PaymentController::class, 'session'])->name('myonlinepayment.session');
Route::get('/mybooked/{booking_id}/{amount}/success', [App\Http\Controllers\Frontend\PaymentController::class, 'success'])->name('success');
Route::get('/checkout', [App\Http\Controllers\Frontend\PaymentController::class, 'checkout'])->name('checkout');


//custom login
Route::post('/userLogin', [App\Http\Controllers\Frontend\UserLoginController::class, 'customLogin'])
    ->name('login.custom');
Route::post('custom-registration', [App\Http\Controllers\Frontend\UserLoginController::class, 'customRegistration'])->name('register.custom');
Route::get('/email/verify/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'email_verify']);
Route::post('/verifyCode', [App\Http\Controllers\Frontend\UserLoginController::class, 'verify_code'])
    ->name('verify.code');

// google Login
Route::get('auth/google', [App\Http\Controllers\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [App\Http\Controllers\GoogleSocialiteController::class, 'handleCallback']);
//facebook login
Route::get('auth/facebook', [App\Http\Controllers\FacebookSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/facebook', [App\Http\Controllers\FacebookSocialiteController::class, 'handleCallback']);


Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);


Route::get('/application-form', [App\Http\Controllers\Frontend\FrontendController::class, 'applicationform']);

Route::get('/filter-shop', [App\Http\Controllers\Frontend\FrontendController::class, 'filter_shop']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
Route::get('/admin/profile', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdate'])->name('admin.ProfileUpdate');
Route::post('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdateSubmit'])->name('admin.ProfileUpdate');

// 


// ucas
Route::get('ucas/register/apply', [App\Http\Controllers\Frontend\UcasController::class, 'create']);


Route::post('ucas/register/apply', [App\Http\Controllers\Frontend\UcasController::class, 'store']);

Route::get('/make-payment/ucas-booking/{ucas_booking_id}', [App\Http\Controllers\Frontend\UcasController::class, 'payment']);

Route::post('/make-payment/onlinepayment/ucas-booking/', [App\Http\Controllers\Frontend\UcasController::class, 'onlinepayment']);
Route::post('/make-payment/bankpayment/ucas-booking/', [App\Http\Controllers\Frontend\UcasController::class, 'bankpayment']);




Route::get('/myucasbooked/{booking_id}/{amount}/success', [App\Http\Controllers\Frontend\UcasController::class, 'success'])->name('ucas.success');
Route::get('/ucas/checkout', [App\Http\Controllers\Frontend\UcasController::class, 'checkout'])->name('ucas.checkout');


// ucas



Route::get('/admin/ucas/index', [App\Http\Controllers\Admin\UcasManageController::class, 'index'])->name('admin.ucas.index');

Route::get('/admin/ucas/details/{id}', [App\Http\Controllers\Admin\UcasManageController::class, 'details']);

Route::get('/admin/ucas/delete/{id}', [App\Http\Controllers\Admin\UcasManageController::class, 'delete']);

Route::get('admin/get/ucasbooking/updateapaymentstatus/', [App\Http\Controllers\Admin\UcasManageController::class, 'updateapaymentstatus']);

Route::get('admin/ucasbooking/export/{id}', [App\Http\Controllers\Admin\UcasManageController::class, 'exportucas']);

Route::get('admin/ucasbooking/confirmexam/{id}', [App\Http\Controllers\Admin\UcasManageController::class, 'confirmexam']);





Route::get('/admin/ucas/basicinformation-update', [App\Http\Controllers\Admin\UcasManageController::class, 'basicInformationupdate']);

Route::post('/admin/ucas/payment-update', [App\Http\Controllers\Admin\UcasManageController::class, 'paymentUpdate']);

// 


Route::get('/admin/notify/index', [App\Http\Controllers\Admin\MailSendController::class, 'mainindex'])->name('admin.notify.tutor');

Route::post('/admin/admin-update-password', [App\Http\Controllers\Admin\DashboardController::class, 'adminUpdatePassword'])->name('admin.adminUpdatePassword');

Route::post('/admin/email-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminEmailUpdate'])->name('admin.email.update');

Route::get('/admin/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('admin.logout');
// login controler
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'loginSubmit'])->name('admin.login');
// settings controller
Route::get('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformation'])->name('admin.companyInformation');

Route::post('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformationSubmit'])->name('admin.companyInformation');

Route::get('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformation'])->name('admin.seoInformation');
Route::post('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformationSubmit'])->name('admin.seoInformation');

Route::get('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformation'])->name('admin.socialInformation');
Route::post('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformationSubmit'])->name('admin.socialInformation');



Route::get('/admin/cupon/create', [App\Http\Controllers\Admin\SettingsController::class, 'cuponcreate'])->name('admin.cupon.create');
Route::post('/admin/cupon/create', [App\Http\Controllers\Admin\SettingsController::class, 'cuponstore'])->name('admin.cupon.create');
Route::get('/admin/cupon/index', [App\Http\Controllers\Admin\SettingsController::class, 'cuponindex'])->name('admin.cupon.index');











// slider Create
Route::get('/admin/slider/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/admin/slider/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('admin.slider.create');
Route::post('/admin/slider/update', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('admin.slider.update');
Route::get('/admin/slider/index', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('admin.slider.index');

Route::get('/admin/slider/active/{id}', [App\Http\Controllers\Admin\SliderController::class, 'active']);
Route::get('/admin/slider/deactive/{id}', [App\Http\Controllers\Admin\SliderController::class, 'deactive']);
Route::get('/admin/slider/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit']);
Route::get('/admin/slider/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'delete']);

// about us
Route::get('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('admin.about-us.update');
Route::post('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'updateSubmit'])->name('admin.about-us.update');
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [App\Http\Controllers\Frontend\FrontendController::class, 'termsCondition']);
Route::get('/faq', [App\Http\Controllers\Frontend\FrontendController::class, 'faq']);

Route::get('/admin/privacy-policy/update', [App\Http\Controllers\Admin\AboutUsController::class, 'privacyPolicy'])->name('admin.privacy-policy.update');
// terms and conditions
Route::get('/admin/terms-conditions/update', [App\Http\Controllers\Admin\AboutUsController::class, 'termsCondition'])->name('admin.terms-conditions.update');





Route::get('/candidate/details/exports/{booking_id}', [App\Http\Controllers\Admin\CandidateDetailsExportController::class, 'exportcandidatedetails']);





// category
Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.create');
Route::post('/admin/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::get('/admin/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/active/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'active']);
Route::get('/admin/category/deactive/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'deactive']);
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);


Route::get('/admin/contactmessage/index', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('admin.contactmessage.index');
Route::get('/admin/contactmessage/view/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'videmessage']);
Route::post('/admin/contactmessage/view/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'sendreply']);
Route::get('/admin/contactmessage/delete/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'delete']);
// blog controller

Route::get('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blog.create');
Route::get('/admin/blog/index', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);
Route::get('/admin/blog/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'delete']);
Route::post('/admin/blog/update', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blog.update');

// student fees
Route::get('/admin/fees/create', [App\Http\Controllers\Admin\StudentFeesController::class, 'create'])->name('admin.fees.create');
Route::post('/admin/fees/create', [App\Http\Controllers\Admin\StudentFeesController::class, 'store'])->name('admin.fees.create');
Route::get('/admin/fees/index', [App\Http\Controllers\Admin\StudentFeesController::class, 'index'])->name('admin.fees.index');
Route::get('/admin/fees/edit/{id}', [App\Http\Controllers\Admin\StudentFeesController::class, 'edit']);
Route::get('/admin/fees/delete/{id}', [App\Http\Controllers\Admin\StudentFeesController::class, 'delete']);
Route::post('/admin/fees/update', [App\Http\Controllers\Admin\StudentFeesController::class, 'update'])->name('admin.fees.update');

// event conterrolerr
Route::get('/admin/event/create', [App\Http\Controllers\Admin\EventController::class, 'create'])->name('admin.event.create');
Route::post('/admin/event/create', [App\Http\Controllers\Admin\EventController::class, 'store'])->name('admin.event.create');
Route::get('/admin/event/index', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('admin.event.index');
Route::get('/admin/event/edit/{id}', [App\Http\Controllers\Admin\EventController::class, 'edit']);
Route::get('/admin/event/delete/{id}', [App\Http\Controllers\Admin\EventController::class, 'delete']);
Route::post('/admin/event/update', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('admin.event.update');
// review controller
Route::get('/admin/review/create', [App\Http\Controllers\Admin\ReviewController::class, 'create'])->name('admin.review.create');
Route::post('/admin/review/create', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('admin.review.create');
Route::get('/admin/review/index', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin.review.index');
Route::get('/admin/review/edit/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'edit']);
Route::get('/admin/review/delete/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'delete']);
Route::post('/admin/review/update', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin.review.update');
// 
Route::get('/admin/gallery/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'create'])->name('admin.gallery.create');
Route::post('/admin/gallery/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'store'])->name('admin.gallery.create');
Route::get('/admin/gallery/index', [App\Http\Controllers\Admin\GalleryControlller::class, 'index'])->name('admin.gallery.index');
Route::get('/admin/gallery/edit/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'edit']);
Route::get('/admin/gallery/delete/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'delete']);
Route::post('/admin/gallery/update', [App\Http\Controllers\Admin\GalleryControlller::class, 'update'])->name('admin.gallery.update');
Route::get('/admin/gallery/active/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'active']);
Route::get('/admin/gallery/deactive/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'deactive']);
// assesment list

Route::get('/admin/assesment/index', [App\Http\Controllers\Admin\AssesmentController::class, 'index'])->name('admin.assesment.index');
Route::get('/admin/assesment/active/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'active']);
Route::get('/admin/assesment/deactive/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'deactive']);
Route::get('/admin/assesment/details/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'details']);
// student request

Route::get('/admin/student-request/index', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'index'])->name('admin.student-request.index');
Route::get('/admin/student-request/delete/{id}', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'delete']);
Route::get('/admin/student-request/view/{id}', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'view']);
Route::post('/admin/student-request/approve', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'approve']);
Route::get('/admin/assign-tutor/index', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'assigntutor'])->name('admin.assign-tutor.index');


// bnner
Route::get('/admin/banner/update', [App\Http\Controllers\Admin\BannerController::class, 'bannerupdate'])->name('admin.banner.update');
Route::post('/admin/banner/update', [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('admin.banner.update');

// tutor manage


Route::get('/admin/tutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'index'])->name('admin.tutor.list');
Route::get('/admin/branchtutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'branchtutor'])->name('admin.branchtutor.list');
Route::get('/admin/tutor/details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'details']);

Route::get('/admin/tutor/approve/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'approve']);
Route::get('/admin/tutor/reject/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'reject']);

Route::get('/admin/tutor/education-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'educationdetails']);
Route::post('/admin/tutor/education-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'educationdetailsstatus']);
Route::get('/admin/tutor/cv-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'cvdetails']);
Route::get('/admin/tutor/history-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'history']);
// payment request
Route::get('/admin/tutor/payment-request', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequest'])->name('admin.tutior.paymentrequest');

Route::get('/admin/all-confirmation/bydate', [App\Http\Controllers\Admin\AboutUsController::class, 'allconfirmation']);



// student/Gurdian
// 

Route::get('/admin/student/list', [App\Http\Controllers\Admin\StudentManageController::class, 'index'])->name('admin.student.list');
Route::get('/admin/student/details/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'details']);
Route::post('/admin/student/details/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'detailsverified']);

// agents
Route::get('/admin/agent/list', [App\Http\Controllers\Admin\StudentManageController::class, 'agentindex'])->name('admin.agentindex.list');
Route::get('/admin/agent/create', [App\Http\Controllers\Admin\StudentManageController::class, 'agentadd'])->name('admin.agentadd.list');

Route::post('/admin/agent/create', [App\Http\Controllers\Admin\StudentManageController::class, 'agentstore'])->name('admin.agentadd.list');
Route::get('/admin/agent/edit/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'agentedit']);
Route::post('/admin/agent/update', [App\Http\Controllers\Admin\StudentManageController::class, 'agentupdate'])->name('admin.agentadd.update');
Route::post('/admin/agent/passwordupdate', [App\Http\Controllers\Admin\StudentManageController::class, 'agentupdatePassword'])->name('admin.agentupdatePassword.update');

Route::get('/admin/agent/details/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'agentdetails']);




// receive payment

Route::get('/admin/payment/receive', [App\Http\Controllers\Admin\PaymentController::class, 'receiveindex'])->name('admin.receiveindex.list');
Route::get('/admin/payment/pay', [App\Http\Controllers\Admin\PaymentController::class, 'payindex'])->name('admin.payindex.list');
// mail send/notify
Route::get('/admin/user/notify/{id}', [App\Http\Controllers\Admin\MailSendController::class, 'create']);
Route::post('/admin/user/notify/{id}', [App\Http\Controllers\Admin\MailSendController::class, 'store']);


Route::get('/admin/admin-user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.adminuser.create');
Route::post('/admin/admin-user/create', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.adminuser.create');
Route::get('/admin/admin-user/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.adminuser.index');
Route::get('/admin/admin-user/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::get('/admin/admin-user/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete']);
Route::get('/admin/admin-user/active/{id}', [App\Http\Controllers\Admin\UserController::class, 'active']);
Route::get('/admin/admin-user/deactive/{id}', [App\Http\Controllers\Admin\UserController::class, 'deactive']);
Route::post('/admin/admin-user/update', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.adminuser.update');


//Frontend Catagory wise product
Route::get('/category/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendCatagoryController::class, 'catagoryView']);
Route::get('/products/{slug}/{id}', [App\Http\Controllers\Frontend\ProductController::class, 'details']);

//Subcategory wise product
Route::get('/subcategory/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendSubCategoryController::class, 'subCatagoryView']);
//user dashboard 
Route::get('/logout', [App\Http\Controllers\Frontend\DashboardController::class, 'logout']);
// Route::get('/dashboard', [App\Http\Controllers\Frontend\DashboardController::class, 'dashboard']);
Route::get('/tutor/information', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorinformation']);
Route::get('/tutor/student-request-list', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlist']);
Route::get('/tutor/student-request-list/view/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistview']);
Route::get('/tutor/student-request-list/accept/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistaccept']);
Route::get('get/tutor/studentrequestlist/reject/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistreject']);
Route::post('/tutor/student-request-list/reject', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrejectRequest']);

Route::post('/tutor/account', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorprofileupdate']);
Route::get('/tutor/account', [App\Http\Controllers\Frontend\DashboardController::class, 'tutor_account']);
Route::get('/user/dbs-certification', [App\Http\Controllers\Frontend\DashboardController::class, 'dbscertification']);

Route::get('/user/proof-of-address', [App\Http\Controllers\Frontend\DashboardController::class, 'proofofaddress']);
Route::post('/user/proof-of-address', [App\Http\Controllers\Frontend\DashboardController::class, 'proofofaddresssubmit']);

Route::post('/user/dbs-certification', [App\Http\Controllers\Frontend\DashboardController::class, 'dbscertificationsubmit']);
Route::get('/user/verification', [App\Http\Controllers\Frontend\DashboardController::class, 'verification']);



Route::get('/user/profile-image', [App\Http\Controllers\Frontend\DashboardController::class, 'profileimage']);
Route::post('/user/profile-image', [App\Http\Controllers\Frontend\DashboardController::class, 'profileimagesubmit']);


Route::get('/user/cv', [App\Http\Controllers\Frontend\DashboardController::class, 'cvuploads']);
Route::post('/user/cv', [App\Http\Controllers\Frontend\DashboardController::class, 'cvuploadsubmit']);




// tutor wallet






//customer info update
Route::get('/student/message', [App\Http\Controllers\Frontend\StudentChatController::class, 'allmessage']);
Route::get('/student/message/view/{id}', [App\Http\Controllers\Frontend\StudentChatController::class, 'viewmessage']);
Route::post('/student/message/chat/submit', [App\Http\Controllers\Frontend\StudentChatController::class, 'tutormessagesubmit']);
Route::post('/student/message/chat', [App\Http\Controllers\Frontend\StudentChatController::class, 'messagechat']);
// 


Route::get('/student/due_amount/paid/{order_id}', [App\Http\Controllers\Frontend\PaymentController::class, 'due_amountpaid']);
Route::post('/student/due_amount/paid/{order_id}', [App\Http\Controllers\Frontend\PaymentController::class, 'due_amountpaidsubmit']);




Route::get('/user/notification', [App\Http\Controllers\Frontend\StudentChatController::class, 'studentnotification']);
Route::post('/user/notification', [App\Http\Controllers\Frontend\StudentChatController::class, 'studentnotificationsubmit']);


Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactstore']);
Route::get('/gallery', [App\Http\Controllers\Frontend\FrontendController::class, 'gallary']);

Route::get('/ucas-registered-centre', [App\Http\Controllers\Frontend\FrontendController::class, 'ucasregistered']);



//filter product
Route::get('/filterproduct', [App\Http\Controllers\Frontend\FilterProductController::class, 'filter']);
Route::get('/filtersubcategoryproduct', [App\Http\Controllers\Frontend\FilterProductController::class, 'subCategoryfilter']);


//pages
Route::get('/exam-fees', [App\Http\Controllers\Frontend\FeesController::class, 'index']);

Route::get('/a-level-endorsment', [App\Http\Controllers\Frontend\PracticalController::class, 'alevelindex']);
Route::get('/gcse-endorsment', [App\Http\Controllers\Frontend\PracticalController::class, 'gcseindex']);
Route::get('/invigilation-services', [App\Http\Controllers\Frontend\PracticalController::class, 'invigilationservices']);
// practical


Route::get('/about-us', [App\Http\Controllers\Frontend\PagesController::class, 'aboutUs']);

Route::get('/exam-day', [App\Http\Controllers\Frontend\PagesController::class, 'examday']);

Route::get('/exam-booking-procedure', [App\Http\Controllers\Frontend\PagesController::class, 'bookingprocedure']);

Route::get('/terms-condition', [App\Http\Controllers\Frontend\PagesController::class, 'termsCondition']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\PagesController::class, 'privancyPolicy']);
Route::get('/payment-policy', [App\Http\Controllers\Frontend\PagesController::class, 'paymentPolicy']);

Route::get('/exam-tips', [App\Http\Controllers\Frontend\PagesController::class, 'examtips']);

//rivision-exam



Route::get('/revision-exam-booking', [App\Http\Controllers\Frontend\RevisionExamController::class, 'create']);






// 




// tutor hire controller


Route::get('/tutor/hire/payment-details/{order_id}/{diffInweek}/{diffInMonths}/{t_id}', [App\Http\Controllers\Frontend\TutorHireController::class, 'paymentProcess']);

Route::get('/tutor/contact-a-tutor/{id}', [App\Http\Controllers\Frontend\TutorHireController::class, 'tutorhire']);
Route::post('/tutor/contact-a-tutor/submit', [App\Http\Controllers\Frontend\TutorHireController::class, 'tutorhiresubmit']);
// tutor lesson complete
Route::get('/tutor/lesson-complete-list', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'index']);
Route::get('/tutor/lesson-complete-add', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'add']);
Route::post('/tutor/lesson-complete-add', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'store']);
Route::get('/tutor/lesson-complete-delete/{id}', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'delete']);

Route::post('/stripe-payment', [App\Http\Controllers\Frontend\PaymentController::class, 'handlePost'])->name('stripe.post');






Route::get('/blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'blogs']);
Route::get('/details/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogsdetails']);

Route::get('/events', [App\Http\Controllers\Frontend\EventController::class, 'index']);
Route::get('/event/details/{id}', [App\Http\Controllers\Frontend\EventController::class, 'eventdetails']);

// assesment controller

Route::get('/assesment', [App\Http\Controllers\Frontend\AssesmentController::class, 'create']);
Route::post('/assesment', [App\Http\Controllers\Frontend\AssesmentController::class, 'store']);
// allcourses


Route::get('/course/11plus', [App\Http\Controllers\Frontend\CourseController::class, 'elevenplus']);
Route::get('/course/ks1-maths', [App\Http\Controllers\Frontend\CourseController::class, 'ksonemaths']);
Route::get('/course/ks1-english', [App\Http\Controllers\Frontend\CourseController::class, 'ksoneenglish']);
Route::get('/course/ks2-maths', [App\Http\Controllers\Frontend\CourseController::class, 'kstwomaths']);
Route::get('/course/ks2-english', [App\Http\Controllers\Frontend\CourseController::class, 'kstwoenglish']);
Route::get('/course/ksthree', [App\Http\Controllers\Frontend\CourseController::class, 'ksthree']);
Route::get('/course/gcse', [App\Http\Controllers\Frontend\CourseController::class, 'gcse']);
Route::get('/course/a-level', [App\Http\Controllers\Frontend\CourseController::class, 'alevelCourse']);


Route::get('/work-with-us', [App\Http\Controllers\Frontend\TuitorController::class, 'applyfrom']);
Route::get('/tutor/singup', [App\Http\Controllers\Frontend\TuitorController::class, 'singup']);
Route::post('/tutor/singup', [App\Http\Controllers\Frontend\TuitorController::class, 'singupstore']);
Route::get('/register/success', [App\Http\Controllers\Frontend\TuitorController::class, 'registersuccess'])->name('register.success');
// 
Route::get('/register/type', [App\Http\Controllers\Frontend\StudentController::class, 'registertype']);

// 
Route::get('/student/signup', [App\Http\Controllers\Frontend\StudentController::class, 'singup']);
Route::post('/student/signup', [App\Http\Controllers\Frontend\StudentController::class, 'singupstore']);


// 



Route::post('student/otheroption/update', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'otheroptionupdate']);


Route::post('/student/recentphoto/update', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'recentphotoUpdate']);

Route::post('/student/photoid/update', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'photoIdUpdate']);


// 





Route::get('/student/dashboard', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'dashboard']);
Route::get('/student/updatepassword', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updatepassword']);
Route::post('/student/updatepassword', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updatepasswordStore']);

Route::get('/student/savetutor', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'savetutor']);

Route::get('/student/updateprofile', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updateprofile']);
Route::post('/student/updateprofile', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updateprofileStore']);

Route::get('/student/tutorrequestlist', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestlist']);
Route::get('/student/tutorrequestlist/delete/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestdelete']);
Route::get('/student/tutorrequestlist/update/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestupdate']);
Route::post('/student/tutorrequestlist/update/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequsubmit']);
Route::get('/student/lesson-complete', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplate']);


Route::get('/student/lesson-complete/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplateview']);
Route::post('/student/lesson-complete/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplatestatusupdate']);

Route::get('/student/lesson-complete/approve/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplateapprove']);
Route::get('/student/lesson-complete/reject/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplatereject']);

Route::get('/student/tutor-hire-list', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'tutorHireList']);


Route::get('/student/tutorrequestlist/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'tutorHireview']);
Route::post('user/feedback/submit', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'feedbacksubmit']);
// student payment 
Route::get('/student/payment', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'index']);
Route::get('/student/payment-history', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'paymentHistory']);




// save tutor routes
Route::post('/student/tutorsave', [App\Http\Controllers\Frontend\SaveTutorController::class, 'savetutor']);

//Search
// ////////////////////////////////////////////////////////////////////////////exam center//////////////////////

// admin panel start

Route::get('admin/subject/create', [App\Http\Controllers\Admin\SubjectController::class, 'create'])->name('admin.subject.create');
Route::post('admin/subject/create', [App\Http\Controllers\Admin\SubjectController::class, 'store'])->name('admin.subject.create');
Route::post('admin/subject/update', [App\Http\Controllers\Admin\SubjectController::class, 'update'])->name('admin.subject.update');

Route::get('admin/subject/index', [App\Http\Controllers\Admin\SubjectController::class, 'index'])->name('admin.subject.index');

Route::get('admin/subject/all-gcse-subject', [App\Http\Controllers\Admin\SubjectController::class, 'gcsesubject'])->name('admin.gcsesubject.index');

Route::get('admin/subject/all-igcse-subject', [App\Http\Controllers\Admin\SubjectController::class, 'igcsesubject'])->name('admin.igcsesubject.index');

Route::get('admin/subject/all-alevel-subject', [App\Http\Controllers\Admin\SubjectController::class, 'alevelsubject'])->name('admin.alevelsubject.index');

Route::get('admin/subject/all-aslevel-subject', [App\Http\Controllers\Admin\SubjectController::class, 'aslevelsubject'])->name('admin.aslevelsubject.index');

Route::get('admin/subject/all-acca-subject', [App\Http\Controllers\Admin\SubjectController::class, 'accasubject'])->name('admin.accasubject.index');
Route::get('admin/subject/all-aat-subject', [App\Http\Controllers\Admin\SubjectController::class, 'aatsubject'])->name('admin.aatsubject.index');
Route::get('admin/subject/all-functionalskills-subject', [App\Http\Controllers\Admin\SubjectController::class, 'functionalskillssubject'])->name('admin.functionalskillssubject.index');


Route::get('admin/exam-booking-gcse/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreate'])->name('admin.exambooking.create');
Route::post('admin/exam-booking-gcse/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStore'])->name('admin.exambooking.create');

// igcse

Route::get('admin/exam-booking-igcse/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreateigcse'])->name('admin.exambooking-igcse.create');
Route::post('admin/exam-booking-igcse/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStoreigcse'])->name('admin.exambooking-igcse.create');

// alevel

Route::get('admin/exam-booking-alevel/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreatealevel'])->name('admin.exambookingalevel.create');
Route::post('admin/exam-booking-alevel/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStorealevel'])->name('admin.exambookingalevel.create');
// AAT

Route::get('admin/exam-booking-aat/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreateaat'])->name('admin.exambookingaat.create');
Route::post('admin/exam-booking-aat/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStoreaat'])->name('admin.exambookingaat.create');
// acca

Route::get('admin/exam-booking-acca/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreateacca'])->name('admin.exambookingacca.create');
Route::post('admin/exam-booking-acca/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStoracca'])->name('admin.exambookingacca.create');
// functional

Route::get('admin/exam-booking-functionalskills/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingcreatefunctionalskills'])->name('admin.exambookingfunctionalskills.create');
Route::post('admin/exam-booking-functionalskills/create', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'exambookingStorefunctionalskills'])->name('admin.exambookingfunctionalskills.create');







Route::get('admin/make-payment/exambooking/{id}', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'makepayment']);

Route::post('admin/make-payment/update', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'paid_amount']);




Route::get('/get/admin-gcse/subject/all/{type_id}', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'gcsegetsubject']);
Route::get('/get/admin-igcse/subject/all/{type_id}', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'igcsegetsubject']);
Route::get('/get/admin-alevel/subject/all/{type_id}', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'alevelgetsubject']);
Route::get('/get/admin-subject/details/{subject_id}', [App\Http\Controllers\Admin\CustomExamBookingController::class, 'subjectdetails']);





Route::get('admin/subject/edit/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'edit']);
Route::get('admin/subject/delete/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'delete']);




// 

Route::get('admin/examconfirm-list/gcse', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistGcse'])->name('admin.examconfirmlist.gccse');

Route::get('admin/examconfirm-list/igcse', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistigcse'])->name('admin.examconfirmlist.igcse');

Route::get('admin/examconfirm-list/alevels', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistalevels'])->name('admin.examconfirmlist.alevels');


Route::get('admin/examconfirm-list/functional-skills', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistfunctionalskills'])->name('admin.examconfirmlist.functionalskills');


Route::get('admin/examconfirm-list/aat', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistaat'])->name('admin.examconfirmlist.aat');

Route::get('admin/examconfirm-list/acca', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistacca'])->name('admin.examconfirmlist.acca');


Route::get('admin/examconfirm-list/aslevels', [App\Http\Controllers\Admin\ExamRequestController::class, 'examconfirmlistaslevels'])->name('admin.examconfirmlist.aslevels');

Route::get('admin/exam-booking/aslevels', [App\Http\Controllers\Admin\ExamRequestController::class, 'aslevelsexambooking'])->name('admin.exambooking.aslevels');



// 

Route::get('admin/exam/allbooking', [App\Http\Controllers\Admin\ExamRequestController::class, 'allexambooking'])->name('admin.examrequest.allbooking');

Route::get('admin/update/examnotes', [App\Http\Controllers\Admin\ExamRequestController::class, 'insernotesupdate']);

Route::get('admin/forcheck/exam', [App\Http\Controllers\Admin\ExamRequestController::class, 'forcheck']);


Route::get('admin/exambooking/delete/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'deleteexambooking']);

Route::get('admin/exam/gcse', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcsemain'])->name('admin.examrequest.gcse');

Route::get('admin/exam/igcse', [App\Http\Controllers\Admin\ExamRequestController::class, 'igcse'])->name('admin.examrequest.igcse');

Route::get('admin/exam/alevel', [App\Http\Controllers\Admin\ExamRequestController::class, 'aLevel'])->name('admin.examrequest.alevel');

Route::get('admin/exam/functionalskills', [App\Http\Controllers\Admin\ExamRequestController::class, 'functionalskill'])->name('admin.examrequest.functionalskills');

Route::get('admin/exam/acca', [App\Http\Controllers\Admin\ExamRequestController::class, 'acca'])->name('admin.examrequest.acca');

Route::get('admin/exam/aat', [App\Http\Controllers\Admin\ExamRequestController::class, 'aat'])->name('admin.examrequest.aat');





Route::get('admin/exambooking/details/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'bookingdetails']);

Route::get('admin/exambooking/maindetails/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'mainbookingdetails']);

Route::get('admin/exambooking/sendduepaymemt/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'sendDuePaymemt']);




Route::get('admin/get/exmabooking/updatedate/', [App\Http\Controllers\Admin\ExamRequestController::class, 'updatedateexmabooking']);

Route::get('admin/get/exmabooking/updateapaymentstatus/', [App\Http\Controllers\Admin\ExamRequestController::class, 'updateapaymentstatus']);

Route::get('admin/get/insert/candidatenumbers/', [App\Http\Controllers\Admin\ExamRequestController::class, 'insertCandidateNumbers']);

Route::get('admin/get/update/basicinformation_update/', [App\Http\Controllers\Admin\ExamRequestController::class, 'basicInformationupdate']);

Route::get('admin/get/update/other_formation_update', [App\Http\Controllers\Admin\ExamRequestController::class, 'other_formation_update']);

Route::get('admin/get/update/special_arrangements_update/', [App\Http\Controllers\Admin\ExamRequestController::class, 'special_arrangements_update']);

Route::get('admin/get/update/terms_and_conditon_update/', [App\Http\Controllers\Admin\ExamRequestController::class, 'terms_and_conditon_update']);

Route::get('admin/get/update/paid_status/', [App\Http\Controllers\Admin\ExamRequestController::class, 'paid_status_update']);

Route::post('admin/get/updatesubject/', [App\Http\Controllers\Admin\ExamRequestController::class, 'getupdatesubject']);

Route::get('admin/export/exam-booking-details/{bookig_id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'examBookingDetailsExport']);







Route::get('admin/exambooking/maindapprove/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'mainbookingapprove']);

Route::get('admin/exambooking/maindreject/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'mainbookingreject']);



Route::get('admin/alevel/exam', [App\Http\Controllers\Admin\ExamRequestController::class, 'alevel'])->name('admin.examrequest.alevel');
Route::get('admin/igcse/exam', [App\Http\Controllers\Admin\ExamRequestController::class, 'igcse'])->name('admin.examrequest.igcse');

Route::post('admin/mainpayment/update', [App\Http\Controllers\Admin\ExamRequestController::class, 'mainpaymentupdate']);

Route::get('admin/candidate-confirm-exam/booking/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'candidateconfirmExam']);

Route::post('admin/candidate-confirm-exam/booking/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'candidateconfirmExamStore']);


Route::get('admin/candidate-gcse-alevel-igcse-confirmation/exambooking/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelExamconfirmation']);


Route::post('admin/candidate-gcse-alevel-igcse-confirmation/exambooking/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelExamconfirmationStore']);

Route::get('admin/candidate-gcse-alevel-igcse-confirmation/delete-one-item/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelDeleteOneItem']);


Route::get('admin/candidate-gcse-alevel-igcse-confirmation/testing-statements/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelTestingStatements']);


Route::post('admin/candidate-gcse-alevel-igcse-confirmation/file-uploads', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelFileUploads']);

Route::get('admin/candidate-gcse-alevel-igcse-confirmation/file-uploads/delete/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelFileUploadsDelete']);


// real send exam entry

Route::get('admin/candidate-gcse-alevel-igcse-confirmation/send-exam-entry/{id}', [App\Http\Controllers\Admin\ExamRequestController::class, 'gcseIgcseAlevelSendExamEntry']);


// 




Route::get('admin/update/studentnotes', [App\Http\Controllers\Admin\ExamRequestController::class, 'notesUpdate']);





// exam date change
Route::get('admin/examdate/index', [App\Http\Controllers\Admin\ExamdateController::class, 'index'])->name('admin.examdate.index');

Route::get('admin/examdate/subject/{id}', [App\Http\Controllers\Admin\ExamdateController::class, 'subjectdate']);



Route::get('admin/examdate/update', [App\Http\Controllers\Admin\ExamdateController::class, 'update'])->name('admin.examdate.update');
// 
// main exam date manage
Route::get('admin/exam/essuedate/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'create'])->name('admin.essuedate.update');

Route::get('admin/getessuesfirst/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'getFirstupdate']);
Route::get('admin/getessuessecond/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'getSecondupdate']);
Route::get('admin/getessuesthird/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'getThirdupdate']);
Route::get('admin/getessuesfour/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'getFourthupdate']);
Route::get('admin/getessuesfive/update', [App\Http\Controllers\Admin\ExamdatemanageController::class, 'getFiveupdate']);











Route::get('/functional-skills-exams', [App\Http\Controllers\Frontend\PagesController::class, 'functionalskillsexams']);
Route::get('/a-level-exams', [App\Http\Controllers\Frontend\PagesController::class, 'alevelexams']);
Route::get('/gcse-exams', [App\Http\Controllers\Frontend\PagesController::class, 'gcseexams']);
Route::get('/igcse-exams', [App\Http\Controllers\Frontend\PagesController::class, 'igcseexams']);
Route::get('/acca-exams', [App\Http\Controllers\Frontend\PagesController::class, 'accaexams']);
Route::get('/aat-exams', [App\Http\Controllers\Frontend\PagesController::class, 'attexams']);


Route::get('/exam-booking-date-details', [App\Http\Controllers\Frontend\FrontendController::class, 'examdates']);

// student dashboard
Route::get('/exam-booking-list', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'exambookinglist']);


// ucas start

Route::get('/ucas-exam-booking-list', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'ucasexambookinglist']);

Route::get('/ucas-exam-booking-details/{ucas_booking_id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'ucasexambookingdetails']);

Route::get('/ucas-exam-booking/delete/main/{ucas_booking_id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'ucasexambookingdelete']);



Route::get('/ucas-exam-booking/details/invoice-download/{ucas_booking_id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'ucasexambookingInvoice']);



// ucas end

Route::get('/exam-booking/details/invoice-download/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'downloadsinvoice']);

Route::get('exam-booking/statement-of-entry/details/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'statementofentry']);

// exam booking 




Route::get('get/insertmybooking/all', [App\Http\Controllers\Frontend\ExambookingController::class, 'insertexambookingajax']);

Route::get('get/insertmycheckbooking/all', [App\Http\Controllers\Frontend\ExambookingController::class, 'insertCheckexambookingajax']);

Route::post('recentpgoto/uploads/exambooking', [App\Http\Controllers\Frontend\ExambookingController::class, 'photouploads']);
// 








Route::get('/exam-booking-aslevel', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingaslevel']);

Route::post('/exam-booking-aslevel', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingaslevelStore']);


Route::get('/exam-booking-aat', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingatt']);

Route::post('/exam-booking-aat', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingattsubmit']);


Route::get('/exam-booking-acca', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingacca']);
Route::post('/exam-booking-acca', [App\Http\Controllers\Frontend\ExambookingController::class, 'accaexamsubmit']);



Route::get('/exam-booking-functional-skills', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingfuctionalskills']);

Route::post('/exam-booking-functional-skills', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingfuctionalskillssubmit']);

Route::get('/exam-booking', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambooking']);


Route::post('/exam-booking', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingstore']);


Route::get('/get/subject/all/{type_id}', [App\Http\Controllers\Frontend\ExambookingController::class, 'getsubject']);

Route::get('/get/gcse/subject/all/{type_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'gcsegetsubject']);
Route::get('/get/igcse/subject/all/{type_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'igcsegetsubject']);
Route::get('/get/alevel/subject/all/{type_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'alevelgetsubject']);

Route::get('/get/aslevel/subject/all/{type_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'aslevelgetsubject']);

Route::get('get/getqualification/all/{program_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'getqualification']);
Route::get('get/getaatsubject/all/{qualification_id}', [App\Http\Controllers\Frontend\GetSubjectController::class, 'getaatsubject']);



Route::get('/get/subject/details/{subject_id}', [App\Http\Controllers\Frontend\ExambookingController::class, 'subjectdetails']);


Route::get('/exam-list', [App\Http\Controllers\Frontend\FrontendController::class, 'examlist']);

Route::get('/supports', [App\Http\Controllers\Frontend\FrontendController::class, 'supports']);


Route::get('/exam-booking-main', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingmain']);

Route::get('/exam-booking-gcse', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookinggcse']);

Route::post('/exam-booking-gcse', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingstoregcse']);
// alvel
Route::get('/exam-booking-alevel', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingalevel']);
Route::post('/exam-booking-alevel', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingalevelstore']);
// igcse


Route::get('/exam-booking-igcse', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingigcse']);
Route::post('/exam-booking-igcse', [App\Http\Controllers\Frontend\ExambookingController::class, 'exambookingigcsestore']);





Route::get('/make-payment/exambooking/{order_id}', [App\Http\Controllers\Frontend\ExambookingController::class, 'makepayment']);


Route::post('online/payment', [App\Http\Controllers\Frontend\PaymentController::class, 'onlinepayment']);

Route::post('bank/payment', [App\Http\Controllers\Frontend\PaymentController::class, 'bankpayment']);

// 

Route::get('exam-booking/delete/main/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'exambookingdelete']);

Route::get('exam-booking/details/main/{booking_id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'exambookingdetails']);






// agents
Route::get('/agent/payment', [App\Http\Controllers\Frontend\AgentController::class, 'exambookinglist']);
Route::get('agent-exam-booking-list', [App\Http\Controllers\Frontend\AgentController::class, 'exambookinglist']);
Route::get('agent/dashboard', [App\Http\Controllers\Frontend\AgentController::class, 'dashboard']);
Route::get('/agent/updateprofile', [App\Http\Controllers\Frontend\AgentController::class, 'updateprofile']);
Route::post('/agent/updateprofile', [App\Http\Controllers\Frontend\AgentController::class, 'updateprofileStore']);
Route::get('/agent/updatepassword', [App\Http\Controllers\Frontend\AgentController::class, 'updatepassword']);
Route::post('/agent/updatepassword', [App\Http\Controllers\Frontend\AgentController::class, 'updatepasswordStore']);
Route::get('/agent/notification', [App\Http\Controllers\Frontend\AgentController::class, 'studentnotification']);
Route::post('/agent/notification', [App\Http\Controllers\Frontend\AgentController::class, 'studentnotificationsubmit']);


Route::get('/add/coupon/insert', [App\Http\Controllers\Frontend\CouponUsedController::class, 'couponInsert']);