<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('ID_USUARIO');
        $this->setPrimaryKey('ID_USUARIO');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('USUARIO', 'El usuario es requerido')
            ->notEmpty('CLAVE', 'La clave es requerida')
            ->notEmpty('role', 'A role es requerido')
            ->add('PERFIL', 'inList', [
                'PERFIL' => ['inList', ['ADMINISTRADOR', 'COBRADOR']],
                'message' => 'Ingrese un role valido'
            ]);
    }
    /*public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ID_USUARIO')
            ->allowEmpty('ID_USUARIO', 'create')
            ->add('ID_USUARIO', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COD_VENDED');

        $validator
            ->allowEmpty('USUARIO');

        $validator
            ->allowEmpty('CLAVE');

        $validator
            ->allowEmpty('PERFIL');

        return $validator;
    }*/

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['ID_USUARIO']));

        return $rules;
    }
}
