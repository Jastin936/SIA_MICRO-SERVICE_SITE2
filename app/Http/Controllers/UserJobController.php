<?php

namespace App\Http\Controllers;

use App\Models\UserJob; // Model for the tbluserjob table
use Illuminate\Http\Request; // For handling HTTP requests
use App\Traits\ApiResponser; // For standardized API responses
use Illuminate\Http\Response; // For response codes
use DB;

class UserJobController extends Controller
{
    use ApiResponser; // Use custom trait for consistent API responses

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Return the list of user jobs
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $usersjob = UserJob::all();
        return $this->successResponse($usersjob);
    }

    /**
     * Obtain and show one user job
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}
