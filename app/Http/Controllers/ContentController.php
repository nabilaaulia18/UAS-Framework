<?php

namespace App\Http\Controllers;

use App\Uploads;
use App\Models\laporan;
use App\Models\magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function apply()
    {
        if (Auth::check()) {
            return view('content.apply');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function storeapply(Request $request)
    {
        $magang = new magang();
        $magang->id = $request->idmhs;
        $magang->nama = $request->fname;
        $magang->kelas = $request->class;
        $magang->company = $request->company;
        $magang->save();

        return redirect('letter');
    }
    public function letter()
    {

        if (Auth::check()) {
            return view('content.letter');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function report()
    {

        if (Auth::check()) {
            return view('content.report');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function storereport(Request $request)
    {
        $report = new laporan();

        $file = $request->file('report');

        // Mendapatkan Nama File
        $nama_file = $file->getClientOriginalName();

        // Mendapatkan Extension File
        $extension = $file->getClientOriginalExtension();

        // Mendapatkan Ukuran File
        $ukuran_file = $file->getSize();

        // Proses Upload File
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());

        $report->idmhs = $request->idmhs;
        $report->laporan = $nama_file;
        $report->save();

        return redirect('report');
    }
}
