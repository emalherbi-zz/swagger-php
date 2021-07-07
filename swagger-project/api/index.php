<?php

require_once '../routes.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');
$app->get('/empresas', 'getEmpresas');
$app->run();

/**
 * @OA\Get(
 *     path="/empresas",
 *     @OA\Response(response="200", description="OK")
 * )
 */
function getEmpresas()
{
    $obj = new stdClass();
    $obj->ID_EMPRESA = 1;
    $obj->NOME = 'EMPRESA TEST';

    $arr = array();
    $arr[] = $obj;
    $arr[] = $obj;
    $arr[] = $obj;

    echo '{ "result" : '.json_encode($arr).'}';
}

/**
 * @OA\Post(
 *     path="/users",
 *     summary="Adds a new user - with oneOf examples",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="id",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="name",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="phone",
 *                     oneOf={
 *                     	   @OA\Schema(type="string"),
 *                     	   @OA\Schema(type="integer"),
 *                     }
 *                 ),
 *                 example={"id": "a3fb6", "name": "Jessica Smith", "phone": 12345678}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             oneOf={
 *                 @OA\Schema(type="boolean")
 *             }
 *         )
 *     )
 * )
 */
