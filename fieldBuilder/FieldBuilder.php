<?php
/**
 * Created by PhpStorm.
 * User: mailis
 * Date: 01/09/17
 * Time: 18:23
 */
class FieldBuilder {
    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var DOMDocument
     */
    public $html;

    /**
     * @var \DOMElement
     */
    public $fieldGroupHtml;

    /**
     * @var \DOMElement
     */
    public $fieldHtml;
    /**
     * @var \DOMElement
     */
    public $labelHtml;
    /**
     * @var \DOMElement
     */
    public $inputGroupHtml;

    /**
     * Set input Hidden and name values
     * @param $hidden string
     *
     * @return $this
     */
    public function hideField($hidden) {
        if ($hidden) {
            $this->fieldGroupHtml->setAttribute('class', 'input-field col s6 hiddendiv');
        }

        return $this;
    }
    /**
     * Set label text
     * @param $text string
     *
     * @return $this
     */
    public function setLabelText($text) {
        $this->labelHtml->nodeValue = $text;
        return $this;
    }

    /**
     * Set input Class and name values
     * @param $class string
     *
     * @return $this
     */
    public function setClass($class) {
        $this->fieldHtml->setAttribute('class', $class);

        return $this;
    }
    /**
     * Set input Type and name values
     * @param $type string
     *
     * @return $this
     */
    public function setType($type) {
        $this->fieldHtml->setAttribute('type', $type);

        return $this;
    }
    /**
     * Set input Required and name values
     * @param string
     *
     * @return $this
     */
    public function setRequired() {


        $this->fieldHtml->setAttribute('class', 'required');

        return $this;
    }
    /**
     * Echo whole input field html
     */
    public function render() {
        $this->html->appendChild($this->fieldGroupHtml);
        echo utf8_encode(html_entity_decode($this->html->saveHTML()));
    }

}