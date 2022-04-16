<?php

require_once(dirname(__FILE__, 2). '/src/config/database.php');


$sql = 'select users.id as Código, users.name as Nome, users.start_date as Admissão, users.email as Email, count(working_hours.worked_time) as Total_Horas , users.is_admin as Administrador
from users
inner join working_hours on users.id = working_hours.user_id
order by users.id;';
$result = Database::getResultFromQuery($sql);

while($row = $result -> fetch_assoc()){
    print_r($row);
    echo '<br>';
}
