<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orderBy = 'created_at';
      return view('registrations/index', [
          'registrations' => registration::all()
              ->sortByDesc($orderBy)
      ]);
    }

    public function register()
    {
      $data = [
        'user_id' => Auth::user()->id,
        'registered_at' => now()
      ];
      Registration::create($data);
      return view('registrations/manage');
    }

    public function unregister()
    {
      $registration = $this->getLastRegistration();
      $register_time = new Carbon($registration->registered_at);

      $data = [
          'unregistered_at' => now(),
          'time_registered' => $register_time->diff(now())->format('%H:%I:%S')
      ];

      $registration->update($data);
      return view('/registrations/manage',['registration' => $registration]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $registration = $this->getLastRegistration();

          return view('/registrations/manage',['registration' => $registration]);
    }

    private function getLastRegistration()
    {
      return $registration = Registration::get()
        ->where('user_id', Auth::user()->id)
        ->sortByDesc('id')
        ->first();
    }
