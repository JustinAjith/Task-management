<?php
namespace App\Repositories;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffRepository
{
    protected $staff;
    public function __construct(User $staff = null)
    {
        $this->staff = $staff;
    }

    public function index()
    {
        return $this->staff->orderBy('id', 'DESC')->get();
    }

    public function store(UserRequest $request)
    {
        $request->merge(['password'=>Hash::make($request->password)]);
        $user = $this->staff->fill($request->toArray());
        $user->save();
        return $user;
    }

    public function edit(UserEditRequest $request, User $user)
    {
        $user = $this->staff->find($user->id);
        $user->update($request->toArray());
        return ['success'=>true];
    }
}