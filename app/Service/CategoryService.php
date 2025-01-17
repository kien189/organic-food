<?php

namespace App\Service;

use App\Models\Category;
use App\Traits\HandleImage;
use App\Traits\UploadImageTrait;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    use HandleImage, UploadImageTrait;
    public function getCategories()
    {
        $search = request()->input('search');
        $categories = Category::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->withCasts(['created_at' => 'datetime'])
            ->paginate(2)
            ->appends(['search' => $search ?? null]);;
        return $categories;
    }

    public function getCategory($id)
    {
        return Category::find($id);
    }

    public function createCategory(array $data)
    {
        $data['image'] = $this->uploadImage($data['image']);
        return Category::create($data);
    }

    public function updateCategory($id, array $data, $file = null)
    {
        $category = $this->getCategory($id);
        if (!empty(($data['image']))) {
            $data['image'] = $this->uploadImage($data['image']);
        }
        $category->update($data);
        return $category;
    }


    public function deleteCategory($id)
    {
        $category = $this->getCategory($id);
        $imagePath = $category->image;
        if (Storage::exists('categories/' . $imagePath)) {
            Storage::delete('categories/' . $imagePath);
        }
        $category->delete();
        return $category;
    }
}
