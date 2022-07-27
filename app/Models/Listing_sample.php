<?php

namespace App\Models;

class Listing_sample {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sitamet consectetur
                adipisicing elit. Ipsam minima et illo reprehenderi qua
                possimus voluptas repudiandae cum expedita, eveniet aliquid,
                quam illum quaerat consequatur! Expedita ab consectetur
                tenetur delensiti'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sitamet consectetur
                adipisicing elit. Ipsam minima et illo reprehenderi qua
                possimus voluptas repudiandae cum expedita, eveniet aliquid,
                quam illum quaerat consequatur! Expedita ab consectetur
                tenetur delensiti'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                # code...
                // dd($listing);
                return [$listing];
            }
        }
    }
}
