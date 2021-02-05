<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\MatchCriterion;
use QBXML\Queries\FilterInterface;

/**
 * Class RefNumberFilter
 * @package QBXML\Filters
 */
class RefNumberFilter implements FilterInterface
{
  /**
   * @var MatchCriterion
   */
  private MatchCriterion $matchCriterion;

  /**
   * @var string
   */
  private string $refNumber;

  /**
   * @return MatchCriterion
   */
  public function getMatchCriterion(): MatchCriterion
  {
    return $this->matchCriterion;
  }

  /**
   * @param MatchCriterion $matchCriterion
   * @return self
   */
  public function setMatchCriterion(MatchCriterion $matchCriterion): self
  {
    $this->matchCriterion = $matchCriterion;
    return $this;
  }

  /**
   * @return string
   */
  public function getRefNumber(): string
  {
    return $this->refNumber;
  }

  /**
   * @param string $refNumber
   * @return self
   */
  public function setRefNumber(string $refNumber): self
  {
    $this->refNumber = $refNumber;
    return $this;
  }
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['matchCriterion', 'refNumber'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
