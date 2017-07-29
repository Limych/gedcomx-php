<?php
/**
 *
 *
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx;
use Gedcomx\Agent\Agent;
use Gedcomx\Common\Attribution;
use Gedcomx\Conclusion\Document;
use Gedcomx\Conclusion\Event;
use Gedcomx\Conclusion\Person;
use Gedcomx\Conclusion\PlaceDescription;
use Gedcomx\Conclusion\Relationship;
use Gedcomx\Links\HypermediaEnabledData;
use Gedcomx\Records\Collection;
use Gedcomx\Records\Field;
use Gedcomx\Records\RecordDescriptor;
use Gedcomx\Rt\GedcomxModelVisitor;
use Gedcomx\Source\SourceDescription;

/**
 * <p>The GEDCOM X data formats define the serialization formats of the GEDCOM X conceptual model. The canonical documentation
     * is provided by the formal specification documents:</p>
     *
     * <ul>
     * <li><a href="https://github.com/FamilySearch/gedcomx/blob/master/specifications/conceptual-model-specification.md">The GEDCOM X Conceptual Model, Version 1.0</a></li>
     * <li><a href="https://github.com/FamilySearch/gedcomx/blob/master/specifications/json-format-specification.md">The GEDCOM X JSON Format, Version 1.0</a></li>
     * <li><a href="https://github.com/FamilySearch/gedcomx/blob/master/specifications/xml-format-specification.md">The GEDCOM X XML Format, Version 1.0</a></li>
     * </ul>
     *
     * <p>This documentation is provided as a non-normative reference guide.</p>
 */
class Gedcomx extends HypermediaEnabledData
{
    const JSON_APPLICATION_TYPE = 'application/json';
    const HTML_TYPE = 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
    const FORM_DATA_TYPE = 'application/x-www-form-urlencoded';
    const XML_MEDIA_TYPE = 'application/x-gedcomx-v1+xml';
    const ATOM_XML_MEDIA_TYPE = 'application/x-gedcomx-atom+json';
    const JSON_MEDIA_TYPE = 'application/x-gedcomx-v1+json';
    const ATOM_JSON_MEDIA_TYPE = 'application/x-gedcomx-atom+json';
    const LD_JSON_TYPE = 'application/ld+json';
    const PLAIN_TEXT = 'text/plain';
    /**
     * The language of the genealogical data.
     *
     * @var string
     */
    private $lang;

    /**
     * A reference to a description of this data set.
     *
     * @var string
     */
    private $descriptionRef;

    /**
     * A reference to the profile that describes this data set.
     *
     * @var string
     */
    private $profile;

    /**
     * The attribution of this genealogical data.
     *
     * @var Attribution
     */
    private $attribution;

    /**
     * The persons included in this genealogical data set.
     *
     * @var Person[]
     */
    private $persons;

    /**
     * The relationships included in this genealogical data set.
     *
     * @var Relationship[]
     */
    private $relationships;

    /**
     * The descriptions of sources included in this genealogical data set.
     *
     * @var SourceDescription[]
     */
    private $sourceDescriptions;

    /**
     * The agents included in this genealogical data set.
     *
     * @var Agent[]
     */
    private $agents;

    /**
     * The events included in this genealogical data set.
     *
     * @var Event[]
     */
    private $events;

    /**
     * The places included in this genealogical data set.
     *
     * @var PlaceDescription[]
     */
    private $places;

    /**
     * The documents included in this genealogical data set.
     *
     * @var Document[]
     */
    private $documents;

    /**
     * The collections included in this genealogical data set.
     *
     * @var Collection[]
     */
    private $collections;

    /**
     * The extracted fields included in this genealogical data set.
     *
     * @var Field[]
     */
    private $fields;

    /**
     * The record descriptors included in this genealogical data set.
     *
     * @var RecordDescriptor[]
     */
    private $recordDescriptors;

    /**
     * Constructs a Gedcomx from a (parsed) JSON hash
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
     * The language of the genealogical data.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * The language of the genealogical data.
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    /**
     * A reference to a description of this data set.
     *
     * @return string
     */
    public function getDescriptionRef()
    {
        return $this->descriptionRef;
    }

