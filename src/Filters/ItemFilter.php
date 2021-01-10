<?php declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Trait ItemFilter
 * @package QBXML\Filters
 */
trait ItemFilter
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
   * @var ?int
   */
  private ?int $listIDWithChildren;

  /**
   * @var ?string
   */
  private ?string $fullNameWithChildren;

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

  /**
   * @return int|null
   */
  public function getListIDWithChildren(): ?int
  {
    return $this->listIDWithChildren;
  }

  /**
   * @param int|null $listIDWithChildren
   * @return self
   */
  public function setListIDWithChildren(?int $listIDWithChildren): self
  {
    $this->listIDWithChildren = $listIDWithChildren;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getFullNameWithChildren(): ?string
  {
    return $this->fullNameWithChildren;
  }

  /**
   * @param string|null $fullNameWithChildren
   * @return self
   */
  public function setFullNameWithChildren(?string $fullNameWithChildren): self
  {
    $this->fullNameWithChildren = $fullNameWithChildren;
    return $this;
  }
}
