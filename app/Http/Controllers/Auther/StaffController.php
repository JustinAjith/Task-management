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
        $this->authorize('isAdmin');
        $user = $this->staff->store($request);
        return response()->json($user);
    }

    public function delete(User $user)
    {
        $this->authorize('isAdmin');
        $user->delete();
        return ['success'=>true];
    }

    public function show(User $user)
    {
        $this->authorize('isAdmin');
        return response()->json($user);
    }

    public function edit(UserEditRequest $request, User $user)
    {
        $this->authorize('isAdmin');
        $this->staff->edit($request, $user);
        return ['success'=>true];
    }
}
