<?php if(!empty($description)): ?>

/**
 * <?php echo $description.PHP_EOL; ?>
 */
<?php endif; ?>
class <?php echo $class; ?> extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Database Database connection
	 */
	public function execute(Database $db)
	{
		// $db->query(NULL, 'CREATE TABLE ... ');
	}
}
