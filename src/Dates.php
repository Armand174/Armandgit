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
 * This doc determine what Dates do
 */
namespace UPJV;

/**
 * Dates and Setup
 * 
 * @category Class
 * @package  Src
 * @author   ArmandVan <exemple@mail.com>
 * @license  http://localhost canard
 * @link     localhost
 * @return   void
 * This doc determine what Dates do
 */

class Dates
{
    /**
     * Donne date
     * 
     * @return bool
     */
    public function demain()
    {
        $demain = new \DateTime();
        $demain->add(new \DateInterval('P1D'));
        $reponse = ['demain' => $demain->format(format:"d-m-Y")];
        return json_encode($reponse);
    }
}
