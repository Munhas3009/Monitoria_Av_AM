<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campanha Entity
 *
 * @property int $id
 * @property int $unidade_id
 * @property int $user_id
 * @property string|null $tipo_vacinacao
 * @property int|null $dose
 * @property int|null $unidade_sanitaria
 * @property int|null $brigada_movel
 * @property int|null $agente_comunitario_saude
 * @property int|null $intervalo_idade
 * @property int|null $mulhere_p_parto
 * @property string|null $comentarios
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Unidade $unidade
 * @property \App\Model\Entity\User $user
 */
class Campanha extends Entity
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
        'unidade_id' => true,
        'user_id' => true,
        'tipo_vacinacao' => true,
        'dose' => true,
        'unidade_sanitaria' => true,
        'brigada_movel' => true,
        'agente_comunitario_saude' => true,
        'intervalo_idade' => true,
        'mulhere_p_parto' => true,
        'comentarios' => true,
        'created' => true,
        'modified' => true,
        'unidade' => true,
        'user' => true
    ];
}
