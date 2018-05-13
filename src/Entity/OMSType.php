<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 13-5-18
 * Time: 20:18
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="OMSType")
*/
class OMSType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $OMScontent;

    /**
     * @ORM\Column(type="string")
     */
    private $commentsAllowed;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getOMScontent()
    {
        return $this->OMScontent;
    }

    /**
     * @param mixed $OMScontent
     */
    public function setOMScontent($OMScontent): void
    {
        $this->OMScontent = $OMScontent;
    }

    /**
     * @return mixed
     */
    public function getCommentsAllowed()
    {
        return $this->commentsAllowed;
    }

    /**
     * @param mixed $commentsAllowed
     */
    public function setCommentsAllowed($commentsAllowed): void
    {
        $this->commentsAllowed = $commentsAllowed;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * @param mixed $postedAt
     */
    public function setPostedAt($postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }



}