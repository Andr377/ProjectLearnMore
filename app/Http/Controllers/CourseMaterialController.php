<?php

namespace App\Http\Controllers;

use App\Models\CourseMaterial;
use Illuminate\Http\Request;

class CourseMaterialController extends Controller
{
    public function insertMaterialIndex($courseId)
    {
        return view('user.insertMaterial')->with('courseId', $courseId);
    }

    public function insertMaterial(Request $request, $courseId)
    {
        $request->validate([
            'material_description' => 'required',
            'material_file' => 'required|file|mimes:pdf'
        ]);

        $courseMaterial = new CourseMaterial();
        $courseMaterial->CourseId = $courseId;
        $courseMaterial->MaterialDescription = $request->material_description;

        $file = $request->file('material_file');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '\Materials';
        $file->move($destinationPath, $fileName);
        $courseMaterial->FilePath = '/Materials' . '/' . $fileName;
        $courseMaterial->save();

        return redirect('/ManageCourse' . '/' . $courseId);
    }
}
