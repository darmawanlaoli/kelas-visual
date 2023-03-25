<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

use App\Models\Subscriber;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Session;

class DashboardController extends Controller
{
    public function index(): View
    {
        $dashboard = Dashboard::latest()->paginate(5);

        return view('dashboard.index', compact('dashboard'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        //create post
        Subscriber::create([
            'name'     => $request->name,
            'email'   => $request->email
        ]);
        return redirect()->route('index')->with(['success' => 'Thank you for subscribing to kelasvisual.com ']);
    }
}
