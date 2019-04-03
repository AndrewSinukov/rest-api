<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 * @Hateoas\Relation("roles", href=@Hateoas\Route("get_movie_roles", parameters={"movie" = "expr(object.getId())"}))
 */
class Movie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank(groups={"Default"})
     * @Assert\Length(max=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="smallint")
     * @Assert\NotBlank(groups={"Default"})
     * @Assert\Range(min=1888, max=2020, groups={"Default", "Patch"})
     */
    private $year;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="smallint")
     * @Assert\NotBlank(groups={"Default"})
     * @Assert\Range(min=1, max=300, groups={"Default", "Patch"})
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     * @Assert\NotBlank(groups={"Default"})
     */
    private $description;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Role", mappedBy="movie", cascade={"remove"})
     * @Serializer\Exclude()
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param integer $year
     * @return $this
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param integer $time
     * @return $this
     */
    public function setTime($time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Collection
     */
    public function getRoles(): Collection
    {
        return $this->roles;
    }
}