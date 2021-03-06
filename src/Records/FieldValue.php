<?php
/**
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 */

namespace Gedcomx\Records;

use Gedcomx\Conclusion\Conclusion;
use Gedcomx\Rt\GedcomxModelVisitor;

/**
 * An element representing a value in a record field.
 */
class FieldValue extends Conclusion
{

    /**
     * URI that resolves to the value of the field.
     *
     * @var string
     */
    private $resource;

    /**
     * The datatype of the text value of the field.
     *
     * @var string
     */
    private $datatype;

    /**
     * The type of the field value.
     *
     * @var string
     */
    private $type;

    /**
     * The id of the label applicable to this field value.
     *
     * @var string
     */
    private $labelId;

    /**
     * The text value.
     *
     * @var string
     */
    private $text;

    /**
     * Constructs a FieldValue from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     *
     * @throws \Exception
     */
    public function __construct($o = null)
    {
        if (is_array($o)) {
            $this->initFromArray($o);
        }
        else if ($o instanceof \XMLReader) {
            $success = true;
            while ($success && $o->nodeType != \XMLReader::ELEMENT) {
                $success = $o->read();
            }
            if ($o->nodeType != \XMLReader::ELEMENT) {
                throw new \Exception("Unable to read XML: no start element found.");
            }

            $this->initFromReader($o);
        }
    }

    /**
     * URI that resolves to the value of the field.
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * URI that resolves to the value of the field.
     *
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
    /**
     * The datatype of the text value of the field.
     *
     * @return string
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * The datatype of the text value of the field.
     *
     * @param string $datatype
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
    }
    /**
     * The type of the field value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the field value.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * The id of the label applicable to this field value.
     *
     * @return string
     */
    public function getLabelId()
    {
        return $this->labelId;
    }

    /**
     * The id of the label applicable to this field value.
     *
     * @param string $labelId
     */
    public function setLabelId($labelId)
    {
        $this->labelId = $labelId;
    }
    /**
     * The text value.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The text value.
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    /**
     * Returns the associative array for this FieldValue
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->resource) {
            $a["resource"] = $this->resource;
        }
        if ($this->datatype) {
            $a["datatype"] = $this->datatype;
        }
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->labelId) {
            $a["labelId"] = $this->labelId;
        }
        if ($this->text) {
            $a["text"] = $this->text;
        }
        return $a;
    }


    /**
     * Initializes this FieldValue from an associative array
     *
     * @param array $o
     */
    public function initFromArray(array $o)
    {
        if (isset($o['resource'])) {
            $this->resource = $o["resource"];
            unset($o["resource"]);
        }
        if (isset($o['datatype'])) {
            $this->datatype = $o["datatype"];
            unset($o["datatype"]);
        }
        if (isset($o['type'])) {
            $this->type = $o["type"];
            unset($o["type"]);
        }
        if (isset($o['labelId'])) {
            $this->labelId = $o["labelId"];
            unset($o["labelId"]);
        }
        if (isset($o['text'])) {
            $this->text = $o["text"];
            unset($o["text"]);
        }
        parent::initFromArray($o);
    }

    /**
     * @param \Gedcomx\Rt\GedcomxModelVisitor $visitor
     */
    public function accept(GedcomxModelVisitor $visitor)
    {
        $visitor->visitFieldValue($this);
    }

    /**
     * Sets a known child element of FieldValue from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement(\XMLReader $xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'text') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->text = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of FieldValue from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute(\XMLReader $xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }
        else if (($xml->localName == 'resource') && (empty($xml->namespaceURI))) {
            $this->resource = $xml->value;
            return true;
        }
        else if (($xml->localName == 'datatype') && (empty($xml->namespaceURI))) {
            $this->datatype = $xml->value;
            return true;
        }
        else if (($xml->localName == 'type') && (empty($xml->namespaceURI))) {
            $this->type = $xml->value;
            return true;
        }
        else if (($xml->localName == 'labelId') && (empty($xml->namespaceURI))) {
            $this->labelId = $xml->value;
            return true;
        }

        return false;
    }

    /**
     * Writes the contents of this FieldValue to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents(\XMLWriter $writer)
    {
        if ($this->resource) {
            $writer->writeAttribute('resource', $this->resource);
        }
        if ($this->datatype) {
            $writer->writeAttribute('datatype', $this->datatype);
        }
        if ($this->type) {
            $writer->writeAttribute('type', $this->type);
        }
        if ($this->labelId) {
            $writer->writeAttribute('labelId', $this->labelId);
        }
        parent::writeXmlContents($writer);
        if ($this->text) {
            $writer->startElementNs('gx', 'text', null);
            $writer->text($this->text);
            $writer->endElement();
        }
    }
}
