<?php

namespace App\Documentation\Schemas;

use OpenApi\Annotations as OA;


    /**
     * @OA\Schema(
     *     schema="Bike",
     *     title="Bike",
     *     description="Data about a singular store in the `bikes` table",
     *     @OA\Property(property="id", type="integer"),
     *     @OA\Property(property="brand_name", type="string"),
     *     @OA\Property(property="model", type="string"),
     *     @OA\Property(property="year_of_release", type="integer"),
     *     @OA\Property(property="units_sold", type="integer"),
     *     @OA\Property(property="created_at", type="string", format="date-time"),
     *     @OA\Property(property="updated_at", type="string", format="date-time", nullable=true)
     * )
     */


 class Bike{

 }