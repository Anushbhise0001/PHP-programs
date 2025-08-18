<html>
    <?php
 class Employee{
    public $id = 100;
    public $name = "anush";
    public $place = "narmdapuram";
    public function message(){
        
        return "My name is ". $this->name ." and my id or place is ".$this->id." , ".$this->place;
    }
 }
 $person = new Employee();
//  $person->id =1;
//  $person->name = "anush";
//  $person->place = "narmdapuram";
echo $person->message();

    ?>
</html>