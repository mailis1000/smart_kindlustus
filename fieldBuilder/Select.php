<?php
/**
 * Created by PhpStorm.
 * User: mailis
 * Date: 01/09/17
 * Time: 19:34
 */

class Select extends FieldBuilder {

    public function __construct() {
        $this->html = new DOMDocument('1.0', 'utf-8');
        $this->fieldGroupHtml = $this->html->createElement('div');
        $this->fieldGroupHtml->setAttribute('class', 'input-field col s6');
        $this->createSelect();
        $this->fieldGroupHtml->appendChild($this->fieldHtml);
    }

    /**
     * Create select DOMElement
     * @return $this
     */
    public function createSelect() {
        $this->fieldHtml = $this->html->createElement('select');
        return $this;
    }

    /**
     * Set input Id and name values
     * @param $id string
     *
     * @return $this
     */
    public function setId($id) {
        $this->fieldHtml->setAttribute('id', $id);
        $this->fieldHtml->setAttribute('name', $id);

        return $this;
    }

    /**
     * Set input Options and name values
     * @param $options string
     *
     * @return $this
     */
    public function setOptions($options, $label) {
        $option = $this->html->createElement('option', $label);
        $option->setAttribute('disabled', true);
        $option->setAttribute('selected', true);
        $this->fieldHtml->appendChild($option);
        foreach ($options as $key => $value) {
            $option = $this->html->createElement('option', $value);
            $option->setAttribute('value', $key);
            $this->fieldHtml->appendChild($option);
        }
        return $this;
    }

}