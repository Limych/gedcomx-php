<?php
/**
 *
 *
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Source;

use Gedcomx\Common\Attribution;
use Gedcomx\Common\Note;
use Gedcomx\Common\ResourceReference;
use Gedcomx\Common\TextValue;
use Gedcomx\Conclusion\Identifier;
use Gedcomx\Links\HypermediaEnabledData;
use Gedcomx\Records\Field;
use Gedcomx\Rt\GedcomxModelVisitor;
use Gedcomx\Common\Attributable;

/**
 * Represents a description of a source.
 */
class SourceDescription extends HypermediaEnabledData implements Attributable
{
    /**
     * The URI (if applicable) of the actual source.
     *
     * @var string
     */
    private $about;

    /**
     * Hint about the media (MIME) type of the resource being described.
     *
     * @var string
     */
    private $mediaType;

    /**
     * The type of the resource being described.
     *
     * @var string
     */
    private $resourceType;

    /**
     * The bibliographic citations for this source.
     *
     * @var \Gedcomx\Source\SourceCitation[]
     */
    private $citations;

    /**
     * A reference to the entity that mediates access to the described source.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $mediator;

    /**
     * References to any sources to which this source is related (usually applicable to sources that are derived from or contained in another source).
     *
     * @var \Gedcomx\Source\SourceReference[]
     */
    private $sources;

    /**
     * A reference to the analysis document explaining the analysis that went into this description of the source.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $analysis;

    /**
     * A reference to the source that contains this source.
     *
     * @var \Gedcomx\Source\SourceReference
     */
    private $componentOf;

    /**
     * A list of titles for this source.
     *
     * @var \Gedcomx\Common\TextValue[]
     */
    private $titles;

    /**
     * A label for the title of this description.
     *
     * @var \Gedcomx\Common\TextValue
     */
    private $titleLabel;

    /**
     * Notes about a source.
     *
     * @var \Gedcomx\Common\Note[]
     */
    private $notes;

    /**
     * The attribution metadata for this source description.
     *
     * @var \Gedcomx\Common\Attribution
     */
    private $attribution;

    /**
     * A sort key to be used in determining the position of this source relative to other sources in the same collection.
     *
     * @var string
     */
    private $sortKey;

    /**
     * Human-readable descriptions of the source.
     *
     * @var \Gedcomx\Common\TextValue[]
     */
    private $descriptions;

    /**
     * The list of identifiers for the source.
     *
     * @var Identifier[]
     */
    private $identifiers;

    /**
     * The date the source was created.
     *
     * @var integer
     */
    private $created;

    /**
     * The date the source was last modified.
     *
     * @var integer
     */
    private $modified;

    /**
     * Declarations of the coverage of the source.
     *
     * @var \Gedcomx\Source\Coverage[]
     */
    private $coverage;

    /**
     * The rights for this source.
     *
     * @var string[]
     */
    private $rights;

    /**
     * The fields that are applicable to the resource being described.
     *
     * @var \Gedcomx\Records\Field[]
     */
    private $fields;

    /**
     * Reference to an agent describing the repository in which the source is found.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $repository;

    /**
     * Reference to a descriptor of fields and type of data that can be expected to be extracted from the source.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $descriptorRef;

    /**
     * Constructs a SourceDescription from a (parsed) JSON hash
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
     * The URI (if applicable) of the actual source.
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * The URI (if applicable) of the actual source.
     *
     * @param string $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }
    /**
     * Hint about the media (MIME) type of the resource being described.
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Hint about the media (MIME) type of the resource being described.
     *
     * @param string $mediaType
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
    }
    /**
     * The type of the resource being described.
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * The type of the resource being described.
     *
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }
    /**
     * The bibliographic citations for this source.
     *
     * @return \Gedcomx\Source\SourceCitation[]
     */
    public function getCitations()
    {
        return $this->citations;
    }