    /**
     * A reference to a description of this data set.
     *
     * @param string $descriptionRef
     */
    public function setDescriptionRef($descriptionRef)
    {
        $this->descriptionRef = $descriptionRef;
    }
    /**
     * A reference to the profile that describes this data set.
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A reference to the profile that describes this data set.
     *
     * @param string $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }
    /**
     * The attribution of this genealogical data.
     *
     * @return Attribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * The attribution of this genealogical data.
     *
     * @param Attribution $attribution
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * The persons included in this genealogical data set.
     *
     * @return Person[]
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * The persons included in this genealogical data set.
     *
     * @param Person[] $persons
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }
    /**
     * The relationships included in this genealogical data set.
     *
     * @return \Gedcomx\Conclusion\Relationship[]
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * The relationships included in this genealogical data set.
     *
     * @param Relationship[] $relationships
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;
    }
    /**
     * The descriptions of sources included in this genealogical data set.
     *
     * @return SourceDescription[]
     */
    public function getSourceDescriptions()
    {
        return $this->sourceDescriptions;
    }

    /**
     * The descriptions of sources included in this genealogical data set.
     *
     * @param SourceDescription[] $sourceDescriptions
     */
    public function setSourceDescriptions($sourceDescriptions)
    {
        $this->sourceDescriptions = $sourceDescriptions;
    }
    /**
     * The agents included in this genealogical data set.
     *
     * @return Agent[]
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * The agents included in this genealogical data set.
     *
     * @param Agent[] $agents
     */
    public function setAgents($agents)
    {
        $this->agents = $agents;
    }
    /**
     * The events included in this genealogical data set.
     *
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * The events included in this genealogical data set.
     *
     * @param Event[] $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }
    /**
     * The places included in this genealogical data set.
     *
     * @return PlaceDescription[]
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * The places included in this genealogical data set.
     *
     * @param PlaceDescription[] $places
     */
    public function setPlaces($places)
    {
        $this->places = $places;
    }
    /**
     * The documents included in this genealogical data set.
     *
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * The documents included in this genealogical data set.
     *
     * @param Document[] $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }
    /**
     * The collections included in this genealogical data set.
     *
     * @return Collection[]
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * The collections included in this genealogical data set.
     *
     * @param Collection[] $collections
     */
    public function setCollections($collections)
    {
        $this->collections = $collections;
    }
    /**
     * The extracted fields included in this genealogical data set.
     *
     * @return Field[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The extracted fields included in this genealogical data set.
     *
     * @param Field[] $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    /**
     * The record descriptors included in this genealogical data set.
     *
     * @return RecordDescriptor[]
     */
    public function getRecordDescriptors()
    {
        return $this->recordDescriptors;
    }

