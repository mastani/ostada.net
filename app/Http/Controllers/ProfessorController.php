<?php

namespace ostada\Http\Controllers;

use ostada\City;
use ostada\Professor;
use ostada\University;

class ProfessorController extends Controller {
    public function index($username) {
        $prof = Professor::with(['university', 'university.city'])->where('username', '=', $username)->firstOrFail();
        return view('prof', compact(['username', 'prof']));
    }
}
