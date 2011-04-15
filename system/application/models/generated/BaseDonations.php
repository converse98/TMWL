<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Donations', 'default');

/**
 * BaseDonations
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $donation_id
 * @property float $donation_amount
 * @property string $type
 * @property timestamp $donation_date
 * @property Doctrine_Collection $PostDonationRel
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDonations extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('donations');
        $this->hasColumn('donation_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('donation_amount', 'float', null, array(
             'type' => 'float',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('donation_date', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
        	'default' => date('Y-m-d H:i:s')
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PostDonationRel', array(
             'local' => 'donation_id',
             'foreign' => 'donation_id'));
    }
}