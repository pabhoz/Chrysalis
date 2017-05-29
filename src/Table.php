<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author pabhoz
 */
class Table {
    
    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $TABLE_TYPE;
    private $ENGINE;
    private $VERSION;
    private $ROW_FORMAT;
    private $TABLE_ROWS;
    private $AVG_ROW_LENGTH;
    private $DATA_LENGTH;
    private $MAX_DATA_LENGTH;
    private $INDEX_LENGTH;
    private $DATA_FREE;
    private $AUTO_INCREMENT;
    private $CREATE_TIME;
    private $UPDATE_TIME;
    private $CHECK_TIME;
    private $TABLE_COLLATION;
    private $CHECKSUM;
    private $CREATE_OPTIONS;
    private $TABLE_COMMENT;
    private $loaded = false;
    
    function __construct($TABLE_CATALOG, $TABLE_SCHEMA, $TABLE_NAME, $TABLE_TYPE,
            $ENGINE, $VERSION, $ROW_FORMAT, $TABLE_ROWS, $AVG_ROW_LENGTH, $DATA_LENGTH,
            $MAX_DATA_LENGTH, $INDEX_LENGTH, $DATA_FREE, $AUTO_INCREMENT, $CREATE_TIME,
            $UPDATE_TIME, $CHECK_TIME, $TABLE_COLLATION, $CHECKSUM, $CREATE_OPTIONS,
            $TABLE_COMMENT) {
        $this->TABLE_CATALOG = $TABLE_CATALOG;
        $this->TABLE_SCHEMA = $TABLE_SCHEMA;
        $this->TABLE_NAME = $TABLE_NAME;
        $this->TABLE_TYPE = $TABLE_TYPE;
        $this->ENGINE = $ENGINE;
        $this->VERSION = $VERSION;
        $this->ROW_FORMAT = $ROW_FORMAT;
        $this->TABLE_ROWS = $TABLE_ROWS;
        $this->AVG_ROW_LENGTH = $AVG_ROW_LENGTH;
        $this->DATA_LENGTH = $DATA_LENGTH;
        $this->MAX_DATA_LENGTH = $MAX_DATA_LENGTH;
        $this->INDEX_LENGTH = $INDEX_LENGTH;
        $this->DATA_FREE = $DATA_FREE;
        $this->AUTO_INCREMENT = $AUTO_INCREMENT;
        $this->CREATE_TIME = $CREATE_TIME;
        $this->UPDATE_TIME = $UPDATE_TIME;
        $this->CHECK_TIME = $CHECK_TIME;
        $this->TABLE_COLLATION = $TABLE_COLLATION;
        $this->CHECKSUM = $CHECKSUM;
        $this->CREATE_OPTIONS = $CREATE_OPTIONS;
        $this->TABLE_COMMENT = $TABLE_COMMENT;
    }
    
    public function getTableCatalog() {
        return $this->TABLE_CATALOG;
    }

    public function getTableSchema() {
        return $this->TABLE_SCHEMA;
    }

    public function getTableName() {
        return $this->TABLE_NAME;
    }

    public function getTableType() {
        return $this->TABLE_TYPE;
    }

    public function getEngine() {
        return $this->ENGINE;
    }

    public function getVersion() {
        return $this->VERSION;
    }

    public function getRowFormat() {
        return $this->ROW_FORMAT;
    }

    public function getTableRows() {
        return $this->TABLE_ROWS;
    }

    public function gerAvgRowLength() {
        return $this->AVG_ROW_LENGTH;
    }

    public function getDataLength() {
        return $this->DATA_LENGTH;
    }

    public function getMaxDataLength() {
        return $this->MAX_DATA_LENGTH;
    }

    public function getIndexLength() {
        return $this->INDEX_LENGTH;
    }

    public function getDataFree() {
        return $this->DATA_FREE;
    }

    public function getAutoIncrement() {
        return $this->AUTO_INCREMENT;
    }

    public function getCreateTime() {
        return $this->CREATE_TIME;
    }

    public function getUpdateTime() {
        return $this->UPDATE_TIME;
    }

    public function getCheckTime() {
        return $this->CHECK_TIME;
    }

    public function getTableCollation() {
        return $this->TABLE_COLLATION;
    }

    public function getChecksum() {
        return $this->CHECKSUM;
    }

    public function getCreateOptions() {
        return $this->CREATE_OPTIONS;
    }

    public function getTableComment() {
        return $this->TABLE_COMMENT;
    }

    public function setTableCatalog($TABLE_CATALOG) {
        $this->TABLE_CATALOG = $TABLE_CATALOG;
        return $this;
    }

    public function setTableSchema($TABLE_SCHEMA) {
        $this->TABLE_SCHEMA = $TABLE_SCHEMA;
        return $this;
    }

    public function setTableName($TABLE_NAME) {
        $this->TABLE_NAME = $TABLE_NAME;
        return $this;
    }

    public function setTableType($TABLE_TYPE) {
        $this->TABLE_TYPE = $TABLE_TYPE;
        return $this;
    }

    public function setEngine($ENGINE) {
        $this->ENGINE = $ENGINE;
        return $this;
    }

    public function setVersion($VERSION) {
        $this->VERSION = $VERSION;
        return $this;
    }

    public function setRowFormat($ROW_FORMAT) {
        $this->ROW_FORMAT = $ROW_FORMAT;
        return $this;
    }

    public function setTableRows($TABLE_ROWS) {
        $this->TABLE_ROWS = $TABLE_ROWS;
        return $this;
    }

    public function serAvgRowLength($AVG_ROW_LENGTH) {
        $this->AVG_ROW_LENGTH = $AVG_ROW_LENGTH;
        return $this;
    }

    public function setDataLength($DATA_LENGTH) {
        $this->DATA_LENGTH = $DATA_LENGTH;
        return $this;
    }

    public function setMaxDataLength($MAX_DATA_LENGTH) {
        $this->MAX_DATA_LENGTH = $MAX_DATA_LENGTH;
        return $this;
    }

    public function setIndexLength($INDEX_LENGTH) {
        $this->INDEX_LENGTH = $INDEX_LENGTH;
        return $this;
    }

    public function setDataFree($DATA_FREE) {
        $this->DATA_FREE = $DATA_FREE;
        return $this;
    }

    public function setAutoIncrement($AUTO_INCREMENT) {
        $this->AUTO_INCREMENT = $AUTO_INCREMENT;
        return $this;
    }

    public function setCreateTime($CREATE_TIME) {
        $this->CREATE_TIME = $CREATE_TIME;
        return $this;
    }

    public function setUpdateTime($UPDATE_TIME) {
        $this->UPDATE_TIME = $UPDATE_TIME;
        return $this;
    }

    public function setCheckTime($CHECK_TIME) {
        $this->CHECK_TIME = $CHECK_TIME;
        return $this;
    }

    public function setTableCollation($TABLE_COLLATION) {
        $this->TABLE_COLLATION = $TABLE_COLLATION;
        return $this;
    }

    public function setChecksum($CHECKSUM) {
        $this->CHECKSUM = $CHECKSUM;
        return $this;
    }

    public function setCreateOptions($CREATE_OPTIONS) {
        $this->CREATE_OPTIONS = $CREATE_OPTIONS;
        return $this;
    }

    public function setTableComment($TABLE_COMMENT) {
        $this->TABLE_COMMENT = $TABLE_COMMENT;
        return $this;
    }

    public function getLoaded() {
        return $this->loaded;
    }

    public function setLoaded($loaded) {
        $this->loaded = $loaded;
        return $this;
    }

}
