<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class AdminsTable extends AppTable {
    public function initialize(array $config)
    {

    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew()) {
            $entity->created = time();
        }
    }
    public function validationDefault(Validator $validator)
    {

        $validator
            ->email('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
            ->notEmpty('email');

        $validator
            ->requirePresence('name', 'create')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
            ->notEmpty('login');

        $validator
            ->requirePresence('pass', 'create')
            ->notEmpty('pass');

        return $validator;

    }
}