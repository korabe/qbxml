<?php declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Trait ItemInventoryAssemblyRef
 * @package QBXML\Filters
 */
trait ItemInventoryAssemblyRef
{
  /**
   * @var ?int
   */
  private ?int $listID;

  /**
   * @var ?string
   */
  private ?string $fullName;

  /**
   * @return int|null
   */
  public function getListID(): ?int
  {
    return $this->listID;
  }

  /**
   * @param int|null $listID
   * @return self
   */
  public function setListID(?int $listID): self
  {
    $this->listID = $listID;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getFullName(): ?string
  {
    return $this->fullName;
  }

  /**
   * @param string|null $fullName
   * @return self
   */
  public function setFullName(?string $fullName): self
  {
    $this->fullName = $fullName;
    return $this;
  }
}