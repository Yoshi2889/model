<?php

namespace NanoSector\Models\TypeDefinitions;

interface TypeDefinitionInterface
{

    /**
     * Validates that a given value passes this type definition's checks.
     *
     * @param  mixed  $value
     *
     * @return bool true if the value passes, false otherwise.
     */
    public function validate($value): bool;

    /**
     * Returns a default value for this type definition.
     *
     * @return mixed
     */
    public function default();

}
