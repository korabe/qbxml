<?php declare(strict_types=1);

namespace QBXML;

use Illuminate\Support\Collection;
use QBXML\Enums\OnError;
use QBXML\Queries\QueryInterface;

/**
 * Class Request
 * @package QBXML
 */
class Request
{
  private Collection $queries;
  private string $qbxmlVersion;
  private OnError $onError;

  /**
   * Request constructor
   *
   * @param Collection|null $queries
   * @param string $qbxmlVersion
   * @param OnError|null $onError
   */
  public function __construct(?Collection $queries = null,
                              string $qbxmlVersion = '13.0', ?OnError $onError = null)
  {
    $this->queries = $queries ?: new Collection();
    $this->qbxmlVersion = $qbxmlVersion;
    $this->onError = $onError ?: OnError::stopOnError();
  }

  /**
   * Add a query
   *
   * @param QueryInterface $query
   * @return $this
   */
  public function addQuery(QueryInterface $query): self
  {
    $key = $query->getName();
    if($this->queries->offsetExists($key)) {
      $query->merge($this->queries->offsetGet($key));
    }
    $this->queries->offsetSet($key, $query);
    return $this;
  }

  /**
   * Set the QBXML version
   *
   * @param string $version
   * @return $this
   * @throws \InvalidArgumentException
   */
  public function setQbxmlVersion(string $version): self
  {
    if (is_numeric($version) && (int)$version >= 1 && (int)$version <= 13) {
      $this->qbxmlVersion = $version;
    }
    throw new \InvalidArgumentException('Not a valid version of QBXML');
  }

  /**
   * Returns QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $qbxml = '';
    foreach ($this->queries as $query) {
      $qbxml .= (string)$query;
    }
    return '<?xml version="1.0" ?>'
      . "<?qbxml version=\"{$this->qbxmlVersion}\" ?>"
      . "<QBXML><QBXMLMsgsRq onError=\"{$this->onError}\">{$qbxml}</QBXMLMsgsRq></QBXML>";
  }
}
