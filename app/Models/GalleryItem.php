<?php

namespace App\Models;

use App\Http\Resources\GalleryItemResource;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GalleryItem extends Model
{
    use HasFactory;

    public function getAll(): array
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://g8fe4a68ec48be7-createacollection.adb.uk-london-1.oraclecloudapps.com/ords/admin/collection_entries/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            return [];
        } else {
            $data = json_decode($response, true);
            return $data['items'];
        }
    }
}
