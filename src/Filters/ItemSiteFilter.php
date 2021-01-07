<?php

namespace QBXML\Filters;

/**
 * Trait ItemSiteFilter
 * @package QBXML\Filters
 */
trait ItemSiteFilter
{
    /**
     * @var ItemFilter|null
     */
    private ?ItemFilter $ItemFilter;

    /**
     * @var SiteFilter|null
     */
    private ?SiteFilter $SiteFilter;

    /**
     * @return ItemFilter|null
     */
    public function getItemFilter(): ?ItemFilter
    {
        return $this->ItemFilter;
    }

    /**
     * @param ItemFilter|null $ItemFilter
     * @return self
     */
    public function setItemFilter(?ItemFilter $ItemFilter): self
    {
        $this->ItemFilter = $ItemFilter;
    }

    /**
     * @return SiteFilter|null
     */
    public function getSiteFilter(): ?SiteFilter
    {
        return $this->SiteFilter;
    }

    /**
     * @param SiteFilter|null $SiteFilter
     * @return self
     */
    public function setSiteFilter(?SiteFilter $SiteFilter): self
    {
        $this->SiteFilter = $SiteFilter;
    }
}