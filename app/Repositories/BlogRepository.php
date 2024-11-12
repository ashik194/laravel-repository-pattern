<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Models\Blog;
use Illuminate\Contracts\Pagination\Paginator;

class BlogRepository implements CrudInterface
{
    
    public function getAll() : Paginator
    {
        return Blog::paginate(10);
    }
    
    public function getById(int $id): Blog
    {
        return Blog::find($id);
    }
}


?>