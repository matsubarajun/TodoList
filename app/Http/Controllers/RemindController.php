<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Remind;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RemindController extends Controller
{
    
    public function index()
    {
        $reminds = Remind::orderByRaw('`deadline` IS NULL ASC')->orderBy('deadline')->get();
        
        return view('reminds.index', [
            'reminds' => $reminds,    
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'newRemind' => 'required|max:255',
            'newDeadline' => 'nullable|after:"now"',
            ]);
            
        Remind::create([
            'remind' => $request->newRemind,    
            'deadline' => $request->newDeadline,

        ]);
        
        
        
        Toastr::success('新しいリマインドが追加されました！');
        // dd($request);
        return redirect()->route('reminds.index');
    }
    
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $remind = Remind::find($id);
        
        return view('reminds.edit', [
            'remind' => $remind,    
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'updateRemind' =>'required|max:255',     
            'updateDeadline' => 'nullable|after:"now"',
        ]);
        
        $remind = Remind::find($id);
        
        $remind->remind = $request->updateRemind;
        $remind->deadline = $request->updateDeadline;
        
        
        
        $remind->save();
        
        Toastr::success('リマインドが変更されました！');
        
        return redirect()->route('reminds.index');
    }
    
    public function destroy($id)
    {
        $remind = Remind::find($id);
        
        $remind->delete();
        
        Toastr::success('リマインドが削除されました！');
        
        return redirect()->route('reminds.index');
    }
    
    public function remindGet(Request $request)
    {
        // バリデーション
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'required|integer',
        ]);

        // カレンダー表示期間
        $start_date = date('Y-m-d', $request->input('start_date') / 1000);
        $end_date = date('Y-m-d', $request->input('end_date') / 1000);
        

        // 登録処理
        return Remind::query()
        
            ->select(
                // FullCalendarの形式に合わせる
                'deadline as start',
                'deadline as end',
                'remind as title'
               
            )
            // FullCalendarの表示範囲のみ表示
            ->where('deadline', '>', $start_date)
            ->where('deadline', '<', $end_date)
            ->get();
        
}
}
