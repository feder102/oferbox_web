<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compania Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 * @property \Cake\I18n\FrozenTime $creado
 * @property \Cake\I18n\FrozenTime $modificado
 * @property bool $eliminado
 */
class Compania extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
