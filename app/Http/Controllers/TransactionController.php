<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\support\Facades\Auth;

class TransactionController extends Controller
{
    public function viewTransactionByAdmin($id)
    {

        
        $moneyIn = \App\Models\Transaction::where('donation_type_id', $id)->where('tran_type','In')->sum('amount');
        $moneyOut = \App\Models\Transaction::where('donation_type_id', $id)->where('tran_type','Out')->sum('amount');

        // dd($moneyOut);
        $transaction = Transaction::where('donation_type_id', $id)->orderby('id','DESC')->get();
        return view('admin.donationtype.alltransaction',compact('transaction','moneyIn','moneyOut'));
    }


    
    

    
    
}
