<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            //get posts
            $siswa = Siswa::latest()->paginate(5);

            //render view with posts
            return view('siswa.index', compact('siswa'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            //validate form
            $this->validate($request, [
                'nama'     => 'required',
                'kelas'   => 'required'
            ]);

            //create post
            Siswa::create([
                'nama'     => $request->nama,
                'kelas'   => $request->kelas
            ]);

            //redirect to index
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }
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
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        {
            //validate form
            $this->validate($request, [
                'nama'     => 'required',
                'kelas'   => 'required'
            ]);



                //update post without image
                $siswa->update([
                    'nama'     => $request->nama,
                    'kelas'   => $request->kelas
                ]);
            }

            //redirect to index
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
