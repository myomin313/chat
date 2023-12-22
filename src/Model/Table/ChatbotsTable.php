<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chatbots Model
 *
 * @method \App\Model\Entity\Chatbot newEmptyEntity()
 * @method \App\Model\Entity\Chatbot newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Chatbot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chatbot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chatbot findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Chatbot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chatbot[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chatbot|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chatbot saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChatbotsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('chatbots');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('messages')
            ->requirePresence('messages', 'create')
            ->notEmptyString('messages');

        $validator
            ->scalar('response')
            ->requirePresence('response', 'create')
            ->notEmptyString('response');

        return $validator;
    }
}