    /**
     * The bibliographic citations for this source.
     *
     * @param \Gedcomx\Source\SourceCitation[] $citations
     */
    public function setCitations($citations)
    {
        $this->citations = $citations;
    }
    /**
     * A reference to the entity that mediates access to the described source.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getMediator()
    {
        return $this->mediator;
    }

    /**
     * A reference to the entity that mediates access to the described source.
     *
     * @param \Gedcomx\Common\ResourceReference $mediator
     */
    public function setMediator($mediator)
    {
        $this->mediator = $mediator;
    }
    /**
     * References to any sources to which this source is related (usually applicable to sources that are derived from or contained in another source).
     *
     * @return \Gedcomx\Source\SourceReference[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * References to any sources to which this source is related (usually applicable to sources that are derived from or contained in another source).
     *
     * @param \Gedcomx\Source\SourceReference[] $sources
     */
    public function setSources($sources)
    {
        $this->sources = $sources;
    }
    /**
     * A reference to the analysis document explaining the analysis that went into this description of the source.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * A reference to the analysis document explaining the analysis that went into this description of the source.
     *
     * @param \Gedcomx\Common\ResourceReference $analysis
     */
    public function setAnalysis($analysis)
    {
        $this->analysis = $analysis;
    }
    /**
     * A reference to the source that contains this source.
     *
     * @return \Gedcomx\Source\SourceReference
     */
    public function getComponentOf()
    {
        return $this->componentOf;
    }

    /**
     * A reference to the source that contains this source.
     *
     * @param \Gedcomx\Source\SourceReference $componentOf
     */
    public function setComponentOf($componentOf)
    {
        $this->componentOf = $componentOf;
    }
    /**
     * A list of titles for this source.
     *
     * @return \Gedcomx\Common\TextValue[]
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * A list of titles for this source.
     *
     * @param \Gedcomx\Common\TextValue[] $titles
     */
    public function setTitles($titles)
    {
        $this->titles = $titles;
    }
    /**
     * A label for the title of this description.
     *
     * @return \Gedcomx\Common\TextValue
     */
    public function getTitleLabel()
    {
        return $this->titleLabel;
    }

    /**
     * A label for the title of this description.
     *
     * @param \Gedcomx\Common\TextValue $titleLabel
     */
    public function setTitleLabel($titleLabel)
    {
        $this->titleLabel = $titleLabel;
    }
    /**
     * Notes about a source.
     *
     * @return \Gedcomx\Common\Note[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes about a source.
     *
     * @param \Gedcomx\Common\Note[] $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
    /**
     * The attribution metadata for this source description.
     *
     * @return \Gedcomx\Common\Attribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * The attribution metadata for this source description.
     *
     * @param \Gedcomx\Common\Attribution $attribution
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * A sort key to be used in determining the position of this source relative to other sources in the same collection.
     *
     * @return string
     */
    public function getSortKey()
    {
        return $this->sortKey;
    }

    /**
     * A sort key to be used in determining the position of this source relative to other sources in the same collection.
     *
     * @param string $sortKey
     */
    public function setSortKey($sortKey)
    {
        $this->sortKey = $sortKey;
    }
    /**
     * Human-readable descriptions of the source.
     *
     * @return \Gedcomx\Common\TextValue[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Human-readable descriptions of the source.
     *
     * @param \Gedcomx\Common\TextValue[] $description
     */
    public function setDescriptions($description)
    {
        $this->descriptions = $description;
    }
    /**
     * The list of identifiers for the source.
     *
     * @return Identifier[]
     */
    public function getIdentifiers()
    {
        return $this->identifiers;
    }

