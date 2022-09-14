<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public static function tree()
    {
        $allCategories = DB::table('categories')->get();

        $rootCategories = $allCategories->where('categoriesparentid', '=', '0');

        foreach ($rootCategories as $rootCategory) {
            $rootCategory->children = $allCategories->where('categoriesparentid', $rootCategory->id);
        }
        return $rootCategories;

        // dd($rootCategories);
    }

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
