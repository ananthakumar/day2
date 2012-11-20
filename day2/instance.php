<?php
class User
{

private $fname = 'anand';
public function setFirstName($fname)

{

$this->fname = $fname;

}

public function getFirstName()

{

return $this->fname;

}
}
?>