<?php declare(strict_types=1);

namespace QBXML\Enums;

/**
 * Class MatchCriterion
 * @package QBXML\Enums
 */
class MatchCriterion
{
  public const STARTSWITH = 'StartsWith';
  public const CONTAINS = 'Contains';
  public const ENDSWITH = 'EndsWith';

  private $value;

  /**
   * MatchCriterion constructor.
   *
   * @param  string  $value
   */
  public function __construct(string $value)
  {
    $this->value = $value;
  }

  /**
   * @return static
   */
  public static function StartsWith(): self
  {
    return new static(self::STARTSWITH);
  }

  /**
   * @return static
   */
  public static function Contains(): self
  {
    return new static(self::CONTAINS);
  }

  /**
   * @return static
   */
  public static function EndsWith(): self
  {
    return new static(self::ENDSWITH);
  }

  /**
   * @return string
   */
  public function __toString(): string
  {
    return $this->value;
  }
}
