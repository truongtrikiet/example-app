<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AccountController extends Controller
{
    public function index(){
        $data = Account::get();
//        return view('account-check', compact('data'));
        return $data;
    }

    public function checkAccount(Request $request){
//        dd($request->all());
        $data = Account::get();

        foreach ($data as $acc){
            if($acc->usn == $request->usn && $acc->psw == $request->psw){
                if($acc->isAd == 1){
                    return view('index-admin');
                }
                else return view('page1');
            }
        }
        return redirect()->back()->with('Invalid','You entered invalid username or password. Please try again.');
    }

    public function createAccount(Request $request){
//        dd($request->all());
        $data = Account::get();

        if($request->psw != $request->re_psw)
            return redirect()->back()->with('Invalid1','Wrong repeat password. Please try again.');

        foreach ($data as $acc){
            if($acc->usn == $request->usn)
                return redirect()->back()->with('Invalid2','Your username existed. Please try again.');
        }

        $usn = $request->usn;
        $psw = $request->psw;

        $account = new Account();
        $account->usn = $usn;
        $account->psw = $psw;
        $account->isAd = 0;
        $account->save();

        return redirect()->back()->with('success','Created successfully. Back to Login.');
    }
}
