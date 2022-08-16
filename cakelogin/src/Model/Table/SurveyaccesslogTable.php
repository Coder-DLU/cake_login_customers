<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Surveyaccesslog Model
 *
 * @method \App\Model\Entity\Surveyaccesslog newEmptyEntity()
 * @method \App\Model\Entity\Surveyaccesslog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Surveyaccesslog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Surveyaccesslog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Surveyaccesslog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SurveyaccesslogTable extends Table
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

        $this->setTable('surveyaccesslog');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('SYAIN_CD')
            ->maxLength('SYAIN_CD', 255)
            ->requirePresence('SYAIN_CD', 'create')
            ->notEmptyString('SYAIN_CD');

        $validator
            ->integer('SELLER_ID')
            ->requirePresence('SELLER_ID', 'create')
            ->notEmptyString('SELLER_ID');

        $validator
            ->integer('CUSTOMER_ID')
            ->requirePresence('CUSTOMER_ID', 'create')
            ->notEmptyString('CUSTOMER_ID');

        $validator
            ->integer('FUNCTION_ID')
            ->requirePresence('FUNCTION_ID', 'create')
            ->notEmptyString('FUNCTION_ID');

        $validator
            ->integer('ACCESS_LOG_LEVEL')
            ->requirePresence('ACCESS_LOG_LEVEL', 'create')
            ->notEmptyString('ACCESS_LOG_LEVEL');

        $validator
            ->scalar('ACCESS_DT')
            ->maxLength('ACCESS_DT', 255)
            ->requirePresence('ACCESS_DT', 'create')
            ->notEmptyString('ACCESS_DT');

        $validator
            ->date('YYYYMM')
            ->requirePresence('YYYYMM', 'create')
            ->notEmptyDate('YYYYMM');

        $validator
            ->date('HOUR')
            ->requirePresence('HOUR', 'create')
            ->notEmptyDate('HOUR');

        $validator
            ->date('WEEKDAY')
            ->requirePresence('WEEKDAY', 'create')
            ->notEmptyDate('WEEKDAY');

        return $validator;
    }
}
