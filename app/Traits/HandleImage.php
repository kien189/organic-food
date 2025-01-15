<?php

namespace App\Traits;


use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HandleImage
{
    public function uploadFile(UploadedFile $file, string $directory = 'image_app')
    {
        // Tạo tên file duy nhất
        $fileName =$directory . '_'.uniqid(). $file->getClientOriginalName();

        // Lưu ảnh vào thư mục được chỉ định hoặc thư mục mặc định
        $filePath = $file->storeAs($directory, $fileName, 'public');
        return  basename($fileName);
    }

    /**
     * Xử lý ảnh (xóa ảnh cũ và lưu ảnh mới nếu có).
     */
    public function handleImage(?UploadedFile $newImage, ?string $currentImage, string $directory): ?string
    {
        // Nếu có ảnh mới
        if ($newImage) {
            // Nếu có ảnh cũ, kiểm tra và xóa ảnh cũ

            if ($currentImage && Storage::exists('public/' . $currentImage)) {
                Storage::delete('public/' . $currentImage);
            }

            // Lưu ảnh mới
            return $this->uploadFile($newImage, $directory);
        }

        // Nếu không có ảnh mới, giữ lại ảnh cũ
        return $currentImage;
    }



    public function uploadMultipleFiles(array $files, string $directory = 'image_app'): array
    {
        $paths = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $paths[] = $this->uploadFile($file, $directory);
            }
        }

        return $paths;
    }

    /**
     * Xử lý nhiều ảnh: Xóa ảnh cũ và lưu danh sách ảnh mới.
     *
     * @param array|null $newImages Danh sách ảnh mới (UploadedFile[])
     * @param array|null $currentImages Danh sách ảnh hiện tại (đường dẫn)
     * @param string $directory
     * @return array|null
     */
    public function handleMultipleImages(?array $newImages, ?array $currentImages, string $directory = 'image_app'): ?array
    {
        // Nếu có ảnh mới
        if ($newImages) {
            // Xóa ảnh cũ nếu tồn tại
            if ($currentImages) {
                foreach ($currentImages as $currentImage) {
                    if (Storage::exists('public/' . $currentImage)) {
                        Storage::delete('public/' . $currentImage);
                    }
                }
            }

            // Lưu ảnh mới và trả về danh sách đường dẫn
            return $this->uploadMultipleFiles($newImages, $directory);
        }

        // Nếu không có ảnh mới, giữ lại ảnh cũ
        return $currentImages;
    }
}
