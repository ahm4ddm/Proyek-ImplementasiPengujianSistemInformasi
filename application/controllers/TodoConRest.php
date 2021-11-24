<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class TodoConRest extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TodoMod');
        $this->load->library('session');
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
    }

    public function index_get()
    {
        $id = $this->session->userdata('id');
        $notes = $this->TodoMod->getTodo($id);
        if ($notes) {
?>
            <?php foreach ($notes as $nt) { ?>
                <div>
                    <li>
                        <span id="editNote">
                            <?php if ($nt['status'] == 'yes') {
                            ?>
                                <span><del><?php echo $nt['catatan']; ?></del></span>
                                <div class="todolistButton" class="ml-auto">
                                    <i id="removeBtn" class="fas fa-trash" class="float-right" style="font-size: 1rem;color:black" data-id="<?php echo $nt['id']; ?>"></i>
                                </div>
                            <?php } else if ($nt['status'] == 'do') {
                                echo $nt['catatan'];
                            ?>
                                <div class="todolistButton" class="ml-auto">
                                    <i id="updateBtn" class="fas fa-check-square" class="float-right" style="font-size: 1rem;color:black" data-id="<?php echo $nt['id']; ?>"></i>
                                    <i id="removeBtn" class="fas fa-trash" class="float-right" style="font-size: 1rem;color:black" data-id="<?php echo $nt['id']; ?>"></i>
                                </div>
                            <?php
                            }
                            ?>
                        </span>
                    </li>
                </div>
            <?php } ?>
<?php
        } else {
            echo "<span class='text'><h2 style='text-align:center'><strong>No record found!</strong></h2></span>";
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if ($this->TodoMod->delTodo($id) > 0) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function index_post()
    {
        $id = $this->session->userdata('id');
        $data = [
            'catatan' => $this->input->post('catatan'),
            'id_user' => $id,
        ];
        if ($this->input->post('catatan') === null) {
            echo 0;
        }
        if ($this->TodoMod->addTodo($data) > 0) {
            echo 1;
        }
    }

    function index_put()
    {
        $id_note = $this->put('id');
        $data = [
            'status' => 'yes'
        ];
        if ($this->TodoMod->updTodo($data, $id_note)) {
            echo 1;
        }
    }
}
