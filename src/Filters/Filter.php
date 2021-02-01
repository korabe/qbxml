<?php declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Class Filter
 * @package QBXML\Filters
 */
abstract class Filter
{
  private string $elementName;

  /**
   * Filter constructor
   * @param string $elementName
   */
  public function __construct(string $elementName)
  {
    $this->elementName = $elementName;
  }

  /**
   * @param string ...$properties
   * @return string
   */
  protected function toXml(string ...$properties): string
  {
    $qbxml = "<{$this->elementName}>";
    foreach ($properties as $property) {
      if (isset($this->$property)) {
        $tag = $this->getTagName($property);
        if (is_iterable($this->$property)) {
          foreach ($this->$property as $value) {
            $qbxml .= "<{$tag}>{$value}</{$tag}>";
          }
        } else {
          $qbxml .= "<{$tag}>{$this->$property}</${$tag}>";
        }
      }
    }
    $qbxml .= "</{$this->elementName}>";
    return $qbxml;
  }

  protected function getTagName(string $name): string
  {
    if ($name === 'listId') {
      return 'ListID';
    }
    return ucfirst($name);
  }
}
