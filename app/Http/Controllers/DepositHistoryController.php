<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositHistoryController extends Controller
{
    public static function add_deposits($deposits)
    {
        $sum = 0;
        foreach ($deposits as $deposit) {
            $sum += $deposit->amount;
        }
        return $sum;
    }

    public function pending()
    {
        $pending_deposits = Deposit::where('user_id', auth()->user()->id)->where('confirmation_status', 'pending')->get();
        $total_pending = $this->add_deposits($pending_deposits);
        return view('deposit-history.pending', [
            'pending_deposits' => $pending_deposits,
            'total_pending' => $total_pending
        ]);
    }

    public function approved()
    {
        $approved_deposits = Deposit::where('user_id', auth()->user()->id)->where('confirmation_status', 'confirmed')->get();
        $total_approved = $this->add_deposits($approved_deposits);
        return view('deposit-history.approved', [
            'approved_deposits' => $approved_deposits,
            'total_approved' => $total_approved
        ]);
    }

    public function cancelled()
    {
        $cancelled_deposits = Deposit::where('user_id', auth()->user()->id)->where('confirmation_status', 'cancelled')->get();
        $total_cancelled = $this->add_deposits($cancelled_deposits);
        return view('deposit-history.cancelled', [
            'cancelled_deposits' => $cancelled_deposits,
            'total_cancelled' => $total_cancelled
        ]);
    }
}
