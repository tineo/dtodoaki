<?php

namespace DirectoryPlatform\AppBundle\Helper;

class Hierarchy {
	private $repository = null;
	private $parent_name = null;
	private $children_name = null;

	public function __construct($repository, $parent_name, $children_name) {
		$this->repository = $repository;
		$this->parent_name = $parent_name;
		$this->children_name = $children_name;
	}
	
	public function getName($object) {
		return $this->buildDashes($object) . $object->getName();
	}

	private function buildDashes($object, $dashes = '') {
		if ($object->{$this->parent_name}) {
			$dashes .= '- ';
			$dashes = $this->buildDashes($object->{$this->parent_name}, $dashes);
		}

		return $dashes;
	}

	public function tree() {
		$objects = $this->repository->findParent();
		return $this->children($objects, []);

	}

	private function children($objects, array $results) {
		foreach ($objects as $object) {
			$results[] = $object;

			if ($object->{$this->children_name}) {
				$results = $this->children($object->{$this->children_name}, $results);
			}
		}

		return $results;
	}
}