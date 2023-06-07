<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index(){

        $title = 'Home';
        $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati voluptas veritatis tempora suscipit est aperiam pariatur recusandae, adipisci eligendi aliquid hic, natus expedita quam ratione quidem in iusto. Eum laborum, incidunt id veniam mollitia totam iure dolore aut accusamus, corrupti nobis dignissimos explicabo quia vitae ducimus, perspiciatis reprehenderit beatae libero blanditiis at nemo animi laboriosam fugit optio. Suscipit possimus voluptas, sint qui nam voluptatum labore inventore temporibus voluptate consequuntur minima iusto perspiciatis quo doloremque aliquid, facere iste quidem autem sunt. Necessitatibus illum odio atque, a placeat sed laudantium dolorum perferendis ex. Dolorem reprehenderit dignissimos sed, ut placeat veritatis totam quasi rerum, eum adipisci aliquid, eos sapiente maxime voluptate pariatur est reiciendis fuga consequatur culpa expedita sit. Enim quaerat consequatur veritatis quis incidunt a, laborum odit labore repellendus similique rem, distinctio praesentium possimus ipsa, ipsum odio eveniet obcaecati dolor impedit explicabo iste ipsam ut aut voluptas. Magnam officiis doloremque ab a error ipsam, assumenda nemo ut quo vitae corrupti est numquam in, fugiat explicabo, quam fugit iusto dolorem excepturi quae? Excepturi commodi dolores maiores reprehenderit aliquam omnis molestias dolore? Debitis eligendi in minus sequi reiciendis! Eligendi quaerat est impedit mollitia provident dolorem iusto corrupti? Numquam, quaerat aliquam. Totam omnis quod iure.';

        return view('home', compact('title', 'text'));
    }

    public function books(){

        //$books = Book::all();  // SELECT * from books
        $books = Book::orderBy('title')->get(); // SELECT * from books ORDER BY title

        // SELECT books WHERE id = 2
        //$book = Book::find(2); // restituisce direttamente l'oggetto
        //$book = Book::where('id', 2)->get(); // pusha il risultato in un array

        // SELECT books WHERE id != 2 ORDER BY title desc LIMIT 2
        // $books = Book::where('id','!=', 2)
        //                 ->orderBy('title','desc')
        //                 ->limit(2)
        //                 ->get();

        //$book = Book::where('id',1)->first(); // funziona come $book = Book::find(1);
        //$book = Book::where('slug','i-promessi-sposi')->first();

        return view('books', compact('books'));
    }

    public function contacts(){
        return view('contacts');
    }

    public function book_detail($slug){

        $book = Book::where('slug', $slug)->first();

        return view('book_detail', compact('book'));
    }


}
