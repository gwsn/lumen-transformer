<?php
namespace Gwsn\LumenTransformer\src\Models;


interface MappingInterface
{

    public function setMapping(array $mapping = []);

    public function getMapping(): array;
}