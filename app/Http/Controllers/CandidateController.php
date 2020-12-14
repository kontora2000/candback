<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Vote;


class CandidateController extends Controller
{
  
  public function listCandidates() {
    return response()->json(Candidate::get(), 200);
  }

  public function getCandidatesTop() {
    return response()->json(Candidate::orderBy('votes')->get(), 200);
  } 

  public function getCandiadteByID($id) {
    return response()->json(Candidate::find($id), 200);
  }

  public function getCandidateBySlug($slug) {
    return response()->json(Candidate::find($slug), 200);
  }

  public function postCandidate(Request $req) {
    $candidate = Candidate::create($req->all());
    return response()->json($candidate, 201);
  }

  public function putCandidate(Request $req, Candidate $c) {
    $c->update($req->all());
    return response()->json($c, 200);
  } 

  public function deleteCandidate(Request $req, Candidate $c) {
    $c->delete();
    return response()->json($c, 200);
  } 

  public function voteCandidate(Request $req) {
     $vote = Vote::create($req->all());
     Candidate::find($req->input('candidate_id'))->increment('votes');
     return response()->json($vote, 201);
  }
}
