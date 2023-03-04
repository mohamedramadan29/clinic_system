class getdata{
public function getdata($day, $meal_type, $option_type)
{
include 'connect.php';
$stmt = $connect->prepare("SELECT * FROM options WHERE meal_type = $meal_type AND day = $day AND option_type = $option_type");
$stmt->execute();
$alldata = $stmt->fetchAll();
}
}