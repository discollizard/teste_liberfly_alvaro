<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Bike;
use Illuminate\Database\Eloquent\Collection;
use App\Documentation\Bike as BikeSchema;

use OpenApi\Annotations as OA;

class BikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Fetches all records from the `bikes` table
     *
     * @OA\Get(
     *     path="/bike",
     *     tags={"Bike"},
     *     operationId="allBikes",
     *     security={
     *      {"bearerAuth": {}}
     *     },
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Unauthorized")
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Bike")
     *         )
     *     )
     * )
     */

    public function allBikes(): Collection
    {
        return Bike::all();
    }

    /**
     * Fetches a record from the `bikes` table by its Id
     *
     * @OA\Get(
     *     path="/bike/{id}",
     *     tags={"Bike"},
     *     operationId="bikeById",
     *     security={
     *      {"bearerAuth": {}}
     *     },
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of the bike to be fetched",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Unauthorized")
     *         )
     *     ), 
     *     @OA\Response(
     *         response="404",
     *         description="This bike does not exist",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="bike not found")
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful response",
     *         @OA\JsonContent(ref="#/components/schemas/Bike")
     *     )
     * )
     */

    public function bikeById(string $id): Bike | JsonResponse
    {
        return Bike::find($id) ?? response()->json([
            'error' => 'bike not found'
        ], 404);
    }
}
