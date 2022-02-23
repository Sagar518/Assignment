<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
// use App\Http\Controllers\TemplateProcessor;

class UserController extends Controller
{
    function show()
    {
        // $data = Member::all();
        $data = User::all();
        return view('users',['users'=>$data]);
    }

    // Update Data & Select Data
    function showData($id)
    {
        $data =  User::find($id);
        return view('edit',['sdata'=>$data]);

    }
    function update(Request $req)
    {
        $data =  User::find($req->id);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->email=$req->email;
        $data->save();
        session()->flash("success","Users has been updated successfully");
        return redirect ('users');

    }

    public function showWord($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }


    public function wordExport($id)
    {
        $user = User::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/user.docx');

        $templateProcessor->setValue('firstname', $user->firstname);
        $templateProcessor->setValue('lastname', $user->lastname);
        $templateProcessor->setValue('email', $user->email);
        $fileName = $user->name;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
