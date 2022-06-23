<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $depart = departement::query();

            return DataTables::of($depart)
                ->addIndexColumn()
                ->addColumn('action', 'departement.dt-action')
                ->toJson();
        }
        return view('departement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departement.create');
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
            'nameDepart' => 'required',
            'codeDepart' => 'required'
        ]);

        departement::create([
            'nameDepart' => $request->nameDepart,
            'codeDepart' => $request->codeDepart
        ]);

        session()->flash('success', 'Berhasil menambahkan Departement.');

        return redirect()->route('departement.index');
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
    public function edit(departement $departement)
    {
        return view('departement.edit', [
            'departement' => $departement,
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departement $departement)
    {
        $this->validate($request, [
            'nameDepart' => 'required',
            'codeDepart' => 'required'
        ]);

        $departement->update([
            'nameDepart' => $request->nameDepart,
            'codeDepart' => $request->codeDepart
        ]);

        session()->flash('info', 'Berhasil update data Departement.');

        return redirect()->route('departement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(departement $departement)
    {
        if ($departement->delete()) {
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
