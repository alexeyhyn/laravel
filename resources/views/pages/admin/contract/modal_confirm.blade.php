<div class="modal fade" id="modalConfirm4Action" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title"><span class="entity"></span> the Contract</h4>
      </div>
      <div class="modal-body">

        <form name="frm_update_status"  class="form-horizontal">
          <input type="hidden" id="scm_contract_id" />
          <input type="hidden" id="scm_contract_state" />
          <textarea class="form-control" id="contract_change_log" placeholder="Type the note" rows="6"></textarea>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn default btn-cancel" data-dismiss="modal">Close</button>
        <button type="button" class="btn blue btn-save">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>