<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

namespace powerkernel\yiicommon\controllers;


class ActiveController extends RestController
{
    /**
     * @inheritdoc
     * @var array
     */
    public $serializer = [
        '__class' => \yii\rest\Serializer::class,
        'collectionEnvelope' => 'items',
    ];

}