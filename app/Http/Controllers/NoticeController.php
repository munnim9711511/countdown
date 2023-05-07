<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notic = new Notice();
        $result = $notic->paginate(10);
        return view('notice.index', ['notices' => $result]);
    }
    public function post(Request $request)
    {
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->detail = $request->detail;
        $notice->date_published = $request->published;
        $notice->save();
        return redirect('/notice');

    }
    public function delete($id)
    {
        $c = new Notice();
        $result = $c->find($id);
        $result->delete();
        return redirect('/notice');
    }
    public function edit($id)
    {

        $notice = new Notice();

        return view('notice.edit', ['notice' => $notice->find($id)]);

    }
    public function Update(Request $request)
    {
        $notice = new Notice();
        $req = $notice->find($request->id);
        $req->title = $request->title;
        $req->detail = $request->detail;
        $req->date_published = $request->published;
        $req->save();
        return redirect('/notice');
    }
}
