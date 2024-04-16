<?php
/**
 * Dates and Setup
 * 
 * PHP version 6
 * 
 * @category Class
 * @package  Src
 * @author   ArmandVan <exemple@mail.com>
 * @license  http://localhost canard
 * @link     localhost
 */

require_once "../src/Dates.php";

$objDate = new \UPJV\Dates();
echo $objDate->demain();
