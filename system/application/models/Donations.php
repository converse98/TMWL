<?php

/**
 * Donations
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Donations extends BaseDonations
{
	public function get_all_donations(){
		$q = Doctrine_Query::Create()
			->select('*')
			->from('Donations d')
			->execute();
		return $q;
	}
}