<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalHistoryController extends Controller
{
    public static function add_withdrawals($withdrawals)
    {
        $sum = 0;
        foreach ($withdrawals as $withdrawal) {
            $sum += $withdrawal->amount;
        }
        return $sum;
    }

    public function pending()
    {
        $pending_withdrawals = Withdrawal::where('user_id', auth()->user()->id)->where('confirmation_status', 'pending')->get();
        $total_pending = $this->add_withdrawals($pending_withdrawals);
        return view('withdrawal-history.pending', [
            'pending_withdrawals' => $pending_withdrawals,
            'total_pending' => $total_pending
        ]);
    }

    public function approved()
    {
        $approved_withdrawals = Withdrawal::where('user_id', auth()->user()->id)->where('confirmation_status', 'confirmed')->get();
        $total_approved = $this->add_withdrawals($approved_withdrawals);
        return view('withdrawal-history.approved', [
            'approved_withdrawals' => $approved_withdrawals,
            'total_approved' => $total_approved
        ]);
    }

    public function cancelled()
    {
        $cancelled_withdrawals = Withdrawal::where('user_id', auth()->user()->id)->where('confirmation_status', 'cancelled')->get();
        $total_cancelled = $this->add_withdrawals($cancelled_withdrawals);
        return view('withdrawal-history.cancelled', [
            'cancelled_withdrawals' => $cancelled_withdrawals,
            'total_cancelled' => $total_cancelled
        ]);
    }
}
