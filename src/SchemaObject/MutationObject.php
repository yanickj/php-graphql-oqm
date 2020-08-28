<?php


namespace GraphQL\SchemaObject;


use GraphQL\Mutation;
use GraphQL\Query;
use GraphQL\QueryBuilder\AbstractQueryBuilder;

abstract class MutationObject extends QueryObject
{
    // Lazy
    public function getMutationString(): string
    {
        return parent::getQuery()->__toString();
    }
}