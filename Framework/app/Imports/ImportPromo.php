<?php

namespace App\Imports;

use App\Models\DetailInformation;
use App\Models\Information;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportPromo implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $data) {

            if ($key > 0) {
                $name = $data[5];
                $location = $data [1];
                $cabang = $data[2];
                $pic_name = $data[3];
                $no_wa = $data [4];
                $img = $data [6];
                $cat = $data[8];
                $duration = $data[9];
                $snk = $data[10];
                $parent = $data[11];

                $promo = Information::create([
                    'cat_id' => $cat,
                    'parent_id' => $parent,
                    'title' => $name,
                    'news_slug' => Str::slug($name),
                    'thumb' => $img,
                ]);

                $detail = DetailInformation::create([
                    'id_info' => $promo->id,
                    'location' => $location,
                    'cabang' => $cabang,
                    'pic_name' => $pic_name,
                    'no_wa' => $no_wa,
                    'duration_promo' => $duration,
                    's&k' => $snk,
                    'slug' => Str::slug($name)
                ]);

            }
        }
    }
}
