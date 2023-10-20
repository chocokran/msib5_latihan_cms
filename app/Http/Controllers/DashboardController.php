<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.post.index',[
            'beritas' => Berita::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }
    public function index2()
    {
        return view('dashboard.index',[
            'title' => 'dashboard',
            'beritas' => Berita::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'body' => 'required',
            // 'cover' => 'image|file',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['describe'] = Str::limit(strip_tags($request->body), 100);

        Berita::create($data);
        return redirect('dashboard/post')->with('berhasil', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        return view('dashboard.post.edit',[
            'berita' => $berita,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita, $id)
    {
        $berita = Berita::find($id);
        $data = $request->validate([
            'judul' => 'required',
            'body' => 'required',
            // 'cover' => 'image|file',
        ]);
        $data['user_id'] = auth()->user()->id;

        Berita::where('id', $berita->id)->update($data);
        return redirect('dashboard/post')->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        Berita::destroy($berita->id);
        return redirect('dashboard/post')->with('berhasil', 'Data Berhasil Dihapus');
    }
}
