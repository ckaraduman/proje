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

    public function main()
    {
        return view('main');
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
    }

    public function update($id)
    {
      $data1=DB::table('books')
      ->where('id',$id)
      ->first();
      return view('update',compact('data1'));
    }

    public function DataUpdate(Request $request, $id)
    {
        $validatedData=$request->validate([ //formu güvenlik amacıyla kontrol etmek için kullanılan fonksiyondur
          'book_name' => 'required', //kitap adı alanı boş ise formu kabul etmez
          'author' => 'required', //yazar alanı boş ise formu kabul etmez
          'pagenum' => 'required' //chechbox seçilmemişse kabul etmez
        ]);

        // return $request->all(); //Formdan gönderilen tüm değerleri alıp ekrana yazar

        DB::table('books')
        ->where('id',$id)
        ->update([
          'book_name'=>$request->book_name,
          'author'=>$request->author,
          'pagenum'=>$request->pagenum
        ]);

        return back()->with('status', 'Güncelleme işlemi başarıyla tamamlandı!');
    }

    public function delete($id)
    {
      DB::table('books')
      ->where('id',$id)
      ->delete();
      return back();
    }
}
