<?php
namespace Europeana\Api\Response\Objects;
use Europeana\Api\Response\ObjectAbstract;


/**
 * if the search has results, the hits take place in the "items" array. Each item is an object, and represents a summary of metadata record. The actual content is depending of the profile parameter. The mandatory field are:
 */
class Item extends ObjectAbstract {

	/**
	 * @var int
	 */
	public $completeness;

	/**
	 * @var array
	 */
	public $dataProvider;

	/**
	 * @var array
	 */
	public $dcCreator;

	/**
	 * @var array
	 */
	public $edmConceptLabel;

	/**
	 * @var array
	 */
	public $edmPreview;

	/**
	 * @var array
	 */
	public $edmTimespanLabel;

	/**
	 * @var array
	 */
	public $europeanaCollectionName;

	/**
	 * @var int
	 */
	public $europeanaCompleteness;

	/**
	 * @var string
	 * an URL points to the object page in portal, and includes "utm_source=api&utm_medium=api&utm_campaign=BNVFJIIZTH" parameters to track the API-generated visits. This way Europeana and partners can measure the traffic generated by the API, so please keep these parameters as the part of the link.
	 */
	public $guid;

	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var int
	 */
	public $index;

	/**
	 * @var array
	 */
	public $language;

	/**
	 * @var string
	 * an URL points to the object call in API. If you want to retrieve the full metadata object, please follow this link. The link contains the API key, so you should no display directly to the end users.
	 */
	public $link;

	/**
	 * @var array
	 */
	public $provider;

	/**
	 * @var array
	 */
	public $rights;

	/**
	 * @var array
	 */
	public $title;

	/**
	 * @var string
	 */
	public $type;

	/**
	 * @var int
	 */
	public $year;


	public function __construct( array $properties ) {
		$this->init();
		$this->populateObject( $properties );
	}

	public function init() {
		parent::init();
		$this->completeness = 0;
		$this->dataProvider = array();
		$this->dcCreator = array();
		$this->edmConceptLabel = null;
		$this->edmPreview = null;
		$this->edmTimespanLabel = null;
		$this->europeanaCollectionName = array();
		$this->europeanaCompleteness = 0;
		$this->guid = null;
		$this->id = null;
		$this->index = 0;
		$this->language = array();
		$this->link = null;
		$this->provider = null;
		$this->rights = array();
		$this->title = array();
		$this->type = null;
		$this->year = 0;
	}

}