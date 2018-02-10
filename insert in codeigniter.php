                View

<input type="text" name="name"/>
<input type="text" name="class"/>

             Controller
<?php
function __construct()
{
    parent:: __construct();
    $this->load->Model('Model');
}

function index()
{
    $this->load->view('view');
}

function user(){
    if (isset($_POST['submit'])){
        $data = array('name'=>$_POST['name'],
                    'class'=>$_POST['class']);
         $this->Model->insert($data);
    }
}

?>
            Model
<?php
function insert($data)
{
    $this->db->insert('table_name',$data);
    return true;
}
?>