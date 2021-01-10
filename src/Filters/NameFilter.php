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
    private MatchCriterion $MatchCriterion ;

    /**
     * @var string
     */
    private string $Name;

    /**
     * @return MatchCriterion
     */
    public function getMatchCriterion(): MatchCriterion
    {
        return $this->MatchCriterion;
    }

    /**
     * @param MatchCriterion $MatchCriterion
     * @return self
     */
    public function setMatchCriterion(MatchCriterion $MatchCriterion): self
    {
        $this->MatchCriterion = $MatchCriterion;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return self
     */
    public function setName(string $Name): self
    {
        $this->Name = $Name;
    }
}
