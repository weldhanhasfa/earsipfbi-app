<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\jenisDocument;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $jenis = jenisDocument::query();

            return DataTables::of($jenis)
                ->addIndexColumn()
                ->addColumn('action', 'jenis.dt-action')
                ->toJson();
        }
        return view('jenis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenisDoc' => 'required',
            'keterangan' => 'required'
        ]);

        jenisDocument::create([
            'jenisDoc' => $request->jenisDoc,
            'keterangan' => $request->keterangan
        ]);

        session()->flash('success', 'Berhasil menambahkan Jenis Document.');

        return redirect()->route('jenis.index');
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
    public function edit(jenisDocument $jeni)
    {
        return view('jenis.edit', [
            'jeni' => $jeni,
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisDocument $jeni)
    {
        $this->validate($request, [
            'jenisDoc' => 'required',
            'keterangan' => 'required'
        ]);

        $jeni->update([
            'jenisDoc' => $request->jenisDoc,
            'keterangan' => $request->keterangan
        ]);

        session()->flash('info', 'Berhasil update data Jenis Document.');

        return redirect()->route('jenis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenisDocument $jeni)
    {
        if ($jeni->delete()) {
            session()->flash('error', 'Data dihapus');

            return response()->json([
                'success' => true,
            ]);
        }

        return response()->json([
            'success' => false,
        ]);
    }
}
