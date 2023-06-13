<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        //エロクアント
        $values = Book::all();
        
        $count = Book::count();

        $first = Book::findOrFail(1);

        $WhereBBB = Book::where('text', '=', 'bbb');

        //クエリビルダ
        $queryBuilder = DB::table('books')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->first();

        dd($values, $count, $first, $WhereBBB, $queryBuilder);

        return view('books.book', compact('values'));
    }
}
