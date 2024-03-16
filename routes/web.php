<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplePayController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\AboutAYA\AwardsController;
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
//Clear route cache:
Route::get('/route-cache', function() {
 $exitCode = Artisan::call('route:cache');
 return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 $exitCode = Artisan::call('config:cache');
 return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
 $exitCode = Artisan::call('cache:clear');
 return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
 $exitCode = Artisan::call('view:clear');
 return 'View cache cleared';
});


Route::get('/superl0g1n','App\Http\Controllers\Admin\AdminLoginController@login');
Route::post('/authlogin','App\Http\Controllers\Admin\AdminLoginController@authLogin');

Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard');

Route::get('/admin/categories','App\Http\Controllers\Admin\CategoryController@categories');
Route::get('/admin/category/add','App\Http\Controllers\Admin\CategoryController@categoryAdd');
Route::post('/admin/category/store','App\Http\Controllers\Admin\CategoryController@categoryStore');
Route::post('/admin/category/delete','App\Http\Controllers\Admin\CategoryController@categoryDelete');
Route::get('/admin/category/edit/{category_id}','App\Http\Controllers\Admin\CategoryController@categoryEdit');
Route::post('/admin/category/update','App\Http\Controllers\Admin\CategoryController@categoryUpdate');

Route::get('/admin/blog','App\Http\Controllers\Admin\BlogController@blog');
Route::get('/admin/blog/add','App\Http\Controllers\Admin\BlogController@blogAdd');
Route::post('/admin/blog/store','App\Http\Controllers\Admin\BlogController@blogStore');
Route::post('/admin/blog/delete','App\Http\Controllers\Admin\BlogController@blogDelete');
Route::get('/admin/blog/edit/{blog_id}','App\Http\Controllers\Admin\BlogController@blogEdit');
Route::post('/admin/blog/update','App\Http\Controllers\Admin\BlogController@blogUpdate');

Route::get('/admin/report','App\Http\Controllers\Admin\ReportController@report');
Route::get('/admin/report/add','App\Http\Controllers\Admin\ReportController@reportAdd');
Route::post('/admin/report/store','App\Http\Controllers\Admin\ReportController@reportStore');
Route::post('/admin/report/delete','App\Http\Controllers\Admin\ReportController@reportDelete');
Route::get('/admin/report/edit/{report_id}','App\Http\Controllers\Admin\ReportController@reportEdit');
Route::post('/admin/report/update','App\Http\Controllers\Admin\ReportController@reportUpdate');

Route::get('/admin/pagelist/','App\Http\Controllers\Admin\PageController@pageList');
Route::get('/admin/page/mbanking/edit','App\Http\Controllers\Admin\AdminMBankingController@mbanking');
Route::post('/admin/mbanking/banner/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingBanner');
Route::post('/admin/mbanking/tagline/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingTagline');
Route::post('/admin/mbanking/fact/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingFact');

Route::get('/admin/location/','App\Http\Controllers\Admin\LocationController@pageLocation');
Route::get('/admin/location/add','App\Http\Controller\Admin\LocationController@locationAdd');

Route::get('/admin/location/branch-location', [LocationController::class, 'locationBranch']);
Route::get('/admin/location/branchadd', [LocationController::class, 'branchAdd']);
Route::post('/admin/location/branch-location', [LocationController::class, 'insertBranch']);
Route::post('/admin/location/branch-location/delete', [LocationController::class, 'branchDelete']);
Route::get('/admin/location/branch-location/edit/{branch_id}', [LocationController::class, 'branchEdit']);
Route::post('/admin/location/branch-location/update', [LocationController::class, 'branchUpdate']);

Route::get('/admin/location/atm-location', [LocationController::class, 'locationAtm']);
Route::get('/admin/location/atmadd', [LocationController::class, 'atmAdd']);
Route::post('/admin/location/atm-location', [LocationController::class, 'insertAtm']);
Route::post('/admin/location/atm-location/delete', [LocationController::class, 'atmDelete']);
Route::get('/admin/location/atm-location/edit/{atm_id}', [LocationController::class, 'atmEdit']);
Route::post('/admin/location/atm-location/update', [LocationController::class, 'atmUpdate']);

Route::get('/admin/location/fx-location', [LocationController::class, 'locationFx']);
Route::get('/admin/location/fxadd', [LocationController::class, 'fxAdd']);
Route::post('/admin/location/fx-location', [LocationController::class, 'insertFx']);
Route::post('/admin/location/fx-location/delete', [LocationController::class, 'faxDelete']);
Route::get('/admin/location/fx-location/edit/{fx_id}', [LocationController::class, 'fxEdit']);
Route::post('/admin/location/fx-location/update', [LocationController::class, 'faxUpdate']);

