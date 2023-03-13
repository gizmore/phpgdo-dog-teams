<?php
namespace GDO\DogTeams;

/**
 * Dog Connector for MS-Teams.
 */
class Module_DogTeams extends \GDO\Core\GDO_Module
{

	public function getDependencies(): array
	{
		return [
			'Dog',
		];
	}

}
