<?php
namespace Gwsn\LumenTransformer\src\Models;


abstract class BaseMapping implements MappingInterface
{
    /**
     * @var array $mapping
     */
    protected $mapping = [];

    /**
     * @return array
     */
    public function getMapping(): array
    {
        return $this->mapping;
    }

    /**
     * @param array $mapping
     * @return BaseMapping
     */
    public function setMapping(array $mapping = []): BaseMapping
    {
        $this->mapping = $mapping;
        return $this;
    }


}