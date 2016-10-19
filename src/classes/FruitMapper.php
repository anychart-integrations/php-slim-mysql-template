<?php

class FruitMapper extends Mapper
{
    public function getFruits() {
        $sql = "SELECT id, name, value from fruits ORDER BY value DESC LIMIT 5";
        $stmt = $this->db->query($sql);

        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new FruitEntity($row);
        }
        return $results;
    }

}
