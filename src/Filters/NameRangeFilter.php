<?php declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Trait NameRangeFilter
 * @package QBXML\Filters
 */
trait NameRangeFilter
{
  /**
   * @var ?string
   */
  private ?string $FromName;

  /**
   * @var ?string
   */
  private ?string $ToName;

  /**
   * @return string|null
   */
  public function getFromName(): ?string
  {
    return $this->FromName;
  }

  /**
   * @param string|null $FromName
   * @return self
   */
  public function setFromName(?string $FromName): self
  {
    $this->FromName = $FromName;
    return $this;
  }


  /**
   * @return string|null
   */
  public function getToName(): ?string
  {
    return $this->ToName;
  }

  /**
   * @param string|null $ToName
   * @return  self
   */
  public function setToName(?string $ToName): self
  {
    $this->ToName = $ToName;
    return $this;
  }

}
