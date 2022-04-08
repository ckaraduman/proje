<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        echo "Deneme route index fonksiyonu çalıştı!";
    }

    public function data()
    {
        // $data=DB::table('books')->get(); //tüm verileri alır

        // $data=DB::table('books')            // şartı sağlayan veriyi çeker1
        // ->where('author', 'Zülfü Livaneli') // şartı sağlayan veriyi çeker2

        // ->get();
        // dd($data);

        // $data=DB::table('books')->first(); //sadece ilk kayıt değerini alır
        // echo $data->book_name;

        // $data=DB::table('books')->pluck('book_name'); //belirtilen sütunun tüm kayıtlardaki değerlerini alır1
        // dd($data);                                    //belirtilen sütunun tüm kayıtlardaki değerlerini görüntüler2

        // $data=DB::table('books')->count(); //kayıt sayısını bulur
        // echo $data;

        // $data=DB::table('books')->insert(    //tabloya VERİ EKLEME
        //     [
        //       'book_name'=>'Laravel 6',
        //       'author'=>'Emrah Yüksel',
        //       'nop'=>166
        //     ]);
        // echo $data;

        // $data=DB::table('books')    //Veri güncelleme
        //       ->where('author', 'Jules Verne') //Veri güncelleme
        //       ->update( //Veri güncelleme
        //     [
        //       'book_name'=>'Aya Seyahat', //Veri güncelleme
        //       'nop'=>285 //Veri güncelleme
        //     ]); //Veri güncelleme
        // echo $data; //Veri güncelleme

        // $data=DB::table('books')    //Veri silme
        //       ->where('author', 'Enid Blyton') //Veri silme
        //       ->delete(); //veri silme
        //
        // $data=DB::table('books')    //Tabloyu KOMPLE BOŞALTMA
        //             ->truncate(); //Tabloyu KOMPLE BOŞALTIR...

        // echo "Tablo route data fonksiyonu çalıştı!"; // Kontrol satırı
    }

    public function show($ad)
    {
        echo "Deneme route show fonksiyonu parametreli çalıştı!".$ad;
    }

    public function list()
    {
        $data=DB::table('books') //Listelemek için gereken satır1
        // ->where('author', 'Jules Verne') //Şart (sorgu) satırı : Yazarı 'Jules Verne' olanları getir
        ->orderBy('pagenum', 'ASC') // Sayfa Sayısına göre a'dan z'ye sırala
        ->get(); //Listelemek için gereken satır2
        // return view('books')->with('data', $data); // books blade sayfasını $data değişkeni verileriyle görüntüle-with ile...
        return view('books', compact('data')); // books blade sayfasını $data değişkeni verileriyle görüntüle-compact ile...
    }

    public function insert()
    {
        return view('form');
    }

    public function DataInsert(Request $request)
    {
        $validatedData=$request->validate([ //formu güvenlik amacıyla kontrol etmek için kullanılan fonksiyondur
          'book_name' => 'required', //kitap adı alanı boş ise formu kabul etmez
          'author' => 'required', //yazar alanı boş ise formu kabul etmez
          'pagenum' => 'required' //chechbox seçilmemişse kabul etmez
        ]);

        // return $request->all(); //Formdan gönderilen tüm değerleri alıp ekrana yazar
        DB::table('books')->insert([
          'book_name'=>$request->book_name,
          'author'=>$request->author,
          'pagenum'=>$request->pagenum
        ]);

        return back()->with('status', 'Kayıt işlemi başarıyla tamamlandı!');



        //Çalışan Kodlar111-start
        // echo $request->book_name;
        // echo "<br>";
        // echo $request->author;
        // echo "<br>";
        // echo "bu iş tamamdır!";
        // dd($request);
        //Çalışan Kodlar111-end
        // return view('test');

    }

    public function update($id)
    {
      $data1=DB::table('books')
      ->where('id',$id)
      ->first();
      return view('update',compact('data1'));
      // return $id;
      // return view("update");
    }

    public function DataUpdate(Request $request)
    {
        $validatedData=$request->validate([ //formu güvenlik amacıyla kontrol etmek için kullanılan fonksiyondur
          'book_name' => 'required', //kitap adı alanı boş ise formu kabul etmez
          'author' => 'required', //yazar alanı boş ise formu kabul etmez
          'pagenum' => 'required' //chechbox seçilmemişse kabul etmez
        ]);

        // return $request->all(); //Formdan gönderilen tüm değerleri alıp ekrana yazar
        // DB::table('books')->insert([
        //   'book_name'=>$request->book_name,
        //   'author'=>$request->author,
        //   'pagenum'=>$request->pagenum
        // ]);

        return back()->with('status', 'Kayıt işlemi başarıyla tamamlandı!');


    }


}