    /**
     * The record descriptors included in this genealogical data set.
     *
     * @param RecordDescriptor[] $recordDescriptors
     */
    public function setRecordDescriptors($recordDescriptors)
    {
        $this->recordDescriptors = $recordDescriptors;
    }
    /**
     * Returns the associative array for this Gedcomx
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->lang) {
            $a["lang"] = $this->lang;
        }
        if ($this->descriptionRef) {
            $a["description"] = $this->descriptionRef;
        }
        if ($this->profile) {
            $a["profile"] = $this->profile;
        }
        if ($this->attribution) {
            $a["attribution"] = $this->attribution->toArray();
        }
        if ($this->persons) {
            $ab = array();
            foreach ($this->persons as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['persons'] = $ab;
        }
        if ($this->relationships) {
            $ab = array();
            foreach ($this->relationships as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['relationships'] = $ab;
        }
        if ($this->sourceDescriptions) {
            $ab = array();
            foreach ($this->sourceDescriptions as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['sourceDescriptions'] = $ab;
        }
        if ($this->agents) {
            $ab = array();
            foreach ($this->agents as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['agents'] = $ab;
        }
        if ($this->events) {
            $ab = array();
            foreach ($this->events as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['events'] = $ab;
        }
        if ($this->places) {
            $ab = array();
            foreach ($this->places as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['places'] = $ab;
        }
        if ($this->documents) {
            $ab = array();
            foreach ($this->documents as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['documents'] = $ab;
        }
        if ($this->collections) {
            $ab = array();
            foreach ($this->collections as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['collections'] = $ab;
        }
        if ($this->fields) {
            $ab = array();
            foreach ($this->fields as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['fields'] = $ab;
        }
        if ($this->recordDescriptors) {
            $ab = array();
            foreach ($this->recordDescriptors as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['recordDescriptors'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Gedcomx from an associative array
     *
     * @param array $o
     */
    public function initFromArray(array $o)
    {
        if (isset($o['lang'])) {
            $this->lang = $o["lang"];
            unset($o['lang']);
        }
        if (isset($o['description'])) {
            $this->descriptionRef = $o["description"];
            unset($o['description']);
        }
        if (isset($o['profile'])) {
            $this->profile = $o["profile"];
            unset($o['profile']);
        }
        if (isset($o['attribution'])) {
            $this->attribution = new Attribution($o["attribution"]);
            unset($o['attribution']);
        }
        $this->persons = array();
        if (isset($o['persons'])) {
            foreach ($o['persons'] as $i => $x) {
                $this->persons[$i] = new Person($x);
            }
            unset($o['persons']);
        }
        $this->relationships = array();
        if (isset($o['relationships'])) {
            foreach ($o['relationships'] as $i => $x) {
                $this->relationships[$i] = new Relationship($x);
            }
            unset($o['relationships']);
        }
        $this->sourceDescriptions = array();
        if (isset($o['sourceDescriptions'])) {
            foreach ($o['sourceDescriptions'] as $i => $x) {
                $this->sourceDescriptions[$i] = new SourceDescription($x);
            }
            unset($o['sourceDescriptions']);
        }
        $this->agents = array();
        if (isset($o['agents'])) {
            foreach ($o['agents'] as $i => $x) {
                $this->agents[$i] = new Agent($x);
            }
            unset($o['agents']);
        }
        $this->events = array();
        if (isset($o['events'])) {
            foreach ($o['events'] as $i => $x) {
                $this->events[$i] = new Event($x);
            }
            unset($o['events']);
        }
        $this->places = array();
        if (isset($o['places'])) {
            foreach ($o['places'] as $i => $x) {
                $this->places[$i] = new PlaceDescription($x);
            }
            unset($o['places']);
        }
        $this->documents = array();
        if (isset($o['documents'])) {
            foreach ($o['documents'] as $i => $x) {
                $this->documents[$i] = new Document($x);
            }
            unset($o['documents']);
        }
        $this->collections = array();
        if (isset($o['collections'])) {
            foreach ($o['collections'] as $i => $x) {
                $this->collections[$i] = new Collection($x);
            }
            unset($o['collections']);
        }
        $this->fields = array();
        if (isset($o['fields'])) {
            foreach ($o['fields'] as $i => $x) {
                $this->fields[$i] = new Field($x);
            }
            unset($o['fields']);
        }
        $this->recordDescriptors = array();
        if (isset($o['recordDescriptors'])) {
            foreach ($o['recordDescriptors'] as $i => $x) {
                $this->recordDescriptors[$i] = new RecordDescriptor($x);
            }
            unset($o['recordDescriptors']);
        }
        parent::initFromArray($o);
    }

    /**
     * Accept a visitor.
     *
     * @param \Gedcomx\Rt\GedcomxModelVisitor $visitor
     */
    public function accept(GedcomxModelVisitor $visitor)
    {
        $visitor->visitGedcomx($this);
    }

