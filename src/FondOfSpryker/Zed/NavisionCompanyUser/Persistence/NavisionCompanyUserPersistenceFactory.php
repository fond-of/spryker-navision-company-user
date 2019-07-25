<?php

namespace FondOfSpryker\Zed\NavisionCompanyUser\Persistence;

use FondOfSpryker\Zed\NavisionCompanyUser\NavisionCompanyUserDependencyProvider;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepositoryInterface getRepository()
 */
class NavisionCompanyUserPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery
     */
    public function getCompanyUserQuery(): SpyCompanyUserQuery
    {
        return $this->getProvidedDependency(NavisionCompanyUserDependencyProvider::PROPEL_QUERY_COMPANY_USER);
    }
}
