<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class ItemSiteFilter
 * @package QBXML\Filters
 */
class ItemSiteFilter implements FilterInterface
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
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    // TODO: Implement __toString() method.
  }
}
