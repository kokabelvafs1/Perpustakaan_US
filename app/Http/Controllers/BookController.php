<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Exports\BookExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $books = Book::where('judulbook', 'LIKE', '%' .$request->search. '%')
            ->orWhere('pengarang', 'like', '%'.$request->search.'%')->paginate(10);
        }else{
            $books = Book::paginate(5);
        }
        return view('admin/books/index', compact('books'));

        $books = Book::paginate(5);
        return view('admin/books/index', compact('books'));
    }

    public function searchbook(Request $request)
    {
        if ($request->has('search')) {
              $books = Book::where('judul','LIKE','%'.$request->search.'%')
                                  ->orWhere('pengarang', 'like', '%'.$request->search.'%')->paginate(10);
                                  
              Session::put('halaman_url',request()->fullUrl());
              // halaman_url manggil mana ya
          }else {
              
              $books = Book::paginate(10);
              Session::put('halaman_url',request()->fullUrl());
          }
  
      //   menampilkan halaman 
        $title = "search";
            return view('/index', [
                    'books' => $books,
                    'title' => $title,
            ]);
    }

    public function beranda()
    {
            $books = Book::all();
            $title = Book::all();
            $title = "Beranda";
            return view('index', [
                'books' => $books,
                'title' => $title,
            ]);
    }

    public function detail($id)
    {
        $title = 'detail';
        $books = Book::findOrfail($id);
        return view('detail', compact('books', 'title'));
    }

    // public function detail($id)
    // {
    //         $books = Book::all();
    //         $title = Book::all();
    //         $title = "Detail";
    //         return view('detailbook', [
    //             'books' => $books,
    //             'title' => $title,
    //         ]);
    // }

    // public $slug;

    // public function mount($slug)
    // {
    //     $this->slug = $slug;
    // }

    // public function detail()
    // {
    //     $books = Book::where('slug',$this->slug)->first();
    //     return view('detail',['books'=>$books]);
    // }

    public function exportpdf()
    { 
        $books = Book::all();

        view()->share('books', $books);
        $pdf = PDF::loadview('databook-pdf');
        return $pdf->download('booksdata.pdf');
    }

    public function exportexcel()
    {
        return Excel::download(new BookExport, 'databook.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/books/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $book = $request->all();
        // $book['gambar'] = $request->file('gambar')->store('gambarbook');
        // Book::create($books);
        // return redirect()->route('books.index');

        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('images', 'public');
        
        Book::create($data);

        // SweetAlert::success('Success', 'Data Berhasil Ditambahkan');
        
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrfail($id);
        return view('admin/books/edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $books = $request->all();
        if($request->hasFile('gambar')){
            $books['gambar'] = $request->file('gambar')->store('gambarbook', 'public');
        } else {
            $books['gambar'] = $book->gambar;
        }
        $book->update($books);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $book = Book::findOrfail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}