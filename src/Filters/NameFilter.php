<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\MatchCriterion;

/**
 * Trait NameFilter
 * @package QBXML\Filters
 */
trait NameFilter
{
  /**
   * @var MatchCriterion
   */
  private MatchCriterion $matchCriterion;

  /**
   * @var string
   */
  private string $name;

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
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return self
   */
  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }
}
