<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{

  // autocomplete typeahead search

  // public function search(Request $request)
  //  {
  //        $search = $request->get('term');
  //
  //        $result = Post::where('title', 'LIKE', '%'. $search. '%')->get();
  //
  //        return response()->json($result);
  //
  //  }


// autocomplete jqueryui search

  // public function search(Request $request){
  //
  //    $search = $request->search;
  //
  //    if($search == ''){
  //       $employees = Post::orderby('title','asc')->select('id','title')->limit(5)->get();
  //    }else{
  //       $employees = Post::orderby('title','asc')->select('id','title')->where('title', 'like', '%' .$search . '%')->limit(5)->get();
  //    }
  //
  //    $response = array();
  //    foreach($employees as $employee){
  //       $response[] = array("label"=>$employee->title);
  //    }
  //
  //    echo json_encode($response);
  //    exit;
  // }
    //END
}
