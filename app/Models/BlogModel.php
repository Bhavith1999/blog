<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    public static function getRecord($filters)
    {
        $query = self::select('blog.*', 'users.name as user_name')
            ->leftJoin('users', 'blog.user_id', '=', 'users.id')
            ->where('blog.is_delete', '=', 0)
            ->orderBy('blog.id', 'desc');

        if (!empty($filters['id'])) {
            $query->where('blog.id', '=', $filters['id']);
        }
        if (!empty($filters['username'])) {
            $query->where('users.name', 'like', '%' . $filters['username'] . '%');
        }
        if (!empty($filters['title'])) {
            $query->where('blog.title', 'like', '%' . $filters['title'] . '%');
        }
        if (!empty($filters['is_publish'])) {
            $is_publish = $filters['is_publish'];
            if ($is_publish == 100) {
                $is_publish = 0;
            }
            $query->where('blog.is_publish', '=', $is_publish);
        }
        if (!empty($filters['status'])) {
            $status = $filters['status'];
            if ($status == 100) {
                $status = 0;
            }
            $query->where('blog.status', '=', $status);
        }

        return $query->paginate(20);
    }
}
