<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id='modalBody'>
                Are you sure to delete the skill?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteItemForm" action="/admin/skills/" method="post">
                    @method('delete')
                    @csrf
                    <button type="Submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#staticBackdrop').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var itemId = button.data('item-id');
        var itemName = button.data('item-name');
        var link = button.data('link')
        $('#deleteItemForm').attr('action', link + itemId);
        $('#modalBody').html(`Are you sure to delete ${itemName}?`)
    });
</script>