// Admin Personal
Route::get('/admin/pagelist/personal-banking','App\Http\Controllers\Admin\PageController@pagePersoanlBankingList');
Route::get('/admin/pagelist/personal-banking/other-services/foreign-currency-exchange-service',
	'App\Http\Controllers\Admin\PersonalBanking\OtherServicesController@pageForeignCurrencyExchange');
Route::post('/admin/foreign-currency-exchange-service/special/update',
	'App\Http\Controllers\Admin\PersonalBanking\OtherServicesController@pageForeignCurrencyExchangeSpecialUpdate');
Route::post('/admin/foreign-currency-exchange-service/disclaimer/update',
	'App\Http\Controllers\Admin\PersonalBanking\OtherServicesController@pageForeignCurrencyExchangeDisclaimerUpdate');

// Admin FAQ
Route::get('/admin/faq/list', 'App\Http\Controllers\Admin\FAQController@FAQList');
Route::get('/admin/faq/add', 'App\Http\Controllers\Admin\FAQController@FAQAdd');
Route::post('/admin/faq/store', 'App\Http\Controllers\Admin\FAQController@FAQStore');
Route::get('/admin/faq/{page_slug}/list', 'App\Http\Controllers\Admin\FAQController@FAQListByPageSlug');
Route::get('/admin/faq/edit/{faq_id}', 'App\Http\Controllers\Admin\FAQController@FAQEdit');
Route::post('/admin/faq/update', 'App\Http\Controllers\Admin\FAQController@FAQUpdate');
Route::get('/admin/faq/{page_slug}/add', 'App\Http\Controllers\Admin\FAQController@FAQAddPageSlug');
Route::post('/admin/faq/page-slug/store', 'App\Http\Controllers\Admin\FAQController@FAQStorePageSlug');

