<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Surveyaccesslog Entity
 *
 * @property int $id
 * @property string $SYAIN_CD
 * @property int $SELLER_ID
 * @property int $CUSTOMER_ID
 * @property int $FUNCTION_ID
 * @property int $ACCESS_LOG_LEVEL
 * @property string $ACCESS_DT
 * @property \Cake\I18n\FrozenDate $YYYYMM
 * @property \Cake\I18n\FrozenDate $HOUR
 * @property \Cake\I18n\FrozenDate $WEEKDAY
 */
class Surveyaccesslog extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'SYAIN_CD' => true,
        'SELLER_ID' => true,
        'CUSTOMER_ID' => true,
        'FUNCTION_ID' => true,
        'ACCESS_LOG_LEVEL' => true,
        'ACCESS_DT' => true,
        'YYYYMM' => true,
        'HOUR' => true,
        'WEEKDAY' => true,
    ];
}
