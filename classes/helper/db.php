<?php
$link_db = new mysqli(
    $config['db']['host'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);
$link_db->query('SET NAMES utf8');
function query($query)
{
    
    global $link_db;
    $result = $link_db->query($query);
    if ($result)
    {
        if (!is_object($result))
        {
            return $link_db->insert_id;
        }
        $data = array();
        while($row = $result->fetch_assoc())
        {
            $data[] = $row;
        }
        return $data;
    }
    return false;
}
?>