    /**
     * Sets a known child element of Gedcomx from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement(\XMLReader $xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'attribution') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Attribution($xml);
            $this->attribution = $child;
            $happened = true;
        }
        else if (($xml->localName == 'person') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Person($xml);
            if (!isset($this->persons)) {
                $this->persons = array();
            }
            array_push($this->persons, $child);
            $happened = true;
        }
        else if (($xml->localName == 'relationship') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Relationship($xml);
            if (!isset($this->relationships)) {
                $this->relationships = array();
            }
            array_push($this->relationships, $child);
            $happened = true;
        }
        else if (($xml->localName == 'sourceDescription') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new SourceDescription($xml);
            if (!isset($this->sourceDescriptions)) {
                $this->sourceDescriptions = array();
            }
            array_push($this->sourceDescriptions, $child);
            $happened = true;
        }
        else if (($xml->localName == 'agent') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Agent($xml);
            if (!isset($this->agents)) {
                $this->agents = array();
            }
            array_push($this->agents, $child);
            $happened = true;
        }
        else if (($xml->localName == 'event') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Event($xml);
            if (!isset($this->events)) {
                $this->events = array();
            }
            array_push($this->events, $child);
            $happened = true;
        }
        else if (($xml->localName == 'place') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new PlaceDescription($xml);
            if (!isset($this->places)) {
                $this->places = array();
            }
            array_push($this->places, $child);
            $happened = true;
        }
        else if (($xml->localName == 'document') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Document($xml);
            if (!isset($this->documents)) {
                $this->documents = array();
            }
            array_push($this->documents, $child);
            $happened = true;
        }
        else if (($xml->localName == 'collection') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Collection($xml);
            if (!isset($this->collections)) {
                $this->collections = array();
            }
            array_push($this->collections, $child);
            $happened = true;
        }
        else if (($xml->localName == 'field') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Field($xml);
            if (!isset($this->fields)) {
                $this->fields = array();
            }
            array_push($this->fields, $child);
            $happened = true;
        }
        else if (($xml->localName == 'recordDescriptor') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new RecordDescriptor($xml);
            if (!isset($this->recordDescriptors)) {
                $this->recordDescriptors = array();
            }
            array_push($this->recordDescriptors, $child);
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of Gedcomx from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute(\XMLReader $xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }
        else if (($xml->localName == 'lang') && ($xml->namespaceURI == 'http://www.w3.org/XML/1998/namespace')) {
            $this->lang = $xml->value;
            return true;
        }
        else if (($xml->localName == 'description') && (empty($xml->namespaceURI))) {
            $this->descriptionRef = $xml->value;
            return true;
        }
        else if (($xml->localName == 'profile') && (empty($xml->namespaceURI))) {
            $this->profile = $xml->value;
            return true;
        }

        return false;
    }

    /**
     * Writes this Gedcomx to an XML writer.
     *
     * @param \XMLWriter $writer The XML writer.
     * @param bool $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml(\XMLWriter $writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'gedcomx', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
            $writer->writeAttributeNs('xmlns', 'xml', null, 'http://www.w3.org/XML/1998/namespace');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this Gedcomx to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents(\XMLWriter $writer)
    {
        if ($this->lang) {
            $writer->writeAttribute('xml:lang', $this->lang);
        }
        if ($this->descriptionRef) {
            $writer->writeAttribute('description', $this->descriptionRef);
        }
        if ($this->profile) {
            $writer->writeAttribute('profile', $this->profile);
        }
        parent::writeXmlContents($writer);
        if ($this->attribution) {
            $writer->startElementNs('gx', 'attribution', null);
            $this->attribution->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->persons) {
            foreach ($this->persons as $i => $x) {
                $writer->startElementNs('gx', 'person', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->relationships) {
            foreach ($this->relationships as $i => $x) {
                $writer->startElementNs('gx', 'relationship', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->sourceDescriptions) {
            foreach ($this->sourceDescriptions as $i => $x) {
                $writer->startElementNs('gx', 'sourceDescription', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->agents) {
            foreach ($this->agents as $i => $x) {
                $writer->startElementNs('gx', 'agent', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->events) {
            foreach ($this->events as $i => $x) {
                $writer->startElementNs('gx', 'event', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->places) {
            foreach ($this->places as $i => $x) {
                $writer->startElementNs('gx', 'place', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->documents) {
            foreach ($this->documents as $i => $x) {
                $writer->startElementNs('gx', 'document', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->collections) {
            foreach ($this->collections as $i => $x) {
                $writer->startElementNs('gx', 'collection', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->fields) {
            foreach ($this->fields as $i => $x) {
                $writer->startElementNs('gx', 'field', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->recordDescriptors) {
            foreach ($this->recordDescriptors as $i => $x) {
                $writer->startElementNs('gx', 'recordDescriptor', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
    }

    /**
     * Add a person to the data set.
     *
     * @param \Gedcomx\Conclusion\Person $person The person to be added.
     */
    public function addPerson(Person $person) {
        if ($person !== null) {
            if ($this->persons === null){
                $this->persons = array();
            }
            $this->persons[]  = $person;
        }
    }

