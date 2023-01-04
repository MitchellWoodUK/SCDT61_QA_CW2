<?php
class RoleController
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function assignRole() : bool
    {
        return true;
    }

    public function get(int $id)
    {
        $sql = "SELECT * FROM userroles WHERE id = :id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->fetch();
    }
    
}
?>