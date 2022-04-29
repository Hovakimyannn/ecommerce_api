<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;
use Illuminate\Validation\Factory;

final class UpdateCategory
{

    protected $validation;
    public function __construct(
        Factory $validation
    ){
        $this->validation = $validation;
    }
    /**
     * @param  null  $_
     * @param  array{}  $args
     */

    public function __invoke($_, array $args)
    {
        $this->validation->validate($args, [
            'name' => 'min:3|max:50',
            'description' => 'min:10',
        ]);
        $category = Category::find($args['id']);

        if(isset($args['name'])) {
            $category->name = $args['name'];
        }

        if(isset($args['description'])) {
            $category->name = $args['description'];
        }

        $category->save();

        return $category;
    }
}
