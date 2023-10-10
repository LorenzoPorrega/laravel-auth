<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
/* use Log; */

class ProjectController extends Controller
{
  public function index(){
    $projects = Project::all();

    return view("admin.projects.index", compact("projects"));
  }
  
  public function show($slug){
    $project = Project::where("slug", $slug)->first();
    
    return view("admin.projects.show", compact("project"));
  }

  public function create(){
    return view("admin.projects.create");
  }

  public function store(Request $request){

    /* Log::debug('TESTO');
    die(); */
    $data = $request->validate([
      "title" => "required|string",
      "language" => "required|string",
      "link" => "required|string",
      "description" => "required|string",
      "thumb" => "required|string",
      "release" => "required|date",
    ]);

    $counter = 0;
    
    do{
      $slug = Str::slug($data["title"]) . ($counter > 0 ? "-" . $counter : "");
      $alreadyExists = Project::where("slug", $slug)->first();
      $counter++;
    }while($alreadyExists);
      
    $data["slug"] = $slug;

    /* if($alreadyExists){
        $data["slug"] = $data["slug"] . "";
        return redirect()->route("admin.projects.create")->with("message", "This project's title already exists!");
    } */
    
    
    /* new Project();
    $project->fill($data)
    $project->save(); */

    $project = Project::create($data);

    return redirect()->route("admin.projects.show", $project->id);
  }
}
