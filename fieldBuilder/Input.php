<?php
/**
 * Created by PhpStorm.
 * User: mailis
 * Date: 01/09/17
 * Time: 19:28
 */
include 'FieldBuilder.php';
class Input extends FieldBuilder
{
    public function __construct()
    {
        $this->html = new DOMDocument('1.0', 'utf-8');
        $this->fieldGroupHtml = $this->html->createElement('div');
        $this->fieldGroupHtml->setAttribute('class', 'input-field col s6');
        $this->createField();
        $this->createLabel();
        $this->fieldGroupHtml->appendChild($this->fieldHtml);
        $this->fieldHtml->setAttribute('type', 'text');
        $this->fieldGroupHtml->appendChild($this->labelHtml);
    }

    /**
     * Create input DOMElement
     * @return $this
     */
    public function createField()
    {
        $this->fieldHtml = $this->html->createElement('input');
        return $this;
    }
    /**
     * Create label DOMElement
     * @return $this
     */
    public function createLabel()
    {
        $this->labelHtml = $this->html->createElement('label');

        return $this;
    }
    /**
     * Set input Id and name values
     * @param $id string
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->fieldHtml->setAttribute('id', $id);
        $this->fieldHtml->setAttribute('name', $id);

        $this->labelHtml->setAttribute('for', $id);

        return $this;
    }

}