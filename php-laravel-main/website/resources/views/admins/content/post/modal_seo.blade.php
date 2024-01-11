
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th>Seo Keywords</th>
                            <th>Seo Description</th>
                            <th>Seo Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hide">
                            <td contenteditable="true">{{$item->findSeo->seo_keywords}}</td>
                            <td contenteditable="true">{!! $item->findSeo->seo_description !!}</td>
                            <td contenteditable="true">{{$item->findSeo->seo_title}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
