<?php

namespace Plugin\DanhmucMetaSEO\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Category")
 */
trait DmucMetaSEOTrait {

    /**
     * @var string
     *
     * @ORM\Column(name="cseo_title", type="string", nullable=true)
     */
    private $cseo_title;

    /**
     * @var string
     *
     * @ORM\Column(name="cseo_description", type="string", nullable=true)
     */
    private $cseo_description;

    /**
     * @var string
     *
     * @ORM\Column(name="cseo_robots", type="string", nullable=true , options={"default" : "index,follow"})
     */
    private $cseo_robots;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cseo_keywords", type="string", nullable=true)
     */
    private $cseo_keywords;

    /**
     * @return string
     */
    public function getCseoTitle() {
        return $this->cseo_title;
    }

    /**
     * @param string $cseo_title
     */
    public function setCseoTitle($cseo_title) {
        $this->cseo_title = $cseo_title;
    }

    /**
     * @return string
     */
    public function getCseoDescription() {
        return $this->cseo_description;
    }

    /**
     * @param string $cseo_description
     */
    public function setCseoDescription($cseo_description) {
        $this->cseo_description = $cseo_description;
    }

    /**
     * @return boolean
     */
    public function getCseoRobots() {
        return $this->cseo_robots;
    }

    /**
     * @param boolean $cseo_robots
     */
    public function setCseoRobots($cseo_robots) {
        $this->cseo_robots = $cseo_robots;
    }

    /**
     * @return boolean
     */
    public function getCseoKeywords()
    {
        return $this->cseo_keywords;
    }

    /**
     * @param boolean $cseo_keywords
     */
    public function setCseoKeywords($cseo_keywords)
    {
        $this->cseo_keywords = $cseo_keywords;
    }
}
