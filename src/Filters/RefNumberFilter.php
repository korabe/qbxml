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
    private MatchCriterion $MatchCriterion;

    /**
     * @var string
     */
    private string $RefNumber;

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
    public function getRefNumber(): string
    {
        return $this->RefNumber;
    }

    /**
     * @param string $RefNumber
     * @return self
     */
    public function setRefNumber(string $RefNumber): self
    {
        $this->RefNumber = $RefNumber;
    }
}