    /**
     * The list of identifiers for the source.
     *
     * @param Identifier[] $identifiers
     */
    public function setIdentifiers($identifiers)
    {
        $this->identifiers = $identifiers;
    }
    /**
     * The date the source was created.
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date the source was created.
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
    /**
     * The date the source was last modified.
     *
     * @return integer
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * The date the source was last modified.
     *
     * @param integer $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }
    /**
     * Declarations of the coverage of the source.
     *
     * @return \Gedcomx\Source\Coverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Declarations of the coverage of the source.
     *
     * @param \Gedcomx\Source\Coverage[] $coverage
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
    }
    /**
     * The rights for this source.
     *
     * @return string[]
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * The rights for this source.
     *
     * @param string[] $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }
    /**
     * The fields that are applicable to the resource being described.
     *
     * @return \Gedcomx\Records\Field[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The fields that are applicable to the resource being described.
     *
     * @param \Gedcomx\Records\Field[] $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    /**
     * Reference to an agent describing the repository in which the source is found.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Reference to an agent describing the repository in which the source is found.
     *
     * @param \Gedcomx\Common\ResourceReference $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }
    /**
     * Reference to a descriptor of fields and type of data that can be expected to be extracted from the source.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getDescriptorRef()
    {
        return $this->descriptorRef;
    }

    /**
     * Reference to a descriptor of fields and type of data that can be expected to be extracted from the source.
     *
     * @param \Gedcomx\Common\ResourceReference $descriptorRef
     */
    public function setDescriptorRef($descriptorRef)
    {
        $this->descriptorRef = $descriptorRef;
    }
    /**
     * Returns the associative array for this SourceDescription
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->about) {
            $a["about"] = $this->about;
        }
        if ($this->mediaType) {
            $a["mediaType"] = $this->mediaType;
        }
        if ($this->resourceType) {
            $a["resourceType"] = $this->resourceType;
        }
        if ($this->citations) {
            $ab = array();
            foreach ($this->citations as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['citations'] = $ab;
        }
        if ($this->mediator) {
            $a["mediator"] = $this->mediator->toArray();
        }
        if ($this->sources) {
            $ab = array();
            foreach ($this->sources as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['sources'] = $ab;
        }
        if ($this->analysis) {
            $a["analysis"] = $this->analysis->toArray();
        }
        if ($this->componentOf) {
            $a["componentOf"] = $this->componentOf->toArray();
        }
        if ($this->titles) {
            $ab = array();
            foreach ($this->titles as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['titles'] = $ab;
        }
        if ($this->titleLabel) {
            $a["titleLabel"] = $this->titleLabel->toArray();
        }
        if ($this->notes) {
            $ab = array();
            foreach ($this->notes as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['notes'] = $ab;
        }
        if ($this->attribution) {
            $a["attribution"] = $this->attribution->toArray();
        }
        if ($this->sortKey) {
            $a["sortKey"] = $this->sortKey;
        }
        if ($this->descriptions) {
            $ab = array();
            foreach ($this->descriptions as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['description'] = $ab;
        }
        if ($this->identifiers) {
            $ab = array();
            foreach ($this->identifiers as $i => $x) {
                if (empty($ab[$x->getType()])) {
                    $ab[$x->getType()] = array();
                }
                $ab[$x->getType()][] = $x->getValue();
            }
            $a['identifiers'] = $ab;
        }
        if ($this->created) {
            $a["created"] = $this->created;
        }
        if ($this->modified) {
            $a["modified"] = $this->modified;
        }
        if ($this->coverage) {
            $ab = array();
            foreach ($this->coverage as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['coverage'] = $ab;
        }
        if ($this->rights) {
            $ab = array();
            foreach ($this->rights as $i => $x) {
                $ab[$i] = $x;
            }
            $a['rights'] = $ab;
        }
        if ($this->fields) {
            $ab = array();
            foreach ($this->fields as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['fields'] = $ab;
        }
        if ($this->repository) {
            $a["repository"] = $this->repository->toArray();
        }
        if ($this->descriptorRef) {
            $a["descriptor"] = $this->descriptorRef->toArray();
        }
        return $a;
    }


    /**
     * Initializes this SourceDescription from an associative array
     *
     * @param array $o
     */
    public function initFromArray(array $o)
    {
        parent::initFromArray($o);
        if (isset($o['about'])) {
            $this->about = $o["about"];
        }
        if (isset($o['mediaType'])) {
            $this->mediaType = $o["mediaType"];
        }
        if (isset($o['resourceType'])) {
            $this->resourceType = $o["resourceType"];
        }
        $this->citations = array();
        if (isset($o['citations'])) {
            foreach ($o['citations'] as $i => $x) {
                $this->citations[$i] = $x instanceof SourceCitation ? $x : new SourceCitation($x);
            }
        }
        if (isset($o['mediator'])) {
            $this->mediator = $o["mediator"] instanceof ResourceReference ? $o["mediator"] : new ResourceReference($o["mediator"]);
        }
        $this->sources = array();
        if (isset($o['sources'])) {
            foreach ($o['sources'] as $i => $x) {
                $this->sources[$i] = $x instanceof SourceReference ? $x : new SourceReference($x);
            }
        }
        if (isset($o['analysis'])) {
            $this->analysis = $o['analysis'] instanceof ResourceReference ? $o['analysis'] : new ResourceReference($o["analysis"]);
        }
        if (isset($o['componentOf'])) {
            $this->componentOf = $o['componentOf'] instanceof SourceReference ? $o['componentOf'] : new SourceReference($o["componentOf"]);
        }
        $this->titles = array();
        if (isset($o['titles'])) {
            foreach ($o['titles'] as $i => $x) {
                $this->titles[$i] = $x instanceof TextValue ? $x : new TextValue($x);
            }
        }
        if (isset($o['titleLabel'])) {
            $this->titleLabel = $x instanceof TextValue ? $x : new TextValue($o["titleLabel"]);
        }
        $this->notes = array();
        if (isset($o['notes'])) {
            foreach ($o['notes'] as $i => $x) {
                $this->notes[$i] = $x instanceof Note ? $x : new Note($x);
            }
        }
        if (isset($o['attribution'])) {
            $this->attribution = $o['attribution'] instanceof Attribution ? $o['attribution'] : new Attribution($o["attribution"]);
        }
        if (isset($o['sortKey'])) {
            $this->sortKey = $o["sortKey"];
        }
        $this->descriptions = array();
        if (isset($o['descriptions'])) {
            foreach ($o['descriptions'] as $i => $x) {
                $this->descriptions[$i] = $x instanceof TextValue ? $x : new TextValue($x);
            }
        }
        $this->identifiers = array();
        if (isset($o['identifiers'])) {
            $this->identifiers = array();
            foreach ($o['identifiers'] as $i => $x) {
                if (!is_array($x)) {
                    $x = array($x);
                }
                foreach($x as $idValue){
                    $this->identifiers[] = new Identifier([
                        'type'  => $i,
                        'value' => $idValue,
                    ]);
                }
            }
            unset($o['identifiers']);
        }
        if (isset($o['created'])) {
            $this->created = $o["created"];
        }
        if (isset($o['modified'])) {
            $this->modified = $o["modified"];
        }
        $this->coverage = array();
        if (isset($o['coverage'])) {
            foreach ($o['coverage'] as $i => $x) {
                $this->coverage[$i] = $o['coverage'] instanceof Coverage ? $o['coverage'] : new Coverage($x);
            }
        }
        $this->rights = array();
        if (isset($o['rights'])) {
            foreach ($o['rights'] as $i => $x) {
                $this->rights[$i] = $x;
            }
        }
        $this->fields = array();
        if (isset($o['fields'])) {
            foreach ($o['fields'] as $i => $x) {
                $this->fields[$i] = $x instanceof Field ? $x : new Field($x);
            }
        }
        if (isset($o['repository'])) {
            $this->repository = $o["repository"] instanceof ResourceReference ? $o["repository"] : new ResourceReference($o["repository"]);
        }
        if (isset($o['descriptor'])) {
            $this->descriptorRef = $o["descriptor"] instanceof ResourceReference ? $o["descriptor"] : new ResourceReference($o["descriptor"]);
        }
    }

