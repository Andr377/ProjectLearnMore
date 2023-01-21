<?php

namespace App\Http\Controllers;

use App\Models\LectureApproval;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureApprovalController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if ($user->Role == 'admin') {
            $lecRequests = User::join('lecture_approvals', 'users.id', '=', 'lecture_approvals.UserId')->get();
            return view('admin.lectureApproval')->with('lecRequests', $lecRequests);
        }

        $lecApproval = new LectureApproval();
        $lecApproval->UserId = $user->id;
        $date = Carbon::now()->toDateString();
        $lecApproval->RequestDate = $date;
        $lecApproval->save();

        return view('user.lectureApproval')->with('reqDate', $lecApproval->RequestDate);
    }

    public function approval($check, $userId, $approveId)
    {
        if ($check == '1') {
            $user = User::find($userId);
            $user->IsLecture = 1;
            $user->save();
        }

        $approveData = LectureApproval::find($approveId);
        $approveData->Approve = $check;
        $approveData->ApprovalDate = Carbon::now()->toDateString();
        $approveData->save();

        return redirect('/LectureApproval');
    }
}
