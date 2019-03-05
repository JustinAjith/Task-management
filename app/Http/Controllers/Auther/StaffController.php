<?php

namespace App\Http\Controllers\Auther;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\StaffRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    protected $staff;
    public function __construct(StaffRepository $staff)
    {
        $this->staff = $staff;
    }

    public function index()
    {
        $users = $this->staff->index();
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $user = $this->staff->store($request);
        return response()->json($user);
    }

    public function delete(User $user)
    {
        $user->delete();
        return ['success'=>true];
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function edit(UserEditRequest $request, User $user)
    {
        $this->staff->edit($request, $user);
        return ['success'=>true];
    }
}
