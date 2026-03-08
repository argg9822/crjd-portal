<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        try {
            Mail::to('notificaciones@corporacionrjd.org')->send(new ContactMail($request->validated()));
            Contact::create($request->validated());
            return back()->with('success', 'Nos comunicaremos con usted pronto.');
        } catch (\Exception $e) {
            Log::error("Ocurrió un error al enviar formulario de contacto " . $e->getMessage());
            return back()->with('error', 'Ocurrió un error al enviar el mensaje, intente nuevamente ' . $e->getMessage())->withInput();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
