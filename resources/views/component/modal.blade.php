
<!-- Modal -->
    <div class="modal fade" id="dynamicModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dynamicModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="dynamicModalLabel">{{$title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{$content}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{$cancelBtnName}}</button>
                    <button type="button" id="confirmBtn" class="btn btn-primary">{{$ConfirmBtnName}}</button>
                </div>
            </div>
        </div>
    </div>
