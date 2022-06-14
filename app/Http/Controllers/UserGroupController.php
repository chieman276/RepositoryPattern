<?php

namespace App\Http\Controllers;

use App\Models\User_group;
use App\Http\Requests\StoreUser_groupRequest;
use App\Http\Requests\UpdateUser_groupRequest;
use App\Services\Interfaces\User_groupServiceInterface;
use Illuminate\Http\Request;

class UserGroupController extends Controller
{

    protected $user_groupService;

    public function __construct(User_groupServiceInterface $user_groupService)
    {
        $this->user_groupService = $user_groupService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $this->user_groupService->getAll($request);
        return response()->json($items, 200)->view('userGroups.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser_groupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = $this->user_groupService->create($request->all());

        return response()->json($item, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_group  $user_group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->user_groupService->findById($id);

        return response()->json($item, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_group  $user_group
     * @return \Illuminate\Http\Response
     */
    public function edit(User_group $user_group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_groupRequest  $request
     * @param  \App\Models\User_group  $user_group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $this->user_groupService->update($request->all(), $id);
        return response()->json($item, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_group  $user_group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = $this->user_groupService->destroy($id);
        return response()->json($item, 200);
    }
}
