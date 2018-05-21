<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class CommentType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", nullable=false, length=255)
     */private $pcommentID;

    /**
     * @ORM\Column(type="string", nullable=false)
     */private $comment;

    /**
     * @ORM\Column(type="string", nullable=false)
     */private $postID;

    /**
     * @return mixed
     */
    public function getPcommentID()
    {
        return $this->pcommentID;
    }

    /**
     * @param mixed $pcommentID
     */
    public function setPcommentID($pcommentID): void
    {
        $this->pcommentID = $pcommentID;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getPostID()
    {
        return $this->postID;
    }

    /**
     * @param mixed $postID
     */
    public function setPostID($postID): void
    {
        $this->postID = $postID;
    }


}