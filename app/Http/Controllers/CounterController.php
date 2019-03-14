<?php

namespace App\Http\Controllers;

use App\Category;
use App\Counter;
use Charts;
use DB;
use Illuminate\Http\Request;

class CounterController extends Controller
{


    public  function chart() {
        $category = Category::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($category, 'bar', 'highcharts')
            ->title("Category Details")
            ->elementLabel("Total Category")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);

        return view('charts', compact('chart'));
    }
}
