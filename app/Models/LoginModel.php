<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class LoginModel extends Model
{
    use HasFactory;

    static function path($param = null)
    {
        return "https://peta.umrah.ac.id/oauth" . $param;
    }

    static function auth($data)
    {
        try {
            $response = Http::asForm()->post(static::path(), $data);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json(),
                ];
            }
            return [
                'success' => false,
                'message' => 'Login gagal',
                'status' => $response->status(),
                'response' => $response->body(),
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}