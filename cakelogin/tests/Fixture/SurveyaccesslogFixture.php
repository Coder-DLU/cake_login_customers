<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SurveyaccesslogFixture
 */
class SurveyaccesslogFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'surveyaccesslog';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'SYAIN_CD' => 'Lorem ipsum dolor sit amet',
                'SELLER_ID' => 1,
                'CUSTOMER_ID' => 1,
                'FUNCTION_ID' => 1,
                'ACCESS_LOG_LEVEL' => 1,
                'ACCESS_DT' => 'Lorem ipsum dolor sit amet',
                'YYYYMM' => '2022-08-16',
                'HOUR' => '2022-08-16',
                'WEEKDAY' => '2022-08-16',
            ],
        ];
        parent::init();
    }
}
