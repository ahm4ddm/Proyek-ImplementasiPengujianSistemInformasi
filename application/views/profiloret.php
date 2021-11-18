<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left:30px;padding-right:30px">
                <div class="row" style="padding-bottom:20px">

                    <div class="inputFields">
                        <h6><?php echo $username; ?></h6>
                        <h6><?php echo $id; ?></h6>
                        <input type="hidden" id="idN" name="topic" value="<?php echo $id; ?>" />
                        <input type="text" id="taskValueJud" placeholder="Enter a title.">
                        <input type="text" id="taskValueCat" placeholder="Enter a note."> <br>
                        <button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="content">
                        <ul id="title">

                        </ul>
                    </div>

                    <div class="col-md-3">
                        <img src="<?= site_url('assets/img/profile.jpeg'); ?>" width="100px" height="100px" style="border-radius:50%;object-fit: cover;" alt="profile picture">
                    </div>
                    <div class="col-md-9">
                        <h3><?php echo $username; ?></h3>
                        <?php if ($totalwaktu == 0) {
                            echo "Kamu belum menggunakan aplikasi ini";
                        } else {
                            echo $totalwaktu . " menit";
                        }; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <button type="button" placeholder="Username" class="btn btn-outline-secondary" disabled>Grade A</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>