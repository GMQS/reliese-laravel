<?php

/**
 * Created by Cristian.
 * Date: 05/09/16 11:27 PM.
 */

namespace Reliese\Coders\Model;

interface Relation
{
    /**
     * @return string
     */
    public function hint();

    /**
     * @return string
     */
    public function name();

    /**
     * @return string
     */
    public function body();

    /**
     * @return string
     */
    public function returnType();

    /**
     * @return string
     */
    public function methodDocument();

    /**
     * @return string
     */
    public function propertyComment();
}
