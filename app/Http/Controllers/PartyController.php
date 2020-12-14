<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
  public function listCandidates() {
    return response()->json(Party::get(), 200);
  }

  public function getCandidatesTop() {
    return response()->json(Party::orderBy('votes')->get(), 200);
  } 

  public function getCandiadteByID($id) {
    return response()->json(Party::find($id), 200);
  }

  public function getCandidateBySlug($slug) {
    return response()->json(Party::find($slug), 200);
  }

  public function postCandidate(Request $req) {
    $candidate = Party::create($req->all());
    return response()->json($candidate, 201);
  }

  public function putCandidate(Request $req, Party $p) {
    $c->update($req->all());
    return response()->json($p, 200);
  } 

  public function deleteCandidate(Request $req, Party $p) {
    $p->delete();
    return response()->json($p, 200);
  } 

}
