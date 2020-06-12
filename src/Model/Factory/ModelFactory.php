<?php

namespace App\Model\Factory;

use App\Model\PdoDb;

/**
 * Class ModelFactory
 * Creates the Model if it doesn't exist
 * @package App\Model
 */
class ModelFactory
{
    /**
     * Model
     * @var array
     */
    private static $models = [];

    /**
     * Returns the Model if it exists or creates it before returning it
     * @param $table
     * @return mixed
     */
    public static function getModel(string $table)
    {
        if (array_key_exists($table, self::$models)) {

            return self::$models[$table];
        }

        $class                  = "App\Model\\" . ucfirst($table) . "Model";
        self::$models[$table]   = new $class(new PdoDb(PdoFactory::getPDO()));

        return self::$models[$table];
    }
}
