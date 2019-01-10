<?php
namespace Drupal\dkan_dataset;
/**
 * Defines a Unit class.
 */
class Unit {
  private $length = 0;
  /**
   * @param int $length
   */
  public function setLength(int $length) {
    $this->length = $length;
  }
  /**
   * @return int
   *   The length of the unit.
   */
  public function getLength() {
    return $this->length;
  }
}
