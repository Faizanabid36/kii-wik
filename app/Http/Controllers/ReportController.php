<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function resolve()
    {
        $id=\request('id');
        $report=Report::find($id);
        if($report->is_resolved==1)
        {
           
            $report->is_resolved=0;
        }
        else{
           
            $report->is_resolved=1;
        }
       
        $report->save();
        return resolveReport($report->is_resolved,$report->id);
       
    }
    
    public function addReport(Request $request)
    {
        $request->merge(['url'=>url()->previous()]);
        Report::create(
            $request->except('_token')
        );
        return back()->withSuccess("Reported");
    }
    public function reports($type)
    {
        if($type=='comment')
        {
            $reports=Report::whereType($type)->with('comment')->get();
            $header="Comments";
            $view='report.report_list';
        }
        else if($type=='task')
        {
            $reports=Report::whereType($type)->with('task')->get();
            $header="Tasks";
            $view='report.report_list';
        }
        else
        {
            
            $reports=Report::whereType($type)->with('user')->get();
            $header="Users";
            $view='report.report_list';
        
        }
        
        return view($view,compact('reports','header'));
       
    }


}
