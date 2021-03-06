<?php


abstract class BaseGgMemberIouwalletRecordPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'gg_member_iouwallet_record';

	
	const CLASS_DEFAULT = 'lib.model.GgMemberIouwalletRecord';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'gg_member_iouwallet_record.ID';

	
	const UID = 'gg_member_iouwallet_record.UID';

	
	const AID = 'gg_member_iouwallet_record.AID';

	
	const TYPE = 'gg_member_iouwallet_record.TYPE';

	
	const AMOUNT = 'gg_member_iouwallet_record.AMOUNT';

	
	const BAL = 'gg_member_iouwallet_record.BAL';

	
	const DESCR = 'gg_member_iouwallet_record.DESCR';

	
	const CDATE = 'gg_member_iouwallet_record.CDATE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Uid', 'Aid', 'Type', 'Amount', 'Bal', 'Descr', 'Cdate', ),
		BasePeer::TYPE_COLNAME => array (GgMemberIouwalletRecordPeer::ID, GgMemberIouwalletRecordPeer::UID, GgMemberIouwalletRecordPeer::AID, GgMemberIouwalletRecordPeer::TYPE, GgMemberIouwalletRecordPeer::AMOUNT, GgMemberIouwalletRecordPeer::BAL, GgMemberIouwalletRecordPeer::DESCR, GgMemberIouwalletRecordPeer::CDATE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'uid', 'aid', 'type', 'amount', 'bal', 'descr', 'cdate', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Uid' => 1, 'Aid' => 2, 'Type' => 3, 'Amount' => 4, 'Bal' => 5, 'Descr' => 6, 'Cdate' => 7, ),
		BasePeer::TYPE_COLNAME => array (GgMemberIouwalletRecordPeer::ID => 0, GgMemberIouwalletRecordPeer::UID => 1, GgMemberIouwalletRecordPeer::AID => 2, GgMemberIouwalletRecordPeer::TYPE => 3, GgMemberIouwalletRecordPeer::AMOUNT => 4, GgMemberIouwalletRecordPeer::BAL => 5, GgMemberIouwalletRecordPeer::DESCR => 6, GgMemberIouwalletRecordPeer::CDATE => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'uid' => 1, 'aid' => 2, 'type' => 3, 'amount' => 4, 'bal' => 5, 'descr' => 6, 'cdate' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/GgMemberIouwalletRecordMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.GgMemberIouwalletRecordMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = GgMemberIouwalletRecordPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(GgMemberIouwalletRecordPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::ID);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::UID);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::AID);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::TYPE);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::AMOUNT);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::BAL);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::DESCR);

		$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::CDATE);

	}

	const COUNT = 'COUNT(gg_member_iouwallet_record.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT gg_member_iouwallet_record.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(GgMemberIouwalletRecordPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = GgMemberIouwalletRecordPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = GgMemberIouwalletRecordPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return GgMemberIouwalletRecordPeer::populateObjects(GgMemberIouwalletRecordPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			GgMemberIouwalletRecordPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = GgMemberIouwalletRecordPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return GgMemberIouwalletRecordPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(GgMemberIouwalletRecordPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(GgMemberIouwalletRecordPeer::ID);
			$selectCriteria->add(GgMemberIouwalletRecordPeer::ID, $criteria->remove(GgMemberIouwalletRecordPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(GgMemberIouwalletRecordPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(GgMemberIouwalletRecordPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof GgMemberIouwalletRecord) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GgMemberIouwalletRecordPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(GgMemberIouwalletRecord $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GgMemberIouwalletRecordPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GgMemberIouwalletRecordPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(GgMemberIouwalletRecordPeer::DATABASE_NAME, GgMemberIouwalletRecordPeer::TABLE_NAME, $columns);
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(GgMemberIouwalletRecordPeer::DATABASE_NAME);

		$criteria->add(GgMemberIouwalletRecordPeer::ID, $pk);


		$v = GgMemberIouwalletRecordPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(GgMemberIouwalletRecordPeer::ID, $pks, Criteria::IN);
			$objs = GgMemberIouwalletRecordPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseGgMemberIouwalletRecordPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/GgMemberIouwalletRecordMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.GgMemberIouwalletRecordMapBuilder');
}
