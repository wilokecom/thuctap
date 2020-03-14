<?php
namespace Wiloke\core\Database;

class QueryBuilder
{
    /**
     * @var mysqli
     */
    private $query;
    
    public function __construct($query)
    {
        $this->query = $query;
    }
    
    public function selectAll($table)
    {
        $result = $this->query->query("SELECT * FROM $table");
        
        $aResults = $result->fetch_all(MYSQLI_ASSOC);
        
        $result->free_result();
        return $aResults;
    }
    
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            "(ID, %s) VALUES(NULL, %s)",
            implode(',', array_keys($parameters)),
            '"'.implode('","', $parameters).'"'
        
        );
        
        if ($this->query->query("INSERT INTO $table $sql")) {
            return true;
        }
        
        echo "Something when error";
        die;
    }
}
