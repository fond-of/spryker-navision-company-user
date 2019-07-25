<?php

namespace FondOfSpryker\Zed\NavisionCompanyUser\Business;

use FondOfSpryker\Zed\NavisionCompanyUser\Business\Reader\CompanyUserReader;
use FondOfSpryker\Zed\NavisionCompanyUser\Business\Reader\CompanyUserReaderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepositoryInterface getRepository()
 */
class NavisionCompanyUserBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\NavisionCompanyUser\Business\Reader\CompanyUserReaderInterface
     */
    public function createCompanyUserReader(): CompanyUserReaderInterface
    {
        return new CompanyUserReader($this->getRepository());
    }
}
