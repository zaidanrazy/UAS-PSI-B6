<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(private $name = 'User')
    {
        // $this->middleware('admin');
    }
    /**
     *
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        //autorization
        if (auth()->user()->is_admin === 'admin') {
            $this->authorize('create', $user);
        } else {
            abort(403, 'Unauthorized');
        }

        return view('layout.user.index', [
            'name' => $this->name,
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //autorization
        if (auth()->user()->is_admin === 'admin') {
            $this->authorize('create', $user);
        } else {
            abort(403, 'Unauthorized');
        }


        $data =  [
            'role' => User::select('is_admin')->distinct()->get(),
        ];
        // dd($data);
        return view('layout.user.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'nik' => ['required', 'min:3', 'max:255'],
            'password' => ['required', 'min:5', 'max:255'],
            'role' => ['required']


        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        if (!$validatedData->fails()) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->nik_pic = $request->nik;
            $user->is_admin = $request->role;
            $user->password = Hash::make($request->input('password'));

            $user->save();

            return redirect('user')->with('success', 'Registration successfull! Please Login');
        } else {
            return redirect()->back()->with('failed', $validatedData->getMessageBag());
        }
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
    public function edit(user $user)
    {

        $data = [
            'role' => User::select('is_admin')->distinct()->get(),
            'user' => $user->find(request()->segment(2))
        ];

        return view('layout.user.edit')
            ->with($data);

        // return view('layout.user.edit', [
        //     'user' => $user->find(request()->segment(2)),
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    // public function update(User $user, Request $request, string $id)
    {
        //autorization
        // if (auth()->user()->is_admin === 'admin') {
        //     $this->authorize('create', $user);
        // } else {
        //     abort(403, 'Unauthorized');
        // }

        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required', 'email',
                'nik' => 'required',
                // 'password' => 'required',
                'role' => 'required'

            ],

            // [
            //     // 'barcode' => 'barcode harus 8 karakter!',
            //     'pic' => 'pic harus 2 karakter!',
            //     'barcode' => 'barcode harus 8 karakter!',
            // ]
        );
        if (!$validate->fails()) {
            $user = User::find($id);

            $DataUser = [
                'name'     => $request->input('name'),
                'email'   => $request->input('email'),
                'nik_pic'   => $request->input('nik'),
                // 'password'   => $request->input('password', $user->password),
                'is_admin' => $request->input('role'),

            ];
            // Update password only if it's provided
            if ($request->filled('password')) {
                $DataUser['password'] = $request->input('password');
            }

            // $user->update($userData);
            User::find($id)->update($DataUser);
            // dd($request->all());
            // $dataBarang = Barang::find(request()->segment(2));
            // $sites = Site::find($id);

            return redirect('user')->with('success', 'Data Berhasil Diupdate!');
        } else {
            return back()->with('failed', $validate->getMessageBag());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        User::destroy($id);

        return redirect('user')->with('success', 'Data Berhasil Dihapus!');
    }
}
