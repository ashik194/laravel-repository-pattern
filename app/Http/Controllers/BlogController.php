<?php

namespace App\Http\Controllers;

use App\Interfaces\CrudInterface;
use App\Repositories\BlogRepository;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ResponseTrait;

    public function __construct(private readonly CrudInterface $crudOperation)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResponse
    {
        //
        try{
            // $blogs = new BlogRepository();
            // return $this->successResponse($blogs->getAll(), "Fetched Successfuly....!!!");
            return $this->successResponse($this->crudOperation->getAll(), "Fetched Successfuly....!!!");
        }catch(Exception $e) {
            return $this->errorResponse([], $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
