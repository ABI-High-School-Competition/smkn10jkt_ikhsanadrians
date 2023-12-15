<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use App\Models\PerjalananTersedia;
use Carbon\Carbon;
use App\Models\Pembayaran;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function pesantiket(){
        $tujuans = Tujuan::all();
        return view('pesantiket', compact('tujuans'));
    }
     
    public function pesantiketpost(Request $request){
        Perjalanan::create([
            "awal_id" => $request->dari,
            "tujuan_id" => $request->tujuan,
            "tgl_berangkat" => $request->date,
            "jumlah_penumpang" => $request->jumlah_penumpang
        ]);

        // dd($request->all());
       
        return redirect()->route('jadwal');
    }


    public function jadwal(){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();

        $perjalanan_tersedia = PerjalananTersedia::where('awal',$perjalanan->awal_id)->where('tujuan', $perjalanan->tujuan_id)->get();
        

        return view('jadwal',compact('perjalanan_tersedia'));
    }


    public function jadwalpost(Request $request){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();
        $perjalanan->update([
            "perjalanan_fixed" => $request->perjalanan_id
        ]);

        return redirect()->route('pemesan');

    }
    public function pemesan(){
        return view('pemesan');
    }

    public function pemesanpost(Request $request){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();
        $perjalanan->update([
            "nama_pemesan" => $request->pemesan,
            "nama_penumpang" => $request->penumpang,
            "no_wa" => $request->no_wa
        ]);

        return redirect()->route('pilihkursi');
    } 

    public function pilihkursi(){
        return view('kursi');
    } 

    public function pilihkursipost(Request $request){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();
        $perjalanan->update([
            "nomor_kursi" => $request->nomor_kursi
        ]);

        return redirect()->route('pembayaran');
    }

    

    public function pembayaran(){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();
        $perjalananTersedia = PerjalananTersedia::where('id',$perjalanan->perjalanan_fixed)->first();
        $jumlah_bayar = $perjalanan->jumlah_penumpang * $perjalananTersedia->harga; 

        $perjalanan->update([
            "harga" => $jumlah_bayar
        ]);

        $booking_code = "BOOK" . date("h-i-sa");
        $pay_code = "PAY" . date("h-i-sa"); 

        $nama_pemesan = $perjalanan->nama_pemesan;

        Pembayaran::create([
            "booking_code" => $booking_code,
            "nama_pemesan" => $nama_pemesan,
            "pay_code" => $pay_code,
            "jumlah_bayar" => $jumlah_bayar,
            "status" => "belum_bayar"
        ]); 

        $pembayaran = Pembayaran::orderBy('id','DESC')->first();
        
        return view('payment', compact('pembayaran','perjalanan','perjalananTersedia'));
    }

    public function pembayaran_post(Request $request){
        $pembayaran = Pembayaran::orderBy('id','DESC')->first();
        $pembayaran->update([
            "status" => "terbayar"
        ]);

        return redirect()->route('pembayaran.success');
    }

    public function success(){
        
        return view('success');
    }


    public function dashboard(){
        $perjalanan =  Perjalanan::orderBy('id', 'DESC')->first();
        $pembayaran = Pembayaran::orderBy('id','DESC')->first();
        $perjalananTersedia = PerjalananTersedia::where('id',$perjalanan->perjalanan_fixed)->first();

        return view('dashboard', compact('pembayaran','perjalanan','perjalananTersedia'));
    }
}
