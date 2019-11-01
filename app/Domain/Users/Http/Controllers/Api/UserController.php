<?php

namespace App\Http\Controllers\Api\Users;

use App\Domain\Users\Actions\CreateUserAction;
use App\Domain\Users\Actions\DeleteUserByIdAction;
use App\Domain\Users\Actions\GetAllUsersAction;
use App\Domain\Users\Actions\GetUserByIdAction;
use App\Domain\Users\Actions\UpdateUserByIdAction;
use App\Domain\Users\Http\Requests\CreateUserRequest;
use App\Domain\Users\Http\Requests\UpdateUserRequest;
use App\Domain\Users\Http\Resources\UserResource;
use Exception;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * Class UserController
 * @package App\Http\Controllers\Api\Users
 */
class UserController
{
    /**
     * Display a listing of the resource.
     *
     * @param GetAllUsersAction $getAllUsersAction
     * @return AnonymousResourceCollection
     */
    public function index(GetAllUsersAction $getAllUsersAction)
    {
        return UserResource::collection($getAllUsersAction->execute());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @param CreateUserAction $createUserAction
     * @return UserResource
     */
    public function store(CreateUserRequest $request, CreateUserAction $createUserAction)
    {
        return new UserResource($createUserAction->execute($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param GetUserByIdAction $getUserByIdAction
     * @return UserResource
     */
    public function show(int $id, GetUserByIdAction $getUserByIdAction)
    {
        return new UserResource($getUserByIdAction->execute($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     * @param UpdateUserByIdAction $updateUserByIdAction
     * @return Response
     */
    public function update(int $id, UpdateUserRequest $request, UpdateUserByIdAction $updateUserByIdAction)
    {
        $updateUserByIdAction->execute($id, $request->validated());

        return response()->json([], 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param DeleteUserByIdAction $deleteUserByIdAction
     * @return Response
     * @throws Exception
     */
    public function destroy($id, DeleteUserByIdAction $deleteUserByIdAction)
    {
        $deleteUserByIdAction->execute($id);

        return response()->json([], 204);
    }
}
