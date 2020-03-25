<?php

namespace FondOfSpryker\Zed\NavisionCompanyUser\Business\Reader;

use FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepositoryInterface;
use Generated\Shared\Transfer\CompanyUserResponseTransfer;
use Generated\Shared\Transfer\CompanyUserTransfer;

class CompanyUserReader implements CompanyUserReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepositoryInterface
     */
    protected $navisionCompanyUserRepository;

    /**
     * @param \FondOfSpryker\Zed\NavisionCompanyUser\Persistence\NavisionCompanyUserRepositoryInterface $navisionCompanyUserRepository
     */
    public function __construct(NavisionCompanyUserRepositoryInterface $navisionCompanyUserRepository)
    {
        $this->navisionCompanyUserRepository = $navisionCompanyUserRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserResponseTransfer
     */
    public function findCompanyUserByExternalReference(CompanyUserTransfer $companyUserTransfer): CompanyUserResponseTransfer
    {
        $companyUserTransfer->requireExternalReference();

        $companyUserTransfer = $this->navisionCompanyUserRepository->findCompanyUserByExternalReference(
            $companyUserTransfer->getExternalReference()
        );

        $companyUserResponseTransfer = new CompanyUserResponseTransfer();
        if (!$companyUserTransfer) {
            return $companyUserResponseTransfer->setIsSuccessful(false);
        }

        return $companyUserResponseTransfer
            ->setIsSuccessful(true)
            ->setCompanyUser($companyUserTransfer);
    }
}
