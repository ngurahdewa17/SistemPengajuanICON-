<?php
namespace App\Http\Controllers;
use App\Models\dataPengajuan;
use Illuminate\Http\Request;

class pengajuanController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard',[
        ]);
    }

    public function tampilPengajuan()
    {
        $dataPengajuan = dataPengajuan::latest()->paginate(5);
        return view('pengajuan.tampilPengajuan',compact(['dataPengajuan']))
        ->with('no',1);
    }

    public function form_pengajuan(){
        return view('pengajuan.formInputPengajuan',[
        ]);
    }

    public function store_pengajuan(Request $request)
    {
        $this->validate($request, [
            'namaMitra' => 'required|min:3',
            'email' => 'required',
            'namaPerusahaan' => 'required',
            'pekerjaan' => 'required',
            'noSP2KPA' => 'required',
            'haritanggalMulai' => 'required',
            'haritanggalSelesai' => 'required',
            'namaLokasi' => 'required',
            'aktifitas' => 'required',
            'lokasi' => 'required',
            'taskList' => 'required',
            'pengawasPekerjaan' => 'required',
            'noHPPegawaiPekerjaan' => 'required|numeric',
            'pengawasK3' => 'required',
            'noHPPegawaiK3' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        // $request->file('image')->store('posts-images');
        // $image = $request->file('image');
        // $image->public_path('posts', $image->hashName());
        $fileName = time().$request->file('image')->hashName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path; 
        $aktifitas = join(',',$request->input('aktifitas'));
        $lokasi = join(',',$request->input('lokasi'));
        $taskList = join(',',$request->input('taskList'));
        // dd($request);
        dataPengajuan::create([
            'namaMitra' => $request->namaMitra,
            'email' => $request->email,
            'namaPerusahaan' => $request->namaPerusahaan,
            'pekerjaan' => $request->pekerjaan,
            'noSP2KPA' => $request->noSP2KPA,
            'haritanggalMulai' => $request->haritanggalMulai,
            'haritanggalSelesai' => $request->haritanggalSelesai,
            'namaLokasi' => $request->namaLokasi,
            'aktifitas' => $aktifitas,
            'lokasi' => $lokasi,
            'taskList' => $taskList,
            'pengawasPekerjaan' => $request->pengawasPekerjaan,
            'noHPPegawaiPekerjaan' => $request->noHPPegawaiPekerjaan,
            'pengawasK3' => $request->pengawasK3,
            'noHPPegawaiK3' => $request->noHPPegawaiK3,
            'image' =>  $fileName,
        ]);

        return redirect('/tampil_pengajuan')->with('success','Data Berhasil Disimpan!');
    }

    public function printTemplate()
    {
        return view('layouts.templateSurat',[

        ]);
    }
}
