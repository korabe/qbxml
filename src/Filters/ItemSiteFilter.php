<?php declare(strict_types=1);

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
  private ?ItemFilter $itemFilter;

  /**
   * @var SiteFilter|null
   */
  private ?SiteFilter $siteFilter;

  /**
   * @return ItemFilter|null
   */
  public function getItemFilter(): ?ItemFilter
  {
    return $this->itemFilter;
  }

  /**
   * @param ItemFilter|null $itemFilter
   * @return self
   */
  public function setItemFilter(?ItemFilter $itemFilter): self
  {
    $this->itemFilter = $itemFilter;
    return $this;
  }

  /**
   * @return SiteFilter|null
   */
  public function getSiteFilter(): ?SiteFilter
  {
    return $this->siteFilter;
  }

  /**
   * @param SiteFilter|null $siteFilter
   * @return self
   */
  public function setSiteFilter(?SiteFilter $siteFilter): self
  {
    $this->siteFilter = $siteFilter;
    return $this;
  }
}