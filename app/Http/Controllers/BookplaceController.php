<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Command;
use App\Models\Approval;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class BookplaceController extends Controller
{
    //

    function index(){
        
        return view('bookplace');
    }
    public function book()
    {
        $approvals = Approval::all();
        $books = Book::all();
        $commands = Command::all(); // assuming you have a Command model and table
        return view('bookplace', compact('books', 'commands' , 'approvals'));
    }


public function store(Request $request)
{
    // Validate the form input
    $validatedData = $request->validate([
        'id_student' => 'required|integer',
        'id_book' => 'required|integer',
        'Command_at' => 'required|date',
    ]);

    // Find the book by ID
    $book = Book::find($validatedData['id_book']);

    if (!$book) {
        // Book not found
        return redirect()->back()->with('error', 'Book not found');
    }

    if ($book->quantity <= 0) {
        // Book out of stock
        return redirect()->back()->with('error', 'This book is currently out of stock');
    }

    // Decrement the book quantity
    $book->quantity--;

    // Save the book
    $book->save();

    // Create a new command record
    $command = new Command();
    $command->id_student = $validatedData['id_student'];
    $command->id_book = $validatedData['id_book'];
    $command->Command_at = $validatedData['Command_at'];
    $command->save();
    // Redirect back to the page with a success message
    return redirect()->back()->with(['success' => 'Book ordered successfully'])->withInput();
}



}

?>