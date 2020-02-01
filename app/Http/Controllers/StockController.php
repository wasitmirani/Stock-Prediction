<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\contact;
use App\subscribe;
use App\Company;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //


       $today= date("Y-m-d", time());
       $c_=Company::find($req->id);
       $c_name=$c_->name;

             global $open1;
      global $close1;
       global $open2;
      global $close2;

        $d1=DB::table('stocks')->where([['date',$today],['comp_id',$req->id]])->get();

       foreach ($d1 as $data) {
            $open1=$data->open;
            $close1=$data->close;

       } 
     

    
        $yday = date('Y.m.d',strtotime("-1 days"));
        $nday =date('Y.m.d',strtotime("+1 days"));
        $aweek =date('Y.m.d',strtotime("+7 days"));
        $d2=DB::table('stocks')->where([['date',$yday],['comp_id',$req->id]])->get();
          
        foreach ($d2 as $ydata) {
            $open2=$ydata->open;
            $close2=$ydata->close;

       } 
       
        //# starting open Section Cal 

        if($open1!=""){
        $p_open=$open1/$open2;
        $open_p=($p_open-1)*100;


        $open_sum=$open1+$open2;

        $f_open=$open1*(1+(0.01*1));
         $open_per=($f_open/$open_sum)*100;
    
        $w_open=$open1*(1+(0.01*7));



        //#end Opening section cal 

        //close Section
        $pclose=$close1/$close2;


        $yclose=$close2/$open2;
        $ypl1_value=($yclose-1)*100;
        $yp_sum=$close2+$open2;
        $yph1_value=($ypl1_value/$yp_sum)*100;
        $yph_value=round($yph1_value, 3);
        $ypl_value=round($ypl1_value,3); 


        $nclose=$close1/$open1;
        $npl1_value=($nclose-1)*100;
        $np_sum=$close1+$open1;
        $nph1_value=($npl1_value/$np_sum)*100;
        $nph_value=round($nph1_value,3);
        $npl_value=round($npl1_value,3);

        $pvalue=($pclose-1)*100;


        $f_close=$close1*(1+(0.01*1));
        $w_close=$close1*(1+(0.01*7));
        $per_close=$close1+$close2;
        $pre_cl=($pvalue/$per_close)*100;

        $pre_ch=($f_close/$per_close)*100;
        $w_value=$w_close/$w_open;
        $wpl=($w_value-1)*100;
        $w_sum=$w_open+$w_close;
        $wph=($wpl/$w_sum)*100;
        $w_pl=round($wpl,3);
        $w_ph=round($wph,3);


        $preh_cl=round($pre_cl,3);
        $pl_value=round($pvalue,3);

        return view('users.pre',compact(['c_name','open1','open2','f_open','w_open','close1','close2','open_per','open_p','f_close','w_close','pre_cl','nday','today','yday','aweek','ypl_value','yph_value','nph_value','npl_value','preh_cl','pl_value','w_pl','w_ph','pre_ch']));
        }
        
    else{
            return back()->with('n_data','ss');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $today=date('Y.m.d');
        $data =Stock::create([
            'name'=>$request->comp,
            'open'=>$request->open,
            'close'=>$request->close,
            'date'=>$today,
        
        ]);
      return redirect()->back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }



    public function Message(Request $req){


        $msg =contact::create([
        'name'=>$req->name,
        'email'=>$req->email,
        'phone'=>$req->phone,
        'title'=>$req->title,
        'message'=>$req->message

        ]);


        return back()->with('f_message','ss');

    }


    public function Sub(Request $req){
        
        $msg=[
            'unique'=>'This email has already been taken',
        ];
        $this->validate($req,[
            's_email'=>'required|unique:subscribes',
        ],$msg);
       


        $s_email =subscribe::create([

        's_email'=>$req->s_email,

        ]);

        return back()->with("s_msg",'Succ');
    }
}
