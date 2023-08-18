<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Command;
use App\Models\Approval;
use Illuminate\Support\Facades\Auth;
class StudentDashboardController extends Controller
{
   
    public function index()
    {
        $commands = Command::with('book')->get();
        $approvals = Approval::all();
        return view('studentdashboard', compact('commands','approvals'));
    }
    public function deleteCommand(Request $request, $id)
    {
        $command = Command::find($id);
    
        if ($command && $command->id_student == auth()->id()) {
            // Find the book associated with the command
            $book = Book::find($command->id_book);
    
            if ($book) {
                // Increment the book quantity
                $book->quantity++;
                $book->save();
            }
    
            // Delete the command
            $command->delete();
        }
    
        return redirect()->back();
    }
    

    
}