    /**
     * Add a source description to the data set.
     *
     * @param \Gedcomx\Source\SourceDescription $sourceDescription
     */
    public function addSourceDescription(SourceDescription $sourceDescription) {
        if ($sourceDescription != null) {
            $this->sourceDescriptions[] = $sourceDescription;
        }
    }

    /**
     * Add a relationship to the data set.
     *
     * @param \Gedcomx\Conclusion\Relationship $relationship The relationship to be added.
     */
    public function addRelationship( Relationship $relationship ) {
        if ($relationship != null) {
            if ($this->relationships == null) {
                $this->relationships = array();
            }
            $this->relationships[] = $relationship;
        }
    }

    /**
     * Add a event to the data set.
     *
     * @param \Gedcomx\Conclusion\Event $event The event to be added.
     */
    public function addEvent(Event $event) {
        if ($event !== null) {
            if ($this->events === null){
                $this->events = array();
            }
            $this->events[]  = $event;
        }
    }

    /**
     * Add a agent to the data set.
     *
     * @param \Gedcomx\Agent\Agent $document The agent to be added.
     */
    public function addAgent(Agent $agent) {
        if ($agent !== null) {
            if ($this->agents === null){
                $this->agents = array();
            }
            $this->agents[]  = $agent;
        }
    }

    /**
     * Add a document to the data set.
     *
     * @param Document $agent The document to be added.
     */
    public function addDocument(Document $document) {
        if ($document !== null) {
            if ($this->documents === null){
                $this->documents = array();
            }
            $this->documents[]  = $document;
        }
    }

    /**
     * Add a place to the data set.
     *
     * @param \Gedcomx\Conclusion\PlaceDescription $place The place to be added.
     */
    public function addPlace(PlaceDescription $place) {
        if ($place !== null) {
            if ($this->places === null){
                $this->places = array();
            }
            $this->places[]  = $place;
        }
    }

    /**
     * Add a collection to the data set.
     *
     * @param Collection $collection The collection to be added.
     */
    public function addCollection(Collection $collection) {
        if ($collection !== null) {
            if ($this->collections === null){
                $this->collections = array();
            }
            $this->collections[]  = $collection;
        }
    }

    /**
     * Add a record descriptor to the data set.
     *
     * @param RecordDescriptor $recordDescriptor The record descriptor to be added.
     */
    public function addRecordDescriptor(RecordDescriptor $recordDescriptor) {
        if ($recordDescriptor !== null) {
            if ($this->recordDescriptors === null){
                $this->recordDescriptors = array();
            }
            $this->recordDescriptors[]  = $recordDescriptor;
        }
    }

    /**
     * Add a field to the data set.
     *
     * @param Field $field The field to be added.
     */
    public function addField(Field $field) {
        if ($field !== null) {
            if ($this->fields === null){
                $this->fields = array();
            }
            $this->fields[]  = $field;
        }
    }

