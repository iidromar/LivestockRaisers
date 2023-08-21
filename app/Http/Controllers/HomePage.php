<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePage extends Controller
{
    public function HomePage(){
        $farmers = DB::table('farmers')->get();
        return view('home_page', compact('farmers'));
    }
    public function FarmerProfile($id){
        $farmer = DB::table('farmers')->where('id_number', $id)->get()->first();
        $farmer_lamb = (int)$farmer->total_lamb;
        $farmer_goat = (int)$farmer->goat_milking + (int)$farmer->goat_pregnant + (int)$farmer->goat_dry_not_pregnant
        + (int)$farmer->goat_zero_three + (int)$farmer->goat_three_six + (int)$farmer->goat_more_six + (int)$farmer->staillions_teos;
        $farmer_total = $farmer_lamb + $farmer_goat;
        if($farmer_total != 0){
            $farmer_lamb_per = ($farmer_lamb / $farmer_total) * 100;
            $farmer_goat_per = ($farmer_goat / $farmer_total) * 100;
            $farmer_lamb_per = (int)$farmer_lamb_per;
            $farmer_goat_per = (int)$farmer_goat_per;
        }else{
            $farmer_lamb_per = 0;
            $farmer_goat_per = 0;
        }
        $ewes = (int)$farmer->ewes_milking + (int)$farmer->ewes_pregnant + (int)$farmer->ewes_dry_not_pregnant; 
        if((int)$farmer->stallions_rams != 0){
            $ewes_per = $ewes / (int)$farmer->stallions_rams;
            $ewes_per = (int)$ewes_per;
        }else{
            $ewes_per = 0;
        }
        $goat_female = $farmer_goat - (int)$farmer->staillions_teos;
        if((int)$farmer->staillions_teos != 0){
            $goat_female_per = $goat_female / (int)$farmer->staillions_teos;
            $goat_female_per = (int)$goat_female_per;
        }else{
            $goat_female_per = 0;
        }
        
        return view('farmer_profile', compact('farmer', 'farmer_lamb', 'farmer_goat', 'farmer_total', 'farmer_lamb_per', 'farmer_goat_per', 'ewes_per', 'goat_female_per'));
    }
}
