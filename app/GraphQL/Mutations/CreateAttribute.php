<?php

namespace App\GraphQL\Mutations;

use App\Models\Attribute;

final class CreateAttribute
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $attribute = Attribute::create([
            'name' => $args['name'],
            'type' => $args['type'],
        ]);

        return $attribute;
    }
}
