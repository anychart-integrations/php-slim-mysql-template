<?php

class FruitEntity implements JsonSerializable
{
    protected $id;
    protected $name;
    protected $value;

    /**
     * Accept an array of data matching properties of this class
     * and create the class
     *
     * @param array $data The data to use to create
     */
    public function __construct(array $data) {
        // no id if we're creating
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }

        $this->name = $data['name'];
        $this->value = $data['value'];
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function jsonSerialize() {
        return [
            'name' => $this->name,
            'value' => $this->value
        ];
    }

}
