<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Type: admin');
    }

    public function index()
    {
        if (Auth::user()->Type == 'admin') {
            return view('admin.index', [
                'buku' => Buku::latest()->filter(request(['search', 'category']))->paginate(12)->withQueryString()
            ]);
        } else {
            abort(403);
        }
    }
}