    public function accept(GedcomxModelVisitor $visitor)
    {
        $visitor->visitSourceDescription($this);
    }

    /**
     * Sets a known child element of SourceDescription from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement(\XMLReader $xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'citation') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new SourceCitation($xml);
            if (!isset($this->citations)) {
                $this->citations = array();
            }
            array_push($this->citations, $child);
            $happened = true;
        }
        else if (($xml->localName == 'mediator') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->mediator = $child;
            $happened = true;
        }
        else if (($xml->localName == 'source') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new SourceReference($xml);
            if (!isset($this->sources)) {
                $this->sources = array();
            }
            array_push($this->sources, $child);
            $happened = true;
        }
        else if (($xml->localName == 'analysis') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->analysis = $child;
            $happened = true;
        }
        else if (($xml->localName == 'componentOf') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new SourceReference($xml);
            $this->componentOf = $child;
            $happened = true;
        }
        else if (($xml->localName == 'title') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new TextValue($xml);
            if (!isset($this->titles)) {
                $this->titles = array();
            }
            array_push($this->titles, $child);
            $happened = true;
        }
        else if (($xml->localName == 'titleLabel') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new TextValue($xml);
            $this->titleLabel = $child;
            $happened = true;
        }
        else if (($xml->localName == 'note') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Note($xml);
            if (!isset($this->notes)) {
                $this->notes = array();
            }
            array_push($this->notes, $child);
            $happened = true;
        }
        else if (($xml->localName == 'attribution') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Attribution($xml);
            $this->attribution = $child;
            $happened = true;
        }
        else if (($xml->localName == 'sortKey') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->sortKey = $child;
            $happened = true;
        }
        else if (($xml->localName == 'description') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new TextValue($xml);
            if (!isset($this->descriptions)) {
                $this->descriptions = array();
            }
            array_push($this->descriptions, $child);
            $happened = true;
        }
        else if (($xml->localName == 'identifier') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Identifier($xml);
            if (!isset($this->identifiers)) {
                $this->identifiers = array();
            }
            array_push($this->identifiers, $child);
            $happened = true;
        }
        else if (($xml->localName == 'created') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->created = $child;
            $happened = true;
        }
        else if (($xml->localName == 'modified') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->modified = $child;
            $happened = true;
        }
        else if (($xml->localName == 'coverage') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Coverage($xml);
            if (!isset($this->coverage)) {
                $this->coverage = array();
            }
            array_push($this->coverage, $child);
            $happened = true;
        }
        else if (($xml->localName == 'rights') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            if (!isset($this->rights)) {
                $this->rights = array();
            }
            array_push($this->rights, $child);
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
        else if (($xml->localName == 'repository') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->repository = $child;
            $happened = true;
        }
        else if (($xml->localName == 'descriptor') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->descriptorRef = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of SourceDescription from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute(\XMLReader $xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }
        else if (($xml->localName == 'about') && (empty($xml->namespaceURI))) {
            $this->about = $xml->value;
            return true;
        }
        else if (($xml->localName == 'mediaType') && (empty($xml->namespaceURI))) {
            $this->mediaType = $xml->value;
            return true;
        }
        else if (($xml->localName == 'resourceType') && (empty($xml->namespaceURI))) {
            $this->resourceType = $xml->value;
            return true;
        }

        return false;
    }

    /**
     * Writes this SourceDescription to an XML writer.
     *
     * @param \XMLWriter $writer The XML writer.
     * @param bool $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml(\XMLWriter $writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'sourceDescription', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this SourceDescription to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents(\XMLWriter $writer)
    {
        if ($this->about) {
            $writer->writeAttribute('about', $this->about);
        }
        if ($this->mediaType) {
            $writer->writeAttribute('mediaType', $this->mediaType);
        }
        if ($this->resourceType) {
            $writer->writeAttribute('resourceType', $this->resourceType);
        }
        parent::writeXmlContents($writer);
        if ($this->citations) {
            foreach ($this->citations as $i => $x) {
                $writer->startElementNs('gx', 'citation', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->mediator) {
            $writer->startElementNs('gx', 'mediator', null);
            $this->mediator->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->sources) {
            foreach ($this->sources as $i => $x) {
                $writer->startElementNs('gx', 'source', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->analysis) {
            $writer->startElementNs('gx', 'analysis', null);
            $this->analysis->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->componentOf) {
            $writer->startElementNs('gx', 'componentOf', null);
            $this->componentOf->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->titles) {
            foreach ($this->titles as $i => $x) {
                $writer->startElementNs('gx', 'title', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->titleLabel) {
            $writer->startElementNs('gx', 'titleLabel', null);
            $this->titleLabel->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->notes) {
            foreach ($this->notes as $i => $x) {
                $writer->startElementNs('gx', 'note', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->attribution) {
            $writer->startElementNs('gx', 'attribution', null);
            $this->attribution->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->sortKey) {
            $writer->startElementNs('gx', 'sortKey', null);
            $writer->text($this->sortKey);
            $writer->endElement();
        }
        if ($this->descriptions) {
            foreach ($this->descriptions as $i => $x) {
                $writer->startElementNs('gx', 'description', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->identifiers) {
            foreach ($this->identifiers as $i => $x) {
                $writer->startElementNs('gx', 'identifier', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->created) {
            $writer->startElementNs('gx', 'created', null);
            $writer->text($this->created);
            $writer->endElement();
        }
        if ($this->modified) {
            $writer->startElementNs('gx', 'modified', null);
            $writer->text($this->modified);
            $writer->endElement();
        }
        if ($this->coverage) {
            foreach ($this->coverage as $i => $x) {
                $writer->startElementNs('gx', 'coverage', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->rights) {
            foreach ($this->rights as $i => $x) {
                $writer->startElementNs('gx', 'rights', null);
                $writer->text($x);
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
        if ($this->repository) {
            $writer->startElementNs('gx', 'repository', null);
            $this->repository->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->descriptorRef) {
            $writer->startElementNs('gx', 'descriptor', null);
            $this->descriptorRef->writeXmlContents($writer);
            $writer->endElement();
        }
    }
}
