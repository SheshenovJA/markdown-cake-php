<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;

class PostsTable extends AppTable
{

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew()) {
            $entity->created = time();
        }
    }
    public function initialize(array $config)
    {
    }
}