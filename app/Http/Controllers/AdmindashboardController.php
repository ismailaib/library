<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Approval;
use App\Models\Command;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class AdmindashboardController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $approvals = Approval::all();
        $commands = Command::all();
        $books = Book::all();
        $numberOfStu = User::count();
        $numberOfBooks = Book::count();
        $numberOfCommands = Command::count();
        $students = User::where('isAdmin', '!=', true)->get();
        $data = $books->values();
        return view('admindashboard', ['data'=>$data, 'books'=>$books, 'commands'=>$commands, 'students'=>$students, 'numberOfStu'=>$numberOfStu,'numberOfBooks'=>$numberOfBooks ,'numberOfCommands' => $numberOfCommands ,'approvals' => $approvals]);
    }


    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function index(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');

    }

    function add(Request $request){
        $user= new user;
        $user->name=$request->name;
        $user->email=$request->email;
        $hashedPassword = Hash::make($request->password);
        $user->password = $hashedPassword;
        $user->save();

        return redirect('admindashboard');

    }

    public function deletestudent($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Student deleted successfully!');
    }    
    public function edit($id)
{
    $student = User::findOrFail($id);
    return view('edit', compact('student'));
}

public function update(Request $request)
{
    $id = $request->input('id');
    $student = User::findOrFail($id);
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,'.$student->id,
        'password' => 'nullable|string|min:8',
    ]);
    $student->name = $validatedData['name'];
    $student->email = $validatedData['email'];
    if ($request->has('password')) {
        $student->password = Hash::make($validatedData['password']);
    }
    $student->save();
    return redirect()->back()->with('success', 'Student updated successfully!');
}

function deletebook($id){
    $data = Book::find($id);
    $data->delete();
    return redirect('admindashboard');
}

function addbook(Request $request){
    $book = new Book;
    $book->name = $request->name;
    $book->quantity = $request->quantity;
    $book->type_id = $request->type;
    $book->info = $request->info;
    $image = $request->file("img");
    if($image != null){
        $file_name = $image->getClientOriginalName();
        $book->img = $file_name;
        $path=public_path()."/img/";
        $image->move($path,$file_name);
    }

    $book->save();

    return redirect('admindashboard');

}
public function updateBook(Request $request)
{
    // Retrieve the book with the given id
    $id = $request->input('id');
    $book = Book::findOrFail($id);

    // Validate the input data
    $request->validate([
        'name' => 'string|max:255',
        'quantity' => 'integer|min:1',
        'info' => 'string',
        'type' => 'integer|min:1',
        'img' => 'nullable'
    ]);

    // Update the book properties
    $book->name = $request->input('name');
    $book->quantity = $request->input('quantity');
    $book->info = $request->input('info');
    $book->type_id = $request->input('type');
    $request->validate([
        'img' => 'max:2048',
    ]);
    
    if($request->hasFile('img')) {
        $image = $request->file('img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/img', $filename);
        $book->img = $filename;
        $book->save();
    }
    

    // Save the updated book to the database
    $book->save();

    // Redirect back to the book list with success message
    return redirect('admindashboard')->with('success', 'Book updated successfully.');
}





public function declineCommand(Request $request)
    {
        $commandId = $request->input('command_id');

        // Update the status of the command to 'decline'
        $command = Command::find($commandId);
        $command->id_status = 4; // assuming status ID 4 is for 'decline'
        $command->save();
    
        if ($command) {
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

        // Create a new record in the 'approval' table
        $approval = new Approval();
        $approval->id_student = $command->id_student;
        $approval->id_book = $command->id_book;
        $approval->id_status = 4; // assuming status ID 4 is for 'decline'
        $approval->delivery_at = null;
        $approval->returns_at = null;
        $approval->save();

        // Redirect back to the dashboard page
        return redirect()->back();
    }


    public function acceptCommand(Request $request)
    {
        $commandId = $request->input('id');
        $deliveryAt = $request->input('delivery');
        $returnAt = $request->input('return');
    
        // Update the status of the command to 'accept'
        $command = Command::find($commandId);
        $command = Command::first(); // Get the first command in the database
        if (!$command) {
            $command = null; // If there are no commands, set $command to null
        }
        
        
        if ($command) {
            $command->id_status = 'accepted';
            $command->save();
            $book = Book::find($command->id_book);
            $command->delete();
            // Create a new record in the 'approval' table
            $approval = new Approval();
            $approval->id_student = $command->id_student;
            $approval->id_book = $command->id_book;
            $approval->id_status = 5; // assuming status ID 5 is for 'accept'
            $approval->delivery_at = $deliveryAt;
            $approval->returns_at = $returnAt;
            $approval->save();
    
            // Redirect back to the dashboard page
            return redirect()->back();
        }
    
        // If the command wasn't found, redirect back with an error message
        return redirect()->back()->withErrors(['Command not found.']);
    }

    function deleteapproval($id){

        $approval = Approval::find($id);
        $book = Book::find($approval->id_book);
        if ($approval->id_status == 5 ) {
            // Increment the book quantity
            $book->quantity++;
            $book->save();
        }

        $approval->delete();
        return redirect('admindashboard');
    }

    public function updateapproval(Request $request)
{
    // Retrieve the approval to be updated by ID
    $approval = Approval::find($request->id);
    $book = Book::find($approval->id_book);
    
    // Validate the input data
    $request->validate([
    ]);

    // Update the approval properties
    if(!empty($request->id_status)) {
        $approval->id_status = $request->id_status;
    }
    if(!empty($request->delivery_at)) {
        $approval->delivery_at = $request->delivery_at;
    }
    if(!empty($request->returns_at)) {
        $approval->returns_at = $request->returns_at;
    }
    if ($request->id_status == 6 or $request->id_status == 4 ) {
        // Increment the book quantity
        $book->quantity++;
        $book->save();
    }

    // Save the updated approval to the database
    $approval->save();

    // Redirect back to the dashboard with success message
    return redirect('admindashboard')->with('success', 'Approval updated successfully.');
}



}



