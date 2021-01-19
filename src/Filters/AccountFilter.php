<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class AccountFilter
 * @package QBXML\Filters
 */
class AccountFilter implements FilterInterface
{
  protected array $listId = [];
  protected array $fullName = [];
  protected string $listIdWithChildren = '';
  protected string $fullNameWithChildren = '';
  
  /**
   * AccountFilter constructor
   */
  public function __construct()
  {
    parent::__construct('AccountFilter');
  }

  /**
   * @return array
   */
  public function getListId(): array
  {
    return $this->listId;
  }

  /**
   * @param array<string> $listId
   * @return self
   */
  public function setListId(array $listId): self
  {
    $this->listId = $listId;
    return $this;
  }

  /**
   * @return array<string>
   */
  public function getFullName(): array
  {
    return $this->fullName;
  }

  /**
   * @param array<string> $fullName
   * @return self
   */
  public function setFullName(array $fullName): self
  {
    $this->fullName = $fullName;
    return $this;
  }

  /**
   * @return string
   */
  public function getListIdWithChildren(): string
  {
    return $this->listIdWithChildren;
  }

  /**
   * @param string $listIdWithChildren
   * @return self
   */
  public function setListIdWithChildren(string $listIdWithChildren): self
  {
    $this->listIdWithChildren = $listIdWithChildren;
    return $this;
  }

  /**
   * @return string
   */
  public function getFullNameWithChildren(): string
  {
    return $this->fullNameWithChildren;
  }

  /**
   * @param string $fullNameWithChildren
   * @return self
   */
  public function setFullNameWithChildren(string $fullNameWithChildren): self
  {
    $this->fullNameWithChildren = $fullNameWithChildren;
    return $this;
  }
  
  /**
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['listId', 'fullName', 'listIdWithChildren', 'fullNameWithChildren'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}

