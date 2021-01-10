<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\MatchCriterion;

/**
 * Trait RefNumberFilter
 * @package QBXML\Filters
 */
trait RefNumberFilter
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
}