<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Hash;
use Response;
use Spatie\Permission\Models\Role;


class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {

        $roles = Role::pluck('name', 'id')->toArray();


        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {

       // dd($request->all());
     
        
          $user = new User();

          //store user basic data
          $user->first_name = ucwords($request->input('first_name'));
          $user->last_name =ucwords( $request->input('last_name'));
          $user->email = $request->input('email');
          $user->phone_number = $request->input('phone_number');
          $user->phone_number_two = $request->input('phone_number_two');
          $user->gender = $request->gender;
          $user->role_id= $request->role_id;
          $user->status= "active";
          $password = "12345678";

          //has user password for data encryption
          $user->password = Hash::make($password);

          //store user image if uploaded
          if(!empty($request->file('image'))){
            $user->image = \App\Models\ImageUploader::upload($request->file('image'),'users');
          }else{
            $user->image =  "user.jpg";

          }
          

          $user->save();


          $name = ucwords($request->last_name ." " . $request->first_name);
          $useRole = Role::find($request->role_id);
          session()->flash('success', $name . ' has been added successfully as  ' . $useRole->name);

        //   session()->flash($name.' has been added successfully as a '.$useRole);

          return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }


    // In UserController.php
public function bulkDestroy(Request $request)
{
    $userIds = $request->input('user_ids');
    if ($userIds) {
        User::whereIn('id', $userIds)->delete();
    }
    return redirect()->route('users.index')->with('success', 'Selected users deleted successfully.');
}

}
