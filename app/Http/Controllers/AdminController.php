<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Counts
        $numSports = DB::table('sports')->count();
        $numMembers = DB::table('members')->count();
        $numCoaches = DB::table('coaches')->count();
        $numProducts = DB::table('products')->count();
        $numSubs = DB::table('modalmembers')->count();
        $numEnd = DB::table('ends')->count();

        // Pie Chart Data
        $pieChartData = DB::table('modalmembers')
            ->select(DB::raw('COUNT(members_id) AS count_sub'), 'sports.name')
            ->leftJoin('sports', 'modalmembers.sports_id', '=', 'sports.id')
            ->groupBy('sports.id', 'sports.name')
            ->get();

        $chartData = $pieChartData->map(function ($item) {
            return "['{$item->name}', {$item->count_sub}]";
        })->implode(',');

        // Line Chart Data (Sports Pay)
        $lineChartData = DB::table('modalmembers')
            ->select('sports.name', DB::raw('SUM(pay) as sports_pay'))
            ->leftJoin('sports', 'sports.id', '=', 'modalmembers.sports_id')
            ->groupBy('sports.id', 'sports.name')
            ->get();

        $line = $lineChartData->map(function ($item) {
            return "['{$item->name}', {$item->sports_pay}]";
        })->implode(',');

        // Line2 Chart Data (Sales Data)
        $line2ChartData = DB::table('sales')
            ->select('name', 'cost')
            ->get();

        $line2 = $line2ChartData->map(function ($item) {
            return "['{$item->name}', {$item->cost}]";
        })->implode(',');

        // Bar Chart Data (Coaches per Sport)
        $barChartData = DB::table('coaches')
            ->select('sports.name', DB::raw('COUNT(coaches.id) AS coach_count'))
            ->leftJoin('sports', 'coaches.sports_id', '=', 'sports.id')
            ->groupBy('sports.id', 'sports.name')
            ->get();

        $bar = $barChartData->map(function ($item) {
            return "['{$item->name}', {$item->coach_count}]";
        })->implode(',');

        // Area Chart Data (Boys and Girls count)
        $areaChartData = DB::table('sports')
            ->select('sports.name', DB::raw('COUNT(DISTINCT boys.id) AS count_boys'), DB::raw('COUNT(DISTINCT girls.id) AS count_girls'))
            ->leftJoin('modalmembers', 'sports.id', '=', 'modalmembers.sports_id')
            ->leftJoin('members AS boys', function ($join) {
                $join->on('modalmembers.members_id', '=', 'boys.id')
                    ->where('boys.gender', 'Male');
            })
            ->leftJoin('members AS girls', function ($join) {
                $join->on('modalmembers.members_id', '=', 'girls.id')
                    ->where('girls.gender', 'Female');
            })
            ->groupBy('sports.id', 'sports.name')
            ->get();

        $area = $areaChartData->map(function ($item) {
            return "['{$item->name}', {$item->count_boys}, {$item->count_girls}]";
        })->implode(',');

        // Get logged-in user details
        $user = Auth::user();
        session([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
        ]);

        // Return the view with compacted data
        return view('layout.stat', compact(
            'user', 'numSports', 'numMembers', 'numCoaches', 'numProducts', 'numSubs', 'numEnd', 
            'chartData', 'line', 'line2', 'bar', 'area'
        ));
    }
}
