<?php

namespace Jaztec\CmsBundle\Entity;

/**
 * ArticleCategory
 */
class ArticleCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var ArticleCategory
     */
    private $parent;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ArticleCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parent
     *
     * @param ArticleCategory $parent
     * @return ArticleCategory
     */
    public function setParent(ArticleCategory $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return ArticleCategory 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
