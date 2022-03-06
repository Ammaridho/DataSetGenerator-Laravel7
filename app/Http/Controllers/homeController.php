<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\internet_keluarga;
use App\Models\data_penghuni;
use App\Models\detail_gadget;

use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        ini_set('memory_limit', '-1');
        $internet_keluarga = internet_keluarga::all();
        $data_penghuni = data_penghuni::all();
        $detail_gadget = detail_gadget::all();

        $jumlahData = count(internet_keluarga::all());

        return view('home',compact('internet_keluarga','data_penghuni','detail_gadget','jumlahData'));
    }

    public function Generator()
    {  
        set_time_limit(9999999);  //10000 data membutuhkan waktu 2:48

        

        for ($it=0; $it < 10; $it++) { 
            
            // Data Umum tanpa diperhitungkan ==================================================================
            // namaKeluarga
                $namaKeluarga   = 'TestNama';

                // dd($namaKeluarga);

            // noTelp
                $noTelp = $this->NoTelpRand();

            // Provider
                $provider = $this->Gatcha(['My Republic','Indihome','Groovy','Biznet','CBN Fiber','First Media','Oxygen.id','XL Home','Indosat GIG','Orbit Telkomsel','MNC PLay','Transvision','Megavision']);

            // Data yang diperhitungkan ==================================================================

            //Urutan Proses Generate Dataset:
            // 1. Tentukan Cukup,Kurang,Lebih

                $target = $this->Gatcha(['Kurang','Cukup','Lebih']);

                if($target == 'Kurang'){
                    // 2. Random Pola yang ada
                    $pola = $this->Gatcha(['1','2','3','4','5']);

                    $data[0] = 'kurang';

                    switch ($pola) {
                        case '1':
                            $data[1] = 'pola 1';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;
                            
                            case '2':
                            $data[1] = 'pola 2';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;
                                
                            case '3':
                            $data[1] = 'pola 3';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('banyak');
                            break;

                        case '4':
                            $data[1] = 'pola 4';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('banyak');
                            break;

                        case '5':
                            $data[1] = 'pola 5';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('tinggi');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('banyak');
                            break;
                    }
                        

                }elseif($target == 'Cukup'){
                    $pola = $this->Gatcha(['1','2','3','4','5','6','7']);

                    $data[0] = 'cukup';

                    switch ($pola) {
                        case '1':
                            $data[1] = 'pola 1';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;
                        
                        case '2':
                            $data[1] = 'pola 2';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;

                        case '3':
                            $data[1] = 'pola 3';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;

                        case '4':
                            $data[1] = 'pola 4';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;   

                        case '5':
                            $data[1] = 'pola 5';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('banyak');
                            break;

                        case '6':
                            $data[1] = 'pola 6';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('tinggi');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;

                        case '7':
                            $data[1] = 'pola 7';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('tinggi');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('banyak');
                            break;
                    }

                }else{
                    $pola = $this->Gatcha(['1','2','3','4','5']);

                    $data[0] = 'lebih';

                    switch ($pola) {
                        case '1':
                            $data[1] = 'pola 1';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('rendah');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;
                        
                        case '2':
                            $data[1] = 'pola 2';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;
                        
                        case '3':
                            $data[1] = 'pola 3';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('sedang');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;
                            
                        case '4':
                            $data[1] = 'pola 4';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('tinggi');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedikit');
                            break;
                        
                        case '5':
                            $data[1] = 'pola 5';
                            $data[2] = $bandwidth       = $this->BandwidthBiayaBulanan('tinggi');
                            $data[3] = $jumlahPenghuni  = $this->JumlahPenghuni('sedang');
                            break;
                    }
                }

                $namaKeluarga   = $namaKeluarga;
                $noTelp         = $noTelp;
                $provider       = $provider;
                $bandwidth      = $data[2]['bandwidth'];
                $biayaBulanan   = $data[2]['biayaBulanan'];
                $jumlahPenghuni = $data[3]['jumlahPenghuni'];
                $kesimpulan     = $data[0]; 

                //store internet_keluarga
                $internet_keluarga = new internet_keluarga;
                $internet_keluarga->namaKeluarga    = $namaKeluarga;
                $internet_keluarga->noTelp          = $noTelp;
                $internet_keluarga->provider        = $provider;
                $internet_keluarga->bandwidth       = $bandwidth;
                $internet_keluarga->biayaBulanan    = $biayaBulanan;
                $internet_keluarga->jumlahPenghuni  = $jumlahPenghuni;
                $internet_keluarga->kesimpulan      = $kesimpulan;
                $internet_keluarga->jumlahGadget    = array_sum($data[3]['banyakGadget']);
                $internet_keluarga->save();


            // rapihkan dan store nama penghuni dan jumlah gadget
            for($i = 0; $i < $jumlahPenghuni; $i++ ){

                $data_penghuni = new data_penghuni;
                $data_penghuni->nama           = $data[3]['namaPenghuni'][$i];
                $data_penghuni->banyakGadget   = $data[3]['banyakGadget'][$i];
                $data_penghuni->internet_keluarga()->associate($internet_keluarga);
                $data_penghuni->save();

                //rapihkan data penggunaan
                for ($j = 0; $j < $data[3]['banyakGadget'][$i]; $j++) { 

                    $detail_gadget = new detail_gadget;
                    $detail_gadget->namaGadget     = $data[3]['namaGadget'][$i][$j];
                    $detail_gadget->range          = $data[3]['rangePenggunaan'][$i][$j];
                    $detail_gadget->data_penghuni()->associate($data_penghuni);
                    $detail_gadget->save();
                }
            }   

        }

        return redirect('/');
    }

    public function resetDatabase()
    {

        internet_keluarga::query()->delete();
        data_penghuni::query()->delete();
        detail_gadget::query()->delete();
        $this->refreshDB();

        return redirect('/');
    }

    public function refreshDB()
    {
        $max1 = DB::table('internet_keluarga')->max('id') + 1; 
        DB::statement("ALTER TABLE internet_keluarga AUTO_INCREMENT =  $max1");
        $max2 = DB::table('data_penghuni')->max('id') + 1; 
        DB::statement("ALTER TABLE data_penghuni AUTO_INCREMENT =  $max2");
        $max3 = DB::table('detail_gadget')->max('id') + 1; 
        DB::statement("ALTER TABLE detail_gadget AUTO_INCREMENT =  $max3");
    }

    function Gatcha($array){
        shuffle($array);
        $data = array_rand($array,1);
        $gatcha =  $array[$data];

        return $gatcha;
    }

    function NoTelpRand($length = 8) {
        $str = "";
        $characters = array_merge(range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str  .= $characters[$rand];
        }

        $firstNum = $this->Gatcha(['0819','0821','0851','0812','0812']);
        $str = $firstNum . $str;

        return $str;
    } 

    public function BandwidthBiayaBulanan($pilihan)
    {
        if($pilihan == 'rendah'){
            $bandwidth = $this->Gatcha([10,15,20]);
            $biayaBulanan = $this->Gatcha([300000,200000,397000,150000,275000,345000,150000]);


        }elseif($pilihan == 'sedang'){
            $bandwidth = $this->Gatcha([25,30,40]);
            $biayaBulanan = $this->Gatcha([220000,315000,300000,360000,280000,345000,400000]);
            
        }else{
            $bandwidth = $this->Gatcha([50,100]);
            $biayaBulanan = $this->Gatcha([400000,625000,500000,350000,385000,279000,490000]);
            
        }

        // dd($bandwidth . ' => '. $biayaBulanan);

        return compact('bandwidth','biayaBulanan');
    }

    public function JumlahPenghuni($pilihan)
    {
        if($pilihan == 'sedikit'){

            $jumlahPenghuni = $this->Gatcha([1,2,3]);

            for ($i=0; $i < $jumlahPenghuni; $i++) { 
                // Masuk tabel data_penghuni
                // ambil id internet_keluarga
                $namaPenghuni[$i] = 'nama saya'. "$i";
                $banyakGadget[$i] =  $this->Gatcha([1,2,3]);

                $namaGadget[$i][0]      = 'Hp';
                $rangePenggunaan[$i][0] = $this->Gatcha(['ringan','sedang','berat']);

                for ($j=1; $j < $banyakGadget[$i]; $j++) { 
                    // Masuk tabel detail_gadget
                    // ambil id data_penghuni
                    $namaGadget[$i][$j]      = $this->Gatcha(['Laptop','Hp','Tv','Komputer']);
                    $rangePenggunaan[$i][$j] = $this->Gatcha(['ringan','sedang','berat']);
                }
                
            }

            // dd($namaGadget);

        }elseif($pilihan == 'sedang'){
            
            $jumlahPenghuni = $this->Gatcha([4,5]);

            for ($i=0; $i < $jumlahPenghuni; $i++) { 
                // Masuk tabel data_penghuni
                // ambil id internet_keluarga
                $namaPenghuni[$i] = 'nama saya'. "$i";
                $banyakGadget[$i] =  $this->Gatcha([1,2,3]);

                $namaGadget[$i][0]      = 'Hp';
                $rangePenggunaan[$i][0] = $this->Gatcha(['ringan','sedang','berat']);

                for ($j=1; $j < $banyakGadget[$i]; $j++) { 
                    // Masuk tabel detail_gadget
                    // ambil id data_penghuni
                    $namaGadget[$i][$j]      = $this->Gatcha(['Laptop','Hp','Tv','Komputer']);
                    $rangePenggunaan[$i][$j] = $this->Gatcha(['ringan','sedang','berat']);
                }
            }
        }else{

            $jumlahPenghuni = $this->Gatcha([6,7,8,9]);

            for ($i=0; $i < $jumlahPenghuni; $i++) { 
                // Masuk tabel data_penghuni
                // ambil id internet_keluarga
                $namaPenghuni[$i] = 'nama saya'. "$i";
                $banyakGadget[$i] =  $this->Gatcha([1,2,3]);

                $namaGadget[$i][0]      = 'Hp';
                $rangePenggunaan[$i][0] = $this->Gatcha(['ringan','sedang','berat']);

                for ($j=1; $j < $banyakGadget[$i]; $j++) { 
                    // Masuk tabel detail_gadget
                    // ambil id data_penghuni
                    $namaGadget[$i][$j]      = $this->Gatcha(['Laptop','Hp','Tv','Komputer']);
                    $rangePenggunaan[$i][$j] = $this->Gatcha(['ringan','sedang','berat']);
                }
            }
        }

        return compact('jumlahPenghuni','namaPenghuni','banyakGadget','namaGadget','rangePenggunaan');
    }


}
