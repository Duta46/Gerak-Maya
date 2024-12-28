<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Soal;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $soal = Soal::get();
            return DataTables::of($soal)
                ->addIndexColumn()
                ->addColumn('actions', function ($item) {
                    return '
                    <div class="dropdown text-end">
                        <button type="button" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-bs-toggle="dropdown">
                            Actions
                            <span class="svg-icon svg-icon-3 rotate-180 ms-3 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="' . route('soal.show', $item->id) . '" class="menu-link px-3">
                                Soal Detail
                            </a>
                        </div>
                            <div class="menu-item px-3">
                                <a href="' . route('soal.edit', $item->id) . '" class="menu-link px-3">
                                    Edit
                                </a>
                            </div>
                            <div class="menu-item px-3">
                            <a class="menu-link px-3 delete-confirm" data-id="' . $item->id . '" role="button">Delete</a>
                            </div>
                        </div>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('admin.soal.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.soal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $validate = [
            'kunci_jawaban' => 'required|string',
            'point_soal' => 'required|string',
        ];

        if ($request->has('soal')) {
            $validate['soal'] = 'string';
            $input = strip_tags($request->input('soal'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['soal'] = 'nullable|string';
            $data['soal'] = $input;
        } else {
            $data['soal'] = null;
        }

        if ($request->has('jawaban_a')) {
            $validate['jawaban_a'] = 'string';
            $input = strip_tags($request->input('jawaban_a'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_a'] = 'nullable|string';
            $data['jawaban_a'] = $input;
        } else {
            $data['jawaban_a'] = null;
        }

        if ($request->has('jawaban_b')) {
            $validate['jawaban_b'] = 'string';
            $input = strip_tags($request->input('jawaban_b'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_b'] = 'nullable|string';
            $data['jawaban_b'] = $input;
        } else {
            $data['jawaban_b'] = null;
        }

        if ($request->has('jawaban_c')) {
            $validate['jawaban_c'] = 'string';
            $input = strip_tags($request->input('jawaban_c'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_c'] = 'nullable|string';
            $data['jawaban_c'] = $input;
        } else {
            $data['jawaban_c'] = null;
        }

        if ($request->has('jawaban_d')) {
            $validate['soal'] = 'string';
            $input = strip_tags($request->input('jawaban_d'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_d'] = 'nullable|string';
            $data['jawaban_d'] = $input;
        } else {
            $data['jawaban_d'] = null;
        }

        $request->validate($validate);

        Soal::create($data);

        return redirect()->route('soal.index')->with('success', 'Berhasil Tambah Soal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $soal = Soal::find($id);

        return view('admin.soal.show', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $soal = Soal::find($id);

        return view('admin.soal.edit', [
            'soal' => $soal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token');

        $validate = [
            'kunci_jawaban' => 'required|string',
            'point_soal' => 'required|string',
        ];

        $soal = Soal::find($id);

        if ($request->has('soal')) {
            $validate['soal'] = 'string';
            $input = strip_tags($request->input('soal'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['soal'] = 'nullable|string';
            $data['soal'] = $input;
        }

        if ($request->has('jawaban_a')) {
            $validate['jawaban_a'] = 'string';
            $input = strip_tags($request->input('jawaban_a'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_a'] = 'nullable|string';
            $data['jawaban_a'] = $input;
        }

        if ($request->has('jawaban_b')) {
            $validate['jawaban_b'] = 'string';
            $input = strip_tags($request->input('jawaban_b'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_b'] = 'nullable|string';
            $data['jawaban_b'] = $input;
        }

        if ($request->has('jawaban_c')) {
            $validate['jawaban_c'] = 'string';
            $input = strip_tags($request->input('jawaban_c'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_c'] = 'nullable|string';
            $data['jawaban_c'] = $input;
        }

        if ($request->has('jawaban_d')) {
            $validate['jawaban_d'] = 'string';
            $input = strip_tags($request->input('jawaban_d'));
            $input = preg_replace('/&hellip;|&nbsp;/', '', $input);
            $input = preg_replace('/&rdquo;/', '"', $input);
            $validate['jawaban_d'] = 'nullable|string';
            $data['jawaban_d'] = $input;
        }

        $soal->update($data);

        return redirect()->route('soal.index')->with('success', 'Berhasil Ubah Soal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $soal = Soal::find($id);

            if (!$soal) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Soal not found',
                ], 404);
            }

            //Menghapus soal
            $soal->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Soal deleted',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
