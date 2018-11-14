<?php

namespace App\Entity;

/**
 * Created by PhpStorm.
 * User: vdavid2
 * Date: 14/11/2018
 * Time: 12:01
 */

/**
 * @Entity @Table(name="boardgames")
 **/

class boardgame
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     **/
    protected $id;
    /**
     * @Column(type="string")
     **/
    protected $name;

    /**
     * @Column(type="string")
     **/
    protected $editor;

    /**
     * @Column(type="integer")
     **/
    protected $year;

    /**
     * @Column(type="datetime")
     **/
    protected $created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return boardgame
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return boardgame
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     * @return boardgame
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     * @return boardgame
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     * @return boardgame
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

}
