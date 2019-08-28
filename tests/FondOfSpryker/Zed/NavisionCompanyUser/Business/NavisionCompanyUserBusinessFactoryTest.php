<?php

namespace FondOfSpryker\Zed\NavisionCompanyUser\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\NavisionCompanyUser\Business\Reader\CompanyUserReaderInterface;
use FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepository;

class NavisionCompanyUserBusinessFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\NavisionCompanyUser\Business\NavisionCompanyUserBusinessFactory
     */
    protected $navisionCompanyUserBusinessFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepository
     */
    protected $navisionCompanyUserRepositoryMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->navisionCompanyUserRepositoryMock = $this->getMockBuilder(NavisionCompanyUserRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->navisionCompanyUserBusinessFactory = new NavisionCompanyUserBusinessFactory();
        $this->navisionCompanyUserBusinessFactory->setRepository($this->navisionCompanyUserRepositoryMock);
    }

    /**
     * @return void
     */
    public function testCreateCompanyUserReader(): void
    {
        $this->assertInstanceOf(CompanyUserReaderInterface::class, $this->navisionCompanyUserBusinessFactory->createCompanyUserReader());
    }
}
