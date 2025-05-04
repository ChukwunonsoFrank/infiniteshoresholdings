<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Mail\TransferApproved;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PendingTransfersController extends Controller
{
    public function index()
    {
        $pending_transfers = Transfer::where('status', 'pending')->get();
        return view('admin.pending-transfers.index', [
            'pending_transfers' => $pending_transfers
        ]);
    }

    public function approve(Request $request)
    {
        $id = $request->id;
        $transfer = Transfer::where('id', $id)->first();
        $transfer->status = 'confirmed';
        $transfer->save();

        $user = User::where('id', $transfer->user_id)->first();
        $new_balance = ($user->balance / 100) - ($transfer->amount / 100);
        $user->balance = $new_balance * 100;
        $new_total_withdrawn = ($user->total_withdrawn / 100) + ($transfer->amount / 100);
        $user->total_withdrawn = $new_total_withdrawn * 100;
        $user->save();

        Mail::to($user->email)->send(new TransferApproved($user->fullname, $transfer->hash, $transfer->amount, $transfer->transfer_type, $transfer->account_number, $transfer->receipient_bank, $transfer->description, $transfer->status));
        return back();
    }

    public function edit(Request $request)
    {
        $transfer_id = $request->id;
        $transfer = Transfer::where('id', $transfer_id)->first();
        return view('admin.pending-transfers.edit', [
            'transfer' => $transfer
        ]);
    }

    public function store(Request $request)
    {
        $transfer_id = $request->id;
        Transfer::where('id', $transfer_id)->update([
            'amount' => (double)$request->amount * 100,
            'hash' => $request->hash,
            'receipient_name' => $request->receipient_name,
            'account_number' => $request->account_number,
            'receipient_bank' => $request->receipient_bank,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => $request->created_at
        ]);
        $transfer = Transfer::where('id', $transfer_id)->first();
        return view('admin.pending-transfers.edit', [
            'transfer' => $transfer
        ]);
    }
}
