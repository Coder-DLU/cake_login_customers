<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SurveyaccesslogTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SurveyaccesslogTable Test Case
 */
class SurveyaccesslogTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SurveyaccesslogTable
     */
    protected $Surveyaccesslog;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Surveyaccesslog',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Surveyaccesslog') ? [] : ['className' => SurveyaccesslogTable::class];
        $this->Surveyaccesslog = $this->getTableLocator()->get('Surveyaccesslog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Surveyaccesslog);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SurveyaccesslogTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