    /**
     * {@inheritDoc}
     * @see \Gedcomx\Common\ExtensibleData::embed()
     */
    public function embed($source)
    {
        parent::embed($source);

        /** @var self $source */

        $links = $source->getLinks();
        if ($links != null) {
            foreach ($links as $link) {
                $found = false;
                if ($link->getRel() != null && $this->getLinks() != null) {
                    foreach ($this->getLinks() as $target) {
                        if ($link->getRel() == $target->getRel()) {
                            $found = true;
                            break;
                        }
                    }
                }
                if (!$found) {
                    $this->addLink($link);
                }
            }
        }

        $persons = $source->getPersons();
        if ($persons != null) {
            foreach ($persons as $person) {
                $found = false;
                if ($person->getId() != null && $this->getPersons() != null) {
                    foreach ($this->getPersons() as $target) {
                        if ($person->getId() == $target->getId()) {
                            $target->embed($person);
                            $found = true;
                            break;
                        }
                    }
                }
                if (!$found) {
                    $this->addPerson($person);
                }
            }
        }

        $relationships = $source->getRelationships();
        if ($relationships != null) {
            foreach ($relationships as $relationship) {
                $found = false;
                if ($relationship->getId() != null && $this->getRelationships() != null) {
                    foreach ($this->getRelationships() as $target) {
                        if ($relationship->getId() == $target->getId()) {
                            $target->embed($relationship);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addRelationship($relationship);
                }
            }
        }

        $sourceDescriptions = $source->getSourceDescriptions();
        if ($sourceDescriptions != null) {
            foreach ($sourceDescriptions as $sourceDescription) {
                $found = false;
                if ($sourceDescription->getId() != null && $this->getSourceDescriptions() != null) {
                    foreach ($this->getSourceDescriptions() as $target) {
                        if ($sourceDescription->getId() == $target->getId()) {
                            $target->embed($sourceDescription);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addSourceDescription($sourceDescription);
                }
            }
        }

        $agents = $source->getAgents();
        if ($agents != null) {
            foreach ($agents as $agent) {
                $found = false;
                if ($agent->getId() != null && $this->getAgents() != null) {
                    foreach ($this->getAgents() as $target) {
                        if ($agent->getId() == $target->getId()) {
                            $target->embed($agent);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addAgent($agent);
                }
            }
        }

        $events = $source->getEvents();
        if ($events != null) {
            foreach ($events as $event) {
                $found = false;
                if ($event->getId() != null && $this->getEvents() != null) {
                    foreach ($this->getEvents() as $target) {
                        if ($event->getId() == $target->getId()) {
                            $target->embed($event);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addEvent(event);
                }
            }
        }

        $placeDescriptions = $source->getPlaces();
        if ($placeDescriptions != null) {
            foreach ($placeDescriptions as $placeDescription) {
                $found = false;
                if ($placeDescription->getId() != null && $this->getPlaces() != null) {
                    foreach ($this->getPlaces() as $target) {
                        if ($placeDescription->getId() == $target->getId()) {
                            $target->embed($placeDescription);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addPlace($placeDescription);
                }
            }
        }

        $documents = $source->getDocuments();
        if ($documents != null) {
            foreach ($documents  as $document) {
                $found = false;
                if ($document->getId() != null && $this->getDocuments() != null) {
                    foreach ($this->getDocuments() as $target) {
                        if ($document.getId() == $target->getId()) {
                            $target->embed($document);
                            $found = true;
                            break;
                        }
                    }
                }
                if (!$found) {
                    $this->addDocument($document);
                }
            }
        }

        $collections = $source->getCollections();
        if ($collections != null) {
            foreach ($collections as $collection) {
                $found = false;
                if ($collection->getId() != null && $this->getCollections() != null) {
                    foreach ($this->getCollections() as $target) {
                        if ($collection->getId() == $target->getId()) {
                            $target->embed($collection);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addCollection($collection);
                }
            }
        }

        $fields = $source->getFields();
        if ($fields != null) {
            foreach ($fields as $field) {
                $found = false;
                if ($field->getId() != null && $this->getFields() != null) {
                    foreach ($this->getFields() as $target) {
                        if ($field->getId() == $target->getId()) {
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addField($field);
                }
            }
        }

        $recordDescriptors = $source->getRecordDescriptors();
        if ($recordDescriptors != null) {
            foreach ($recordDescriptors as $recordDescriptor) {
                $found = false;
                if ($recordDescriptor->getId() != null && $this->getRecordDescriptors() != null) {
                    foreach ($this->getRecordDescriptors() as $target) {
                        if ($recordDescriptor.getId() == $target->getId()) {
                            $target->embed($recordDescriptor);
                            $found = true;
                            break;
                        }
                    }
                }
                if (! $found) {
                    $this->addRecordDescriptor(recordDescriptor);
                }
            }
        }
    }
}
