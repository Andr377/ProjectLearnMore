<?php

namespace App\Http\Controllers;

use App\Models\LectureApproval;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->Role == 'admin') {
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

    public function approval($check, $userId, $approveId) {

        if($check == '1') {
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LectureApproval  $lectureApproval
     * @return \Illuminate\Http\Response
     */
    public function show(LectureApproval $lectureApproval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LectureApproval  $lectureApproval
     * @return \Illuminate\Http\Response
     */
    public function edit(LectureApproval $lectureApproval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LectureApproval  $lectureApproval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LectureApproval $lectureApproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LectureApproval  $lectureApproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(LectureApproval $lectureApproval)
    {
        //
    }
}