// Admin About AYA
Route::get('/admin/pagelist/about-aya','App\Http\Controllers\Admin\PageController@pageAboutAYAList');
Route::get('/admin/pagelist/about-aya/ayabank-profile','App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfile');
Route::post('/admin/ayabank-profile/section1/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileSection1Update');
Route::post('admin/ayabank-profile/corporate-info/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileCorporateInfoUpdate');
Route::post('/admin/ayabank-profile/leading-info/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileLeadingInfoUpdate');
Route::post('/admin/ayabank-profile/driver_growth/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileCTA1Update');
Route::post('/admin/ayabank-profile/business_practices/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileCTA2Update');
Route::post('/admin/ayabank-profile/shareholding_info/update', 
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@ayabankProfileCTA3Update');

// mission corporate
Route::get('/admin/pagelist/about-aya/mission-corporate','App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@pageCorporateMissionBrandValues');	
Route::post('/admin/mission-corporate/ourmission/update','App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@ourmissionUpdate');
Route::post('/admin/mission-corporate/corporatevalues/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@corporatevaluesUpdate');
Route::post('/admin/mission-corporate/excellance/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@excellanceUpdate');
Route::post('/admin/mission-corporate/excellance/point-update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@excellancePointUpdate');
Route::post('/admin/mission-corporate/team/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@teamUpdate');
Route::post('/admin/mission-corporate/honesty/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@honestyUpdate');
Route::post('/admin/mission-corporate/integrity/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@integrityUpdate');
Route::post('/admin/mission-corporate/care/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@careUpdate');
Route::post('/admin/mission-corporate/sincerity/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@sincerityUpdate');
Route::post('/admin/mission-corporate/mission-corporate-cta/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@missioncorporateCTAUpdate');
Route::post('/admin/mission-corporate/brandpromise/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMissionBrandValuesController@brandpromiseUpdate');

// corporate goal
Route::get('/admin/pagelist/about-aya/corporate-goals', 'App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@pageCorporateGoals');
Route::post('/admin/corporate-goals/description/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@descriptionUpdate');
Route::post('/admin/corporate-goals/customer/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@customerUpdate');
Route::post('/admin/corporate-goals/community/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@communityUpdate');
Route::post('/admin/corporate-goals/staff/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@staffUpdate');
Route::post('/admin/corporate-goals/people/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@peopleUpdate');
Route::post('/admin/corporate-goals/stakeholder/update','App\Http\Controllers\Admin\AboutAYA\CorporateGoalsController@stakeholderUpdate');

// pagelist career
Route::get('admin/pagelist/about-aya/career/life-at-aya', 'App\Http\Controllers\Admin\AboutAYA\CareerController@lifeAtAya');
Route::get('admin/pagelist/about-aya/career/ayaculture', 'App\Http\Controllers\Admin\AboutAYA\CareerController@ayaCulture');
Route::get('admin/pagelist/about-aya/career/employee-development', 'App\Http\Controllers\Admin\AboutAYA\CareerController@employeeDevelopment');
Route::get('admin/pagelist/about-aya/career/career-opportunities', 'App\Http\Controllers\Admin\AboutAYA\CareerController@careerOpportunities');

// life at Aya
Route::post('admin/pagelist/about-aya/career/life-at-aya/life-aya/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@lifeAyaUpdate');
Route::post('admin/pagelist/about-aya/career/life-at-aya/work-life-balance/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@workLifeBalanceUpdate');
Route::post('admin/pagelist/about-aya/career/life-at-aya/health-wellness/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@healthUpdate');
Route::post('admin/pagelist/about-aya/career/life-at-aya/financial-welbeing/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@financialWellbeingUpdate');
Route::post('admin/pagelist/about-aya/career/life-at-aya/family-support/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@familySupportUpdate');
Route::post('admin/pagelist/about-aya/career/life-at-aya/rewards/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@rewardsUpdate');

// aya culture
Route::post('admin/pagelist/about-aya/career/aya-culture/culture/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@ayaCultureUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/our-value/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@ourValueUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/card/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@cardUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/governance/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@governanceUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/equal/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@equalUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/bonded/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@bondedUpdate');
Route::post('admin/pagelist/about-aya/career/aya-culture/continual/update', 'App\Http\Controllers\Admin\AboutAYA\CareerController@continualUpdate');

// Awards
Route::post('/admin/awards/awarddesc', [AwardsController::class, 'awardDesc']);
Route::post('/admin/awards/descupdate', [AwardsController::class, 'awarddescUpdate']);
Route::get('/admin/pagelist/about-aya/awards', [AwardsController::class, 'awardPage']);
Route::get('/admin/awards', [AwardsController::class, 'award']);
Route::get('/admin/awards/awardadd', [AwardsController::class, 'awardAdd']);
Route::post('/admin/awards/insert', [AwardsController::class, 'insertAward']);
Route::post('/admin/awards/delete', [AwardsController::class, 'awardDelete']);
Route::get('/admin/awards/edit/{award_id}', [AwardsController::class, 'awardEdit']);
Route::post('/admin/awards/update', [AwardsController::class, 'awardUpdate']);



Route::get('/admin/pagelist/about-aya/message-from-chairman',
	'App\Http\Controllers\Admin\AboutAYA\MessagefromChairmanController@pageMsgFromChairman');	



Route::get('/admin/pagelist/about-aya/ayabank-profile/business_practices',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPractices');
Route::post('/admin/ayabank-profile/business-practies/section1/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPracticesSection1Update');
Route::post('/admin/ayabank-profile/business-practies/CTA_1/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPracticesCTA1Update');
Route::post('/admin/ayabank-profile/business-practies/CTA_2/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPracticesCTA2Update');
Route::post('/admin/ayabank-profile/business-practies/CTA_3/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPracticesCTA3Update');
Route::post('/admin/ayabank-profile/business-practies/CTA_4/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileBusinessPracticesCTA4Update');

Route::get('/admin/pagelist/about-aya/ayabank-profile/shareholding_info',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileShareholdingInfo');
Route::post('/admin/ayabank-profile/shareholding-info/section1/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileShareholdingInfoSection1Update');
Route::post('/admin/ayabank-profile/shareholding-info/holding_table/update',
	'App\Http\Controllers\Admin\AboutAYA\AYABankProfileController@pageAYAbankProfileShareholdingInfoTableUpdate');

Route::get('/admin/pagelist/about-aya/corporate-policies',
	'App\Http\Controllers\Admin\AboutAYA\CorporatePoliciesController@pageCorporatePolicies');
Route::post('/admin/corporate-policies/section1/update',
	'App\Http\Controllers\Admin\AboutAYA\CorporatePoliciesController@pageCPSection1');

Route::get('/admin/pagelist/about-aya/stakeholder-management',
	'App\Http\Controllers\Admin\AboutAYA\StakeholderManagementController@pageStakeholderManagement');
Route::post('/admin/stakeholder-management/chart/update',
	'App\Http\Controllers\Admin\AboutAYA\StakeholderManagementController@chartSectionUpdate');
Route::post('/admin/stakeholder-management/engagement/update',
	'App\Http\Controllers\Admin\AboutAYA\StakeholderManagementController@engagementSectionUpdate');

Route::get('/admin/corporate-milestones', 'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestones');
Route::get('/admin/corporate-milestones/add', 'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesAdd');
Route::post('/admin/corporate-milestones/store', 'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesStore');
Route::get('/admin/corporate-milestones/edit/{milestones_id}',
	'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesEdit');
Route::post('/admin/corporate-milestones/update', 'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesUpdate');
Route::post('/admin/corporate-milestones/delete', 'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesDelete');
Route::get('/admin/corporate-milestones/add-detail/{milestones_id}',
	'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestonesDetail');
Route::get('/admin/corporate-milestones/detail/add/{milestones_id}',
	'App\Http\Controllers\Admin\AboutAYA\CorporateMilestonesController@milestoneDetailAdd');

Route::post('/admin/banner/update', 'App\Http\Controllers\Admin\PageController@bannerUpdate');
Route::post('/admin/tagline/update', 'App\Http\Controllers\Admin\PageController@taglineUpdate');

Route::get('/admin/exchange-rate','App\Http\Controllers\Admin\ExchangeController@index');
Route::get('/admin/exchange-rate/edit','App\Http\Controllers\Admin\ExchangeController@editExchange');
Route::post('/admin/exchange/store','App\Http\Controllers\Admin\ExchangeController@updateExchange');

Route::get('/admin/worker-remittance','App\Http\Controllers\Admin\ExchangeController@workerRemittanceIndex');
Route::get('/admin/worker-remittance-rate/edit','App\Http\Controllers\Admin\ExchangeController@workerRemittanceEdit');
Route::post('/admin/worker-remittance/store','App\Http\Controllers\Admin\ExchangeController@workerRemittanceUpdate');

Route::get('/admin/media','App\Http\Controllers\Admin\MediaController@index');
Route::get('/admin/media/upload','App\Http\Controllers\Admin\MediaController@uploadMedia');
Route::post('/admin/media/store','App\Http\Controllers\Admin\MediaController@storeMedia');
Route::get('/admin/media/edit/{media_id}','App\Http\Controllers\Admin\MediaController@editMedia');
Route::post('/admin/media/update','App\Http\Controllers\Admin\MediaController@updateMedia');

Route::get('/admin/logout','App\Http\Controllers\Admin\AdminController@logout');

Route::get('/share-post', 'App\Http\Controllers\SharePostController@share');

Route::any('/','App\Http\Controllers\HomeController@indexNew');

// Digital
Route::get('/digital-services/online-payment-services/mobile-banking','App\Http\Controllers\Digital\MobileBankingController@mbindex');
Route::get('/digital-services/online-payment-services/internet-banking','App\Http\Controllers\Digital\InternetBankingController@index');
Route::get('/digital-services/online-payment-services/corporate-internet-banking','App\Http\Controllers\Digital\CorporateInternetBankingController@index');

Route::get('/digital-services/card-services/merchant-services/pos','App\Http\Controllers\Digital\POSController@index');
Route::get('/digital-services/card-services/merchant-services/ecommerce','App\Http\Controllers\Digital\EcommerceController@index');

Route::get('/digital-services/card-services/prepaid-card','App\Http\Controllers\Digital\PrepaidCardController@index');
Route::get('/digital-services/card-services/simple-pay','App\Http\Controllers\Digital\SimplePayController@index');
Route::get('/digital-services/card-services/credit-card','App\Http\Controllers\Digital\CreditCardController@index');
Route::get('/digital-services/card-services/debit-card','App\Http\Controllers\Digital\DebitCardController@index');

Route::get('/digital-services/atm','App\Http\Controllers\Digital\ATMController@index');

Route::get('/digital-services/wallet-solution/aya-pay','App\Http\Controllers\Digital\AyaPayController@index');

Route::get('/digital-services/guideline/digital-secure/sms-alert','App\Http\Controllers\Digital\SMSAlertController@index');

Route::get('/digital-services/guideline/digital-secure','App\Http\Controllers\Digital\DigitalSecureController@index');
Route::get('/digital-services/guideline/digital-secure/mm','App\Http\Controllers\Digital\DigitalSecureController@indexMM');

Route::get('/digital-services/guideline/frequently-used-digital','App\Http\Controllers\Digital\FrequentlyUsedDigitalController@index');

Route::get('/digital-services/card-services/reset-pin','App\Http\Controllers\Digital\ResetPinController@index');


// Personal
Route::get('/personal-banking/insurance/general/health','App\Http\Controllers\Insurance\HealthInsuranceController@index');
Route::get('/personal-banking/insurance/general/motor','App\Http\Controllers\Insurance\MotorInsuranceController@index');
Route::get('/personal-banking/insurance/general/fire','App\Http\Controllers\Insurance\FireInsuranceController@index');
Route::get('/personal-banking/insurance/general/personal-accident','App\Http\Controllers\Insurance\PAInsuranceController@index');
Route::get('/personal-banking/insurance/general/aya-go','App\Http\Controllers\Insurance\AYAGOInsuranceController@index');
Route::get('/personal-banking/insurance/general/aya-joy','App\Http\Controllers\Insurance\AYAJoyInsuranceController@index');
Route::get('/personal-banking/insurance/life/universal','App\Http\Controllers\Insurance\LifeInsuranceController@universalIndex');
Route::get('/personal-banking/insurance/life/education','App\Http\Controllers\Insurance\LifeInsuranceController@educationIndex');
Route::get('/personal-banking/insurance/life/one-health-solution-individual-plan','App\Http\Controllers\Insurance\LifeInsuranceController@oneHealthIndex');
Route::get('/personal-banking/insurance/life/short-term','App\Http\Controllers\Insurance\LifeInsuranceController@shorttermIndex');

Route::get('/personal-banking/account-saving/call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@index');
Route::get('/personal-banking/account-saving/call-deposit/premium-call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@premiumIndex');
Route::get('/personal-banking/account-saving/call-deposit/new-business-call','App\Http\Controllers\AccountSaving\CallDepositController@newBusinessCallIndex');

Route::get('/personal-banking/account-saving/current-deposit','App\Http\Controllers\AccountSaving\CurrentDepositController@index');
Route::get('/personal-banking/account-saving/current-deposit/regular-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@RegularIndex');
Route::get('/personal-banking/account-saving/current-deposit/new-business-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@newBusinessIndex');
Route::get('/personal-banking/account-saving/current-deposit/seafarer-acount','App\Http\Controllers\AccountSaving\CurrentDepositController@seafererIndex');
Route::get('/personal-banking/account-saving/current-deposit/retail-fca-current','App\Http\Controllers\AccountSaving\CurrentDepositController@retailFCAIndex');

Route::get('/personal-banking/account-saving/fixed-deposit','App\Http\Controllers\AccountSaving\FixedDepositController@index');
Route::get('/personal-banking/account-saving/saving-deposit','App\Http\Controllers\AccountSaving\SavingDepositController@index');
Route::get('/personal-banking/account-saving/saving-deposit/aya-regular-saving','App\Http\Controllers\AccountSaving\SavingDepositController@regularSavingIndex');
Route::get('/personal-banking/account-saving/saving-deposit/aya-maximizer-saving','App\Http\Controllers\AccountSaving\SavingDepositController@maximizerSavingIndex');
Route::get('/personal-banking/account-saving/saving-deposit/aya-loyal-saving','App\Http\Controllers\AccountSaving\SavingDepositController@loyalSavingIndex');
Route::get('/personal-banking/account-saving/saving-deposit/ngwe-toe-mae-shwe-o','App\Http\Controllers\AccountSaving\SavingDepositController@shweOindex');
Route::get('/personal-banking/account-saving/saving-deposit/aya-su-buu','App\Http\Controllers\AccountSaving\SavingDepositController@suBuuIndex');

Route::get('/personal-banking/royal-banking','App\Http\Controllers\PremiumBankingController@index');

Route::get('/personal-banking/remittance/local','App\Http\Controllers\RemittanceController@localIndex');
Route::get('/personal-banking/remittance/international','App\Http\Controllers\RemittanceController@interIndex');
Route::get('/personal-banking/remittance/payment','App\Http\Controllers\RemittanceController@paymentIndex');

Route::get('/personal-banking/borrowing/hire-purchase/auto-loan','App\Http\Controllers\Borrowing\HirePurchaseController@autoLoanIndex');
Route::get('/personal-banking/borrowing/hire-purchase/c2c-auto-loan','App\Http\Controllers\Borrowing\HirePurchaseController@C2CAutoLoanIndex');
Route::get('/personal-banking/borrowing/hire-purchase/education-loan','App\Http\Controllers\Borrowing\HirePurchaseController@educationLoanIndex');
Route::get('/personal-banking/borrowing/hire-purchase/construction-loan','App\Http\Controllers\Borrowing\HirePurchaseController@constructionLoanIndex');
Route::get('/personal-banking/borrowing/hire-purchase/home-loan','App\Http\Controllers\Borrowing\HirePurchaseController@homeLoanIndex');

Route::get('/personal-banking/other-services/foreign-currency-exchange-service','App\Http\Controllers\OtherServicesController@foreignCurrencyIndex');
Route::get('/personal-banking/other-services/safe-deposit','App\Http\Controllers\OtherServicesController@safeDepositIndex');

// Busineess
Route::get('/business/account-saving/call-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@callDepositIndex');
Route::get('/business/account-saving/saving-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@savingDepositIndex');
Route::get('/business/account-saving/current-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@currentDepositIndex');
Route::get('/business/account-saving/fixed-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@fixedDepositIndex');

Route::get('/business/remittance-payments/local-payments','App\Http\Controllers\Business\RemittanceController@localPaymentsIndex');
Route::get('/business/remittance-payments/international-payments','App\Http\Controllers\Business\RemittanceController@internationalPaymentsIndex');

Route::get('/business/borrowing/corporate-business-loan','App\Http\Controllers\Business\BorrowingController@corporateBusinessLoanIndex');
Route::get('/business/borrowing/hire-purchase','App\Http\Controllers\Business\BorrowingController@hirePurchaseIndex');
Route::get('/business/borrowing/sme','App\Http\Controllers\Business\BorrowingController@SMEIndex');

Route::get('/business/trade/trade-financing','App\Http\Controllers\Business\TradeController@tradeFinancingIndex');
Route::get('/business/trade/trade-services','App\Http\Controllers\Business\TradeController@tradeServicesIndex');

Route::get('/business/cash-management','App\Http\Controllers\Business\CashManagementController@CMIndex');

Route::get('/business/insurance/domestic-marine-cargo','App\Http\Controllers\Business\InsuranceController@domesticMarineCargoIndex');
Route::get('/business/insurance/oversea-marine-cargo','App\Http\Controllers\Business\InsuranceController@overseaMarineCargoIndex');
Route::get('/business/insurance/domestic-inland-transit','App\Http\Controllers\Business\InsuranceController@domesticInlandTransitIndex');
Route::get('/business/insurance/car-ear','App\Http\Controllers\Business\InsuranceController@CAREARIndex');
Route::get('/business/insurance/industrial-all-risk','App\Http\Controllers\Business\InsuranceController@IARIndex');
Route::get('/business/insurance/group-life','App\Http\Controllers\Business\InsuranceController@groupLifeIndex');

Route::get('/business/insurance/motor','App\Http\Controllers\Business\InsuranceController@motorIndex');
Route::get('/business/insurance/fire','App\Http\Controllers\Business\InsuranceController@fireIndex');

Route::get('/test','App\Http\Controllers\HomeController@testIndex');


// About AYA
// about-aya/who-we-are-corporate-profile/awards
Route::get('/about-aya/who-we-are/leadership/message-from-chairman','App\Http\Controllers\AboutAYA\WhoWeAreController@msgChairmanIndex');
Route::get('/about-aya/who-we-are/leadership/meet-our-leaders','App\Http\Controllers\AboutAYA\WhoWeAreController@meetOurLeadersIndex');
Route::get('/about-aya/who-we-are/leadership/meet-our-leaders/contact-to-board','App\Http\Controllers\AboutAYA\WhoWeAreController@contactBoardIndex');

Route::get('/about-aya/who-we-are/corporate-profile/ayabank-profile','App\Http\Controllers\AboutAYA\WhoWeAreController@profileIndex');
Route::get('/about-aya/who-we-are/corporate-profile/ayabank-profile/shareholding-information','App\Http\Controllers\AboutAYA\WhoWeAreController@shareHoldingIndex');
Route::get('/about-aya/who-we-are/corporate-profile/ayabank-profile/business-practices','App\Http\Controllers\AboutAYA\WhoWeAreController@businessPracticeIndex');
Route::get('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise','App\Http\Controllers\AboutAYA\WhoWeAreController@missionIndex');

Route::get('/about-aya/who-we-are/corporate-profile/corporate-milestones','App\Http\Controllers\AboutAYA\WhoWeAreController@milestoneIndex');

Route::get('/about-aya/who-we-are/corporate-profile/awards','App\Http\Controllers\AboutAYA\WhoWeAreController@awardIndex');

Route::get('/about-aya/who-we-are/our-strategies/stakeholder-management','App\Http\Controllers\AboutAYA\WhoWeAreController@stakeholderIndex');
Route::get('/about-aya/who-we-are/our-strategies/corporate-strategy','App\Http\Controllers\AboutAYA\WhoWeAreController@corporateStrategyIndex');

Route::get('/about-aya/who-we-are/corporate-profile/corporate-goals','App\Http\Controllers\AboutAYA\WhoWeAreController@corporatGoalsIndex');

Route::get('/about-aya/who-we-are/what-we-offer/why-us','App\Http\Controllers\AboutAYA\WhoWeAreController@whyUsIndex');

Route::get('/about-aya/who-we-are/foreign-direct-investment','App\Http\Controllers\AboutAYA\WhoWeAreController@FDIIndex');

Route::get('/about-aya/governance/risk-management','App\Http\Controllers\AboutAYA\GovernanceController@riskManagementIndex');
Route::get('/about-aya/governance/risk-management/risk-governance','App\Http\Controllers\AboutAYA\GovernanceController@riskGovernanceIndex');
Route::get('/about-aya/governance/risk-management/risk-management-framework',
	'App\Http\Controllers\AboutAYA\GovernanceController@riskMgmtFrameworkIndex');
Route::get('/about-aya/governance/risk-management/risk-management-control',
	'App\Http\Controllers\AboutAYA\GovernanceController@riskMgmtControlIndex');
Route::get('/about-aya/governance/risk-management/managing-risk','App\Http\Controllers\AboutAYA\GovernanceController@managingRiskIndex');

Route::get('/about-aya/governance/compliance/compliance','App\Http\Controllers\AboutAYA\GovernanceController@complianceIndex');
Route::get('/about-aya/governance/compliance/aml-cft','App\Http\Controllers\AboutAYA\GovernanceController@AMLCFTIndex');

Route::get('/about-aya/governance/corporate-governance','App\Http\Controllers\AboutAYA\GovernanceController@corporateGovernanceIndex');

Route::get('/about-aya/governance/corporate-policies','App\Http\Controllers\AboutAYA\GovernanceController@corporatePolicyIndex');

Route::get('/about-aya/news-room/corporate-news','App\Http\Controllers\AboutAYA\NewsController@corporateIndex');
Route::get('/about-aya/news-room/corporate-news/{permalink}','App\Http\Controllers\AboutAYA\NewsController@corporateDetailIndex');
Route::get('/about-aya/news-room/corporate-news/year/{year}','App\Http\Controllers\AboutAYA\NewsController@corporateYearIndex');

Route::get('/about-aya/news-room/csr-news','App\Http\Controllers\AboutAYA\NewsController@CSRNewsIndex');
Route::get('/about-aya/news-room/csr-news/{permalink}','App\Http\Controllers\AboutAYA\NewsController@CSRDetailIndex');
Route::get('/about-aya/news-room/csr-news/year/{year}','App\Http\Controllers\AboutAYA\NewsController@CSRYearIndex');

Route::get('/about-aya/news-room/announcements','App\Http\Controllers\AboutAYA\NewsController@AnnoucementIndex');
Route::get('/about-aya/news-room/announcements/{permalink}','App\Http\Controllers\AboutAYA\NewsController@AnnoucementDetailIndex');
Route::get('/about-aya/news-room/announcements/year/{year}','App\Http\Controllers\AboutAYA\NewsController@AnnoucementYearIndex');

Route::get('/about-aya/news-room/press-release','App\Http\Controllers\AboutAYA\NewsController@pressReleaseIndex');
Route::get('/about-aya/news-room/press-release/{permalink}','App\Http\Controllers\AboutAYA\NewsController@pressReleaseDetailIndex');
Route::get('/about-aya/news-room/press-release/year/{year}','App\Http\Controllers\AboutAYA\NewsController@pressReleaseYearIndex');

Route::get('/about-aya/news-room/reports','App\Http\Controllers\AboutAYA\NewsController@reportIndex');
Route::post('/report_download','App\Http\Controllers\AboutAYA\NewsController@reportDownload');

Route::any('/about-aya/network/branch-locations','App\Http\Controllers\AboutAYA\NetworkController@branchIndex');
Route::any('/about-aya/network/atm-locations','App\Http\Controllers\AboutAYA\NetworkController@ATMIndex');
Route::any('/about-aya/network/fx-counter-locations','App\Http\Controllers\AboutAYA\NetworkController@FXIndex');

Route::post('/about-aya/network/atm-locations-search-value','App\Http\Controllers\AboutAYA\NetworkController@locationSearch');
Route::post('/about-aya/network/branch-locations-search-value','App\Http\Controllers\AboutAYA\NetworkController@branchlocationSearch');
Route::post('/about-aya/network/fx-locations-search-value','App\Http\Controllers\AboutAYA\NetworkController@FXSearch');

Route::any('/about-aya/network/correspondent-bank','App\Http\Controllers\AboutAYA\NetworkController@correspondentBankIndex');

Route::get('/about-aya/career/career-opportunities','App\Http\Controllers\AboutAYA\CareerController@careerOpportunitiesIndex');
Route::get('/about-aya/career/aya-culture','App\Http\Controllers\AboutAYA\CareerController@ayaCultureIndex');
Route::get('/about-aya/career/life-at-aya','App\Http\Controllers\AboutAYA\CareerController@lifeAtAYAIndex');
Route::get('/about-aya/career/employee-development','App\Http\Controllers\AboutAYA\CareerController@employeeDevIndex');

Route::get('/about-aya/sustainability/our-commitment','App\Http\Controllers\AboutAYA\SustainabilityController@sustainabilityIndex');
Route::get('/about-aya/sustainability/our-approach/social-sustainability','App\Http\Controllers\AboutAYA\SustainabilityController@socialSustainabilityIndex');
Route::get('/about-aya/sustainability/our-approach/environmental-sustainability','App\Http\Controllers\AboutAYA\SustainabilityController@environmentalSustainabilityIndex');
Route::get('/about-aya/sustainability/our-approach/economic-sustainability','App\Http\Controllers\AboutAYA\SustainabilityController@economicSustainabilityIndex');
Route::get('/about-aya/sustainability/our-commitment/ungc-compliance','App\Http\Controllers\AboutAYA\SustainabilityController@UNGCIndex');
Route::get('/about-aya/sustainability/corporate-social-responsibility','App\Http\Controllers\AboutAYA\SustainabilityController@CSRIndex');
Route::get('/about-aya/sustainability/avenue-sustain/non-financial-performance','App\Http\Controllers\AboutAYA\SustainabilityController@nonFinancialPerformanceIndex');

Route::get('/contact-us','App\Http\Controllers\ContactController@index');
Route::get('/grievance-handling','App\Http\Controllers\GrievanceHandlingController@index');

// Enquiry Form
Route::get('/enquiry','App\Http\Controllers\EnquiryController@index');
Route::post('/enquiry_form_submit','App\Http\Controllers\EnquiryController@enquirySave')->name('save_enquiry');


// Sitemap
Route::get('/digital-services','App\Http\Controllers\SiteMapController@digitalIndex');
Route::get('/digital-services/online-payment-services','App\Http\Controllers\SiteMapController@digiOnlineIndex');
Route::get('/digital-services/card-services', 'App\Http\Controllers\SiteMapController@digiCardServicesIndex');
Route::get('/digital-services/card-services/merchant-services', 'App\Http\Controllers\SiteMapController@digiCardMerchantIndex');
Route::get('/digital-services/card-services/card-privilege', 'App\Http\Controllers\SiteMapController@digiCardPrivilegeIndex');
Route::get('/digital-services/wallet-solution', 'App\Http\Controllers\SiteMapController@digiWalletSolutionIndex');
Route::get('/digital-services/guideline', 'App\Http\Controllers\SiteMapController@digiGuidelineIndex');

Route::get('/personal-banking','App\Http\Controllers\SiteMapController@personalIndex');
Route::get('/personal-banking/account-saving','App\Http\Controllers\SiteMapController@personalACIndex');
Route::get('/personal-banking/borrowing','App\Http\Controllers\SiteMapController@personalBorrowIndex');
Route::get('/personal-banking/borrowing/hire-purchase','App\Http\Controllers\SiteMapController@personalHirePurchaseIndex');
Route::get('/personal-banking/remittance','App\Http\Controllers\SiteMapController@personalRemittanceIndex');
Route::get('/personal-banking/insurance','App\Http\Controllers\SiteMapController@personalInsIndex');
Route::get('/personal-banking/insurance/general','App\Http\Controllers\SiteMapController@personalGeneralInsIndex');
Route::get('/personal-banking/insurance/life','App\Http\Controllers\SiteMapController@personalLifeInsIndex');
Route::get('/personal-banking/insurance/general/travel','App\Http\Controllers\SiteMapController@personalTravelInsIndex');
Route::get('/personal-banking/other-services','App\Http\Controllers\SiteMapController@personalOtherIndex');

Route::get('/business-banking','App\Http\Controllers\SiteMapController@businessIndex');
Route::get('/business-banking/account-saving','App\Http\Controllers\SiteMapController@businessACIndex');
Route::get('/business-banking/remittance','App\Http\Controllers\SiteMapController@businessRemitIndex');
Route::get('/business-banking/borrowing','App\Http\Controllers\SiteMapController@businessBorrowingIndex');
Route::get('/business-banking/trade','App\Http\Controllers\SiteMapController@businessTradeIndex');
Route::get('/business-banking/insurance','App\Http\Controllers\SiteMapController@businessInsIndex');

Route::get('/about-aya','App\Http\Controllers\SiteMapController@aboutAYAIndex');
Route::get('/about-aya/who-we-are','App\Http\Controllers\SiteMapController@whoWeAreIndex');
Route::get('/about-aya/who-we-are/corporate-profile','App\Http\Controllers\SiteMapController@corporateProfileIndex');
Route::get('/about-aya/who-we-are/leadership','App\Http\Controllers\SiteMapController@leadershipIndex');
Route::get('/about-aya/who-we-are/our-strategies','App\Http\Controllers\SiteMapController@ourStrategiesIndex');
Route::get('/about-aya/who-we-are/what-we-offer','App\Http\Controllers\SiteMapController@whatWeOfferIndex');

Route::get('/about-aya/governance','App\Http\Controllers\SiteMapController@governanceIndex');
Route::get('/about-aya/news-room','App\Http\Controllers\SiteMapController@newsroomIndex');

Route::get('/about-aya/network','App\Http\Controllers\SiteMapController@networkIndex');

Route::get('/about-aya/career/','App\Http\Controllers\SiteMapController@careerIndex');

Route::get('/about-aya/sustainability','App\Http\Controllers\SiteMapController@sustainabilityIndex');

Route::get('/about-aya/sustainability/our-approach', 'App\Http\Controllers\SiteMapController@ourApproachIndex');

Route::get('/under-maintenance','App\Http\Controllers\SiteMapController@underMaintainIndex');
Route::get('/privacy-notice-cookie-policy','App\Http\Controllers\SiteMapController@cookiePolicyIndex');
Route::get('/about-aya/governance/compliance','App\Http\Controllers\SiteMapController@complianceIndex');

Route::get('/about-aya/sustainability/avenue-sustain', 'App\Http\Controllers\SiteMapController@nonFinancialIndex');


// Redirect
Route::get('/smefinancing ', function () {
    return redirect('/business/borrowing/sme#micro_loan');
});
Route::get('/microloan ', function () {
    return redirect('/business/borrowing/sme#micro_loan');
});

Route::any('/home','App\Http\Controllers\HomeController@indexNew');



