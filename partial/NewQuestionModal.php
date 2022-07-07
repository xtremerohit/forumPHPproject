
<!-- Modal -->
<div class="modal fade" id="NewQuestionModal" tabindex="-1" role="dialog" aria-labelledby="NewQuestionModalLeble1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewQuestionModalLeble1">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewQuestionModalForm">
                    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Question</label>
                            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Describe Question</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- Button trigger modal -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>