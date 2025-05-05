<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\LocalTransferController;
use App\Http\Controllers\DepositHistoryController;
use App\Http\Controllers\EarningHistoryController;
use App\Http\Controllers\DomesticTransferController;
use App\Http\Controllers\WithdrawalHistoryController;
use App\Http\Controllers\Admin\PendingDepositsController;
use App\Http\Controllers\InternationalTransferController;
use App\Http\Controllers\Admin\PendingTransfersController;
use App\Http\Controllers\Admin\MaturedInvestmentsController;
use App\Http\Controllers\Admin\PendingInvestmentsController;
use App\Http\Controllers\Admin\PendingWithdrawalsController;
use App\Http\Controllers\Admin\AdminTransactionsController;
use App\Http\Controllers\Admin\ConfirmedWithdrawalsController;
use App\Http\Controllers\MarketingPagesController;

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

Route::get('/', [MarketingPagesController::class, 'home'])->name('home');
Route::get('/about', [MarketingPagesController::class, 'about'])->name('about');
Route::get('/services', [MarketingPagesController::class, 'services'])->name('services');
Route::get('/contact', [MarketingPagesController::class, 'contact'])->name('contact');

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    dd('Done');
});

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    dd('cleared app cache');
});

Route::get('/cache', function () {
    Artisan::call('optimize');
    dd('optimized app cache');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/transactions', [TransactionsController::class, 'index']);
    Route::get('transactions/receipt', [TransactionsController::class, 'generateReceipt']);
    Route::get('/transactions/{hash}', [TransactionsController::class, 'show']);

    Route::get('/international-transfer', [InternationalTransferController::class, 'create']);
    Route::post('/international-transfer', [InternationalTransferController::class, 'store']);
    Route::post('/international-transfer/otp', [InternationalTransferController::class, 'otp']);
    Route::get('/international-transfer/otp', [InternationalTransferController::class, 'view_otp']);

    Route::get('/domestic-transfer', [DomesticTransferController::class, 'create']);
    Route::post('/domestic-transfer', [DomesticTransferController::class, 'store']);
    Route::post('/domestic-transfer/otp', [DomesticTransferController::class, 'otp']);
    Route::get('/domestic-transfer/otp', [DomesticTransferController::class, 'view_otp']);

    Route::get('/local-transfer', [LocalTransferController::class, 'create']);
    Route::post('/local-transfer', [LocalTransferController::class, 'store']);
    Route::post('/local-transfer/otp', [LocalTransferController::class, 'otp']);
    Route::get('/local-transfer/otp', [LocalTransferController::class, 'view_otp']);

    // Route::get('/invest', [InvestmentController::class, 'index'])->name('invest');
    // Route::get('/invest/{plan}', [InvestmentController::class, 'create']);
    // Route::post('/invest/{plan}', [InvestmentController::class, 'store']);

    Route::get('/deposit', [DepositController::class, 'index']);
    Route::post('/deposit/initiate', [DepositController::class, 'create']);
    Route::post('/deposit', [DepositController::class, 'store']);

    // Route::get('/deposit/history/pending', [DepositHistoryController::class, 'pending'])->name('deposit.history.pending');
    // Route::get('/deposit/history/approved', [DepositHistoryController::class, 'approved'])->name('deposit.history.approved');
    // Route::get('/deposit/history/cancelled', [DepositHistoryController::class, 'cancelled'])->name('deposit.history.cancelled');

    // Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
    // Route::post('/withdraw/initiate', [WithdrawController::class, 'create']);
    // Route::post('/withdraw', [WithdrawController::class, 'store']);

    // Route::get('/withdraw/history/pending', [WithdrawalHistoryController::class, 'pending'])->name('withdraw.history.pending');
    // Route::get('/withdraw/history/approved', [WithdrawalHistoryController::class, 'approved'])->name('withdraw.history.approved');
    // Route::get('/withdraw/history/cancelled', [WithdrawalHistoryController::class, 'cancelled'])->name('withdraw.history.cancelled');

    // Route::get('/earnings/history', [EarningHistoryController::class, 'index'])->name('earning.history');

    // Route::get('/referrals', [ReferralController::class, 'index'])->name('referral');
});


Route::middleware('admin')->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/users/suspend', [UserController::class, 'suspend']);
    Route::get('/admin/users/delete', [UserController::class, 'delete']);
    Route::get('/admin/users/debit-or-credit', [UserController::class, 'create_debit_or_credit']);
    Route::post('/admin/users/debit-or-credit', [UserController::class, 'store_debit_or_credit']);
    Route::get('/admin/users/details', [UserController::class, 'edit']);
    Route::post('/admin/users/details', [UserController::class, 'store']);

    Route::get('/admin/create-account', [UserController::class, 'show_create_account']);
    Route::post('/admin/create-account', [UserController::class, 'create_account']);

    Route::get('/admin/deposits/pending', [PendingDepositsController::class, 'index']);
    Route::get('/admin/deposits/approve', [PendingDepositsController::class, 'approve']);
    Route::get('/admin/deposits/details', [PendingDepositsController::class, 'edit']);
    Route::post('/admin/deposits/details', [PendingDepositsController::class, 'store']);

    Route::get('/admin/transfers/pending', [PendingTransfersController::class, 'index']);
    Route::get('/admin/transfers/approve', [PendingTransfersController::class, 'approve']);
    Route::get('/admin/transfers/details', [PendingTransfersController::class, 'edit']);
    Route::post('/admin/transfers/details', [PendingTransfersController::class, 'store']);

    Route::get('/admin/transactions', [AdminTransactionsController::class, 'index']);
    // Route::get('/admin/transfers/approve', [PendingTransfersController::class, 'approve']);
    // Route::get('/admin/transfers/details', [PendingTransfersController::class, 'edit']);
    // Route::post('/admin/transfers/details', [PendingTransfersController::class, 'store']);

    Route::get('/admin/investments/pending', [PendingInvestmentsController::class, 'index']);
    Route::get('/admin/investments/approve', [PendingInvestmentsController::class, 'approve']);
    Route::get('/admin/investments/details', [PendingInvestmentsController::class, 'edit']);

    Route::get('/admin/investments/matured', [MaturedInvestmentsController::class, 'index']);
    Route::get('/admin/investments/matured/details', [MaturedInvestmentsController::class, 'edit']);

    Route::get('/admin/withdrawals/pending', [PendingWithdrawalsController::class, 'index']);
    Route::get('/admin/withdrawals/approve', [PendingWithdrawalsController::class, 'approve']);
    Route::get('/admin/withdrawals/details', [PendingWithdrawalsController::class, 'edit']);

    Route::get('/admin/withdrawals/confirmed', [ConfirmedWithdrawalsController::class, 'index']);
    Route::get('/admin/withdrawals/confirmed/details', [ConfirmedWithdrawalsController::class, 'edit']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/password', [ProfileController::class, 'show_password'])->name('profile.password');
    Route::post('/profile/profile-picture', [ProfileController::class, 'profile_picture']);
    Route::post('/profile/personal', [ProfileController::class, 'personal']);
    Route::post('/profile/password', [ProfileController::class, 'password']);
    Route::post('/profile/contact', [ProfileController::class, 'contact']);
});

require __DIR__ . '/auth.php';
