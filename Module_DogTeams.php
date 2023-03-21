<?php
namespace GDO\DogTeams;

use GDO\Core\GDO_Module;

/**
 * Dog Connector for MS-Teams.
 */
class Module_DogTeams extends GDO_Module
{

	public function getDependencies(): array
	{
		return [
			'Dog',
		];
	}

}
