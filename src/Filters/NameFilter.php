<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\MatchCriterion;
use QBXML\Queries\FilterInterface;

/**
 * Class NameFilter
 * @package QBXML\Filters
 */
class NameFilter implements FilterInterface
{
  /**
   * @var MatchCriterion
   */
  private MatchCriterion $matchCriterion;

  /**
   * @var string
   */
  private string $name;

  public function __construct(MatchCriterion $matchCriterion, string $name)
  {
    $this->matchCriterion = $matchCriterion;
    $this->name = $name;
  }

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

  /**
   * @return string
   */
  public function __toString(): string
  {
    $qbxml = "<NameFilter>";
    $qbxml .= "<MatchCriterion>{$this->matchCriterion}</MatchCriterion>";
    $qbxml .= "<Name>{$this->name}</Name>";
    $qbxml .= "</NameFilter>";
    return $qbxml;
  }
